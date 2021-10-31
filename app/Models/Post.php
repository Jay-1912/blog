<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'desc', 'tag_id'];

    public function tag(){
        return $this->belongsTo('App\Models\Tag', 'tag_id');
    }

    public function authour(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
