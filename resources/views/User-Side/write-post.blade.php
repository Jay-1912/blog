<x-layout>
    <?php $page = "Post"; ?>
    <x-breadcrumb :page="$page" />






    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <div class="share-your-thinking-area section-space--ptb_80">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="share-thinking-title">
                                <h2 class="title">Share Your Thinking</h2>
                            </div>
                        </div>
                    </div>

                    <form action="add/post" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title-write">
                                    <label for="title">Write Your Title</label>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h6><input type="text" name="title" class="write-content-box w-100"></h6>
                            </div>
                            @error('title')
                                <span style="color:red; font-size:small; font-weight:bold">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title-write">
                                    <label for="desc">Description</label>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="write-content-box"><textarea name="desc" id="editor" class=" w-100"></textarea></div>
                            </div>
                            @error('desc')
                                    <span style="color:red; font-size:small; font-weight:bold">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title-write">
                                    <label for="tag">Tags</label>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="write-content-box">
                                    <select name="tag" id="">
                                        @if ($tags)
                                            <option value="" selected>Please select Tag</option>
                                            @foreach ($tags as $tag)
                                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </h6>
                                @error('tag')
                                    <span style="color:red; font-size:small; font-weight:bold">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="button-box">
                                <button type="submit" class="btn-large btn-primary">Publish Now <i class="icofont-long-arrow-right"></i></button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>

        </div>
    </div>
</x-layout>
