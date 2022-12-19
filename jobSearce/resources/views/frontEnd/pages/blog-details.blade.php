@extends('frontEnd.master')
@section('title')
    Blog Details
@endsection
@section('content')
    <div class="breadcrumb-banner-area pt-94 pb-85 bg-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h2 class="text-center">Blog Details</h2>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center m-0">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li>Standard blog post.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Start of Blog Area-->
    <div class="blog-area ptb-130 ptb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="single-blog hover-effect mb-50">
                        <div class="blog-image">
                            <img src="{{asset('frontEndAsset')}}/images/blog/2.jpg" alt="">
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Standard blog post.</a></h4>
                            <div class="blog-post-info">
                                <span>Feb 13.</span>
                                <span>ADMIN NAME</span>
                                <span>4 comments</span>
                            </div>
                            <p class="mb-25">It is a long established fact that a reader will be distracted by the readable content of a page when looking  its layout. The point of using Lorem Ipsum is tat it has a more-or-less normal distribution of letters It is a long established fact that a reader will be distracted by the readable content of a page when looking  its layout. The point of using Lorem Ipsum is tat it has a more Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>
                            <p class="mb-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                            <p>it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                    </div>
                    <div class="tags-and-links fix pt-14 pb-12">
                        <div class="related-tag pull-left">
                            <span class="mr-10">Tag:</span>
                            <ul class="tags">
                                <li><a href="#">job,</a></li>
                                <li><a href="#">new,</a></li>
                                <li><a href="#">job board,</a></li>
                                <li><a href="#">job help,</a></li>
                                <li><a href="#">job offer</a></li>
                            </ul>
                        </div>
                        <div class="social-links pull-right">
                            <span>Share:</span>
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="comments fix pt-55">
                        <h4 class="title pb-8 mb-27">Comments</h4>
                        <div class="single-comment fix mb-30">
                            <div class="author-image">
                                <img alt="" src="{{asset('frontEndAsset')}}/images/comment/1.jpg">
                            </div>
                            <div class="comment-text fix">
                                <div class="author-info">
                                    <h4 class="mb-8"><a href="#">MD Abul Miya</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Mar 11, 2018 /</span>
                                </div>
                                <p class="mb-18">There are many variations of passages of Lorem Ipsum available, but the majority have suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                        <div class="single-comment fix mb-30 ml-130">
                            <div class="author-image">
                                <img alt="" src="{{asset('frontEndAsset')}}/images/comment/2.jpg">
                            </div>
                            <div class="comment-text fix">
                                <div class="author-info">
                                    <h4 class="mb-8"><a href="#">Md Robiul Siddikee</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Mar 15, 2018 /</span>
                                </div>
                                <p class="mb-18">There are many variations of passages of Lorem Ipsum available, but the majority have suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                        <div class="single-comment fix mb-30">
                            <div class="author-image">
                                <img alt="" src="{{asset('frontEndAsset')}}/images/comment/3.jpg">
                            </div>
                            <div class="comment-text fix">
                                <div class="author-info">
                                    <h4 class="mb-8"><a href="#"> Samia Sultana</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Feb 12, 2018 /</span>
                                </div>
                                <p class="mb-18">There are many variations of passages of Lorem Ipsum available, but the majority have suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 sidebar-right">
                    <div class="single-sidebar-widget mb-48">
                        <div class="search-container">
                            <form action="#" method="post">
                                <input type="text" placeholder="Search keyword"/>
                                <button>Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="single-sidebar-widget mb-48">
                        <div class="sidebar-widget-title">
                            <h4><span>Categories</span></h4>
                        </div>
                        <ul class="sidebar-widget-lists">
                            <li class="ptb-10"><a href="#">Popular posts<span class="ml-9">(9)</span></a></li>
                            <li class="ptb-10"><a href="#">Productivity <span class="ml-9">(5)</span></a></li>
                            <li class="ptb-10"><a href="#">Resumes <span class="ml-9">(2)</span></a></li>
                            <li class="ptb-10"><a href="#">Women <span class="ml-9">(9)</span></a></li>
                            <li class="ptb-10"><a href="#">Quitting <span class="ml-9">(9)</span></a></li>
                            <li class="ptb-10"><a href="#">Popular posts <span class="ml-9">(7)</span></a></li>
                            <li class="ptb-10"><a href="#">Productivity <span class="ml-9">(2)</span></a></li>
                            <li class="ptb-10"><a href="#">Resumes <span class="ml-9">(5)</span></a></li>
                        </ul>
                    </div>
                    <div class="single-sidebar-widget mb-48">
                        <div class="sidebar-widget-title">
                            <h4><span>Recent Posts</span></h4>
                        </div>
                        <div class="recent-posts">
                            <div class="recent-post-item ptb-20">
                                <h5 class="mb-6"><a href="#">There are many variations of</a></h5>
                                <span class="block"><i class="zmdi zmdi-calendar-check mr-10"></i>20 Jun 2017</span>
                            </div>
                            <div class="recent-post-item ptb-20">
                                <h5 class="mb-6"><a href="#">There are many variations of</a></h5>
                                <span class="block"><i class="zmdi zmdi-calendar-check mr-10"></i>15 Mar 2018</span>
                            </div>
                            <div class="recent-post-item ptb-20">
                                <h5 class="mb-6"><a href="#">There are many variations of</a></h5>
                                <span class="block"><i class="zmdi zmdi-calendar-check mr-10"></i>22 Feb 2018</span>
                            </div>
                            <div class="recent-post-item ptb-20">
                                <h5 class="mb-6"><a href="#">There are many variations of</a></h5>
                                <span class="block"><i class="zmdi zmdi-calendar-check mr-10"></i>01 Jan 2015</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
