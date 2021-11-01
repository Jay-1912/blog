<x-layout>
    <?php $page = "Posts"; ?>
    <x-breadcrumb :page="$page" />

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!-- Blog Details Wrapper Start -->
            <div class="blog-details-wrapper section-space--ptb_80">
                <div class="container">
                    <div class="row row--17">
                        @if($posts)
                            @foreach ($posts as $post)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <!-- Single Following Post Start -->
                                    <div class="single-following-post" data-aos="fade-up">
                                        <a href="blog-details.html" class="following-post-thum">
                                            <img src="images/blog/01.jpg" alt="">
                                        </a>
                                        <div class="following-post-content">
                                            <div class="following-blog-post-top">
                                                <div class="trending-blog-post-category">
                                                    <a href="/tags/{{$post->tag->name}}" class="business">{{$post->tag->name}}</a>
                                                </div>
                                                <div class="following-blog-post-author">
                                                    By <a href="#">{{$post->authour->username}}</a>
                                                </div>
                                            </div>
                                            <h5 class="following-blog-post-title">
                                                <a href="/posts/{{$post->title}}">
                                                    {{$post->title}}
                                                </a>
                                            </h5>
                                            <div class="following-blog-post-meta">
                                                <div class="post-meta-left-side">
                                                    <span class="post-date">
                                                    <i class="icofont-ui-calendar"></i>
                                                    <a href="#">{{$post->created_at->diffForHumans()}}</a>
                                                </span>
                                                    <span>10 min read</span>
                                                </div>
                                                <div class="post-meta-right-side">
                                                    <a href="#"><img src="images/icons/small-bookmark.png" alt="" /></a>
                                                    <a href="#"><img src="images/icons/heart.png" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Single Following Post End -->
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div> <!-- Blog Details Wrapper End -->


            <!-- Trending Topic Area Start -->
            <div class="trending-topic-area bg-gray section-space--ptb_80">
                <div class="container">
                    <!-- Newsletter Subscribe Area Start -->
                    <div class="newsletter-subscribe-inner section-space--mt_80" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="section-title mb-4">
                                    <h3>Subscribe For Newsletter</h3>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="newsletter-input-box">
                                    <input class="newsletter-input" type="text" placeholder="Enter your email">
                                    <div class="button-box">
                                        <a href="#" class="btn-primary btn-large">Subscribe Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="newsletter-inner-image">
                            <img class="newsletter-image-01" src="images/shap/1-newsletter.png" alt="">
                            <img class="newsletter-image-02" src="images/shap/2-newsletter.png" alt="">
                        </div>
                    </div>
                    <!-- Newsletter Subscribe Area End -->

                </div>
            </div>
            <!-- Trending Topic Area End -->
        </div>
    </div>

</x-layout>
