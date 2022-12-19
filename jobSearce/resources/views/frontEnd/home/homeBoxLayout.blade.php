@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('content')
    <div class="slider-area">
        <div class="preview-2">
            <div id="nivoslider" class="slides">
                <img src="images/slider/2.jpg" alt="" title="#slider-1-caption1"/>
                <img src="images/slider/1.jpg" alt="" title="#slider-1-caption2"/>
            </div>
            <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                <div class="banner-content slider-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-content-wrapper">
                                    <div class="text-content text-center">
                                        <h4 class="title2 wow bounceInLeft text-white mb-16" data-wow-duration="3s" data-wow-delay="0s">One million success stories</h4>
                                        <h1 class="title1 wow bounceInRight text-white mb-16" data-wow-duration="3s" data-wow-delay="0s">Find Job Our Website</h1>
                                        <p class="sub-title wow bounceInRight hidden-xs" data-wow-duration="3s" data-wow-delay="1s"> There are many variations of passages of Lorem Ipsum available, but the majority<br> have suffered alteration in some form, by injected humour, or randomised words<br> which don't look even slightly believable.</p>
                                        <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="3s" data-wow-delay="2s">
                                            <a class="button slider-btn" href="#">ABOUT US</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                <div class="banner-content slider-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-content-wrapper">
                                    <div class="text-content slide-2 text-center">
                                        <h4 class="title2 wow bounceInLeft text-white mb-16" data-wow-duration="3s" data-wow-delay="0s">One million success stories</h4>
                                        <h1 class="title1 wow flipInX text-white mb-16" data-wow-duration="1s" data-wow-delay="0s">Find Job Our Website</h1>
                                        <p class="sub-title wow lightSpeedIn hidden-xs" data-wow-duration="1s" data-wow-delay=".2s"> There are many variations of passages of Lorem Ipsum available, but the majority<br> have suffered alteration in some form, by injected humour, or randomised words<br> which don't look even slightly believable.</p>
                                        <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="1s" data-wow-delay=".6s">
                                            <a class="button slider-btn" href="#">ABOUT US</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Slider Area-->
    <!-- Search Form Start -->
    <div class="search-catestyle2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ml-auto mr-auto">
                    <div class="job-search-content text-center">
                        <form action="#" method="post">
                            <div class="form-container">
                                <div class="box-select">
                                    <div class="select">
                                        <select name="category">
                                            <option>Keywords</option>
                                            <option>Finance</option>
                                            <option>Accountant</option>
                                            <option>Enginner</option>
                                            <option>Programmer</option>
                                            <option>Developer</option>
                                        </select>
                                    </div>
                                    <div class="select">
                                        <select name="date">
                                            <option>All Regions</option>
                                            <option>Dhaka</option>
                                            <option>Shylet</option>
                                            <option>Khulna</option>
                                            <option>Barishal</option>
                                            <option>Chittagong</option>
                                        </select>
                                    </div>
                                    <div class="select">
                                        <select name="date">
                                            <option>Category</option>
                                            <option>Web Design</option>
                                            <option>Designing</option>
                                            <option>Development</option>
                                            <option>Programming</option>
                                            <option>Developing</option>
                                        </select>
                                    </div>
                                    <div class="select">
                                        <button type="button">Search</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Form End -->
    <!-- Job Category Start -->
    <div class="job-categroy-area2 pt-130 pb-100 pt-sm-60 pb-sm-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center ">
                        <h2>Job Category </h2>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit sed do</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="category-item2">
                        <div class="img-icon">
                            <img src="images/icons/h2c1.png" alt="">
                        </div>
                        <div class="cat-text">
                            <h5>Hotel & Restaurant</h5>
                            <h6>(16 Jobs)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="category-item2">
                        <div class="img-icon">
                            <img src="images/icons/h2c2.png" alt="">
                        </div>
                        <div class="cat-text">
                            <h5>Education & Training</h5>
                            <h6>(18 Jobs)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="category-item2">
                        <div class="img-icon">
                            <img src="images/icons/h2c3.png" alt="">
                        </div>
                        <div class="cat-text">
                            <h5>Finance & Accounting</h5>
                            <h6>(15 Jobs)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="category-item2">
                        <div class="img-icon">
                            <img src="images/icons/h2c4.png" alt="">
                        </div>
                        <div class="cat-text">
                            <h5>Medical & Health</h5>
                            <h6>(12 Jobs)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="category-item2">
                        <div class="img-icon">
                            <img src="images/icons/h2c5.png" alt="">
                        </div>
                        <div class="cat-text">
                            <h5>Ecommerce & Fashion</h5>
                            <h6>(16 Jobs)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="category-item2">
                        <div class="img-icon">
                            <img src="images/icons/h2c6.png" alt="">
                        </div>
                        <div class="cat-text">
                            <h5>Banking & Management</h5>
                            <h6>(18 Jobs)</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Category End -->
    <!--Start of Job Post Area-->
    <div class="job-post-area2 pt-130 pt-sm-60 pb-100 pb-sm-35 off-white-bg">
        <div class="container">
            <!-- Section Title Start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center ">
                        <h2>All Job</h2>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit sed do</p>
                    </div>
                </div>
            </div>
            <!-- Section Title End -->
            <div class="all-job-post2">
                <!-- Nav tabs -->
                <div class="post-tab2 nav">
                    <a class="nav-link" data-bs-toggle="tab" href="#featured">FEATURED JOBS</a>
                    <a class="nav-link  active" data-bs-toggle="tab" href="#recent_job">RECENT JOBS</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#featured">PART TIME</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#recent_job">FULL TIME</a>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="featured">
                        <div class="row">
                            <!-- Single Item Start -->
                            <div class="col-md-12">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Hiring Web designer & Developer</h6>
                                        <p>Company Name</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-pin zmdi-hc-fw"></i>Your Address</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-time"></i>25.07.2018</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>
                                </div>
                            </div>
                            <!-- Single Item Start -->
                            <!-- Single Item Start -->
                            <div class="col-md-12">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Online English Teachers</h6>
                                        <p>Company Name</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-pin zmdi-hc-fw"></i>Your Address</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-time"></i>25.07.2018</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>
                                </div>
                            </div>
                            <!-- Single Item Start -->
                            <!-- Single Item Start -->
                            <div class="col-md-12">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Online English Teachers</h6>
                                        <p>Company Name</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-pin zmdi-hc-fw"></i>Your Address</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-time"></i>25.07.2018</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>
                                </div>
                            </div>
                            <!-- Single Item Start -->
                            <!-- Single Item Start -->
                            <div class="col-md-12">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>SEO Analiyst & Reviewer</h6>
                                        <p>Company Name</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-pin zmdi-hc-fw"></i>Your Address</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-time"></i>25.07.2018</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>
                                </div>
                            </div>
                            <!-- Single Item Start -->
                            <!-- Single Item Start -->
                            <div class="col-md-12">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Content Writer and Speaker</h6>
                                        <p>Company Name</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-pin zmdi-hc-fw"></i>Your Address</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-time"></i>25.07.2018</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>
                                </div>
                            </div>
                            <!-- Single Item Start -->
                        </div>
                    </div>
                    <div class="tab-pane" id="recent_job">
                        <div class="row">
                            <!-- Single Item Start -->
                            <div class="col-md-12">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Social Media Expert</h6>
                                        <p>Company Name</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-pin zmdi-hc-fw"></i>Your Address</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-time"></i>25.07.2018</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>
                                </div>
                            </div>
                            <!-- Single Item Start -->
                            <!-- Single Item Start -->
                            <div class="col-md-12">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Font-End Develper</h6>
                                        <p>Company Name</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-pin zmdi-hc-fw"></i>Your Address</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-time"></i>25.07.2018</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>
                                </div>
                            </div>
                            <!-- Single Item Start -->
                            <!-- Single Item Start -->
                            <div class="col-md-12">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Senior Software Engineer</h6>
                                        <p>Company Name</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-pin zmdi-hc-fw"></i>Your Address</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-time"></i>25.07.2018</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>
                                </div>
                            </div>
                            <!-- Single Item Start -->
                            <!-- Single Item Start -->
                            <div class="col-md-12">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Hiring Online English Teachers</h6>
                                        <p>Company Name</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-pin zmdi-hc-fw"></i>Your Address</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-time"></i>25.07.2018</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>
                                </div>
                            </div>
                            <!-- Single Item Start -->
                            <!-- Single Item Start -->
                            <div class="col-md-12">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Platform/Backend Engineer</h6>
                                        <p>Company Name</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-pin zmdi-hc-fw"></i>Your Address</p>
                                    </div>
                                    <div class="loaction">
                                        <p> <i class="zmdi zmdi-time"></i>25.07.2018</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>
                                </div>
                            </div>
                            <!-- Single Item Start -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Job Post Area -->
    <!--Start of Fun Factor Area-->
    <div class="fun-factor-area bg-1 text-center ptb-100 pt-sm-60 pb-sm-30">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="single-fun-factor">
                        <h1><span class="counter">340</span> +</h1>
                        <h3>Customers</h3>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single-fun-factor">
                        <h1><span class="counter">450</span> +</h1>
                        <h3>members</h3>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single-fun-factor">
                        <h1><span class="counter">220</span></h1>
                        <h3>Resume</h3>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single-fun-factor">
                        <h1><span class="counter">299</span></h1>
                        <h3>Company</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Fun Factor Area-->
    <!-- Working Aera Start -->
    <div class="woring-area2 pt-130 pb-100 pt-sm-60 pb-sm-30">
        <div class="container">
            <!-- Section Title Start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center ">
                        <h2>How It Works</h2>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit sed do</p>
                    </div>
                </div>
            </div>
            <!-- Section Title End -->
            <div class="row work-shap work-shop2">
                <div class="col-md-4">
                    <div class="work-item">
                        <div class="img-icon">
                            <img src="images/icons/wrk1.png" alt="">
                            <span>1</span>
                        </div>
                        <h5>Create An Account</h5>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit, sed do eiusmod tempor incididunt ut lab et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-item">
                        <div class="img-icon">
                            <img src="images/icons/wrk2.png" alt="">
                            <span>2</span>
                        </div>
                        <h5>Search Desired Job</h5>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit, sed do eiusmod tempor incididunt ut lab et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-item">
                        <div class="img-icon">
                            <img src="images/icons/wrk3.png" alt="">
                            <span>3</span>
                        </div>
                        <h5>Send Your Resume</h5>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit, sed do eiusmod tempor incididunt ut lab et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Working Aera End -->
    <!--Testimonial Area Start-->
    <div class="testimonial-area bg-2 text-center fix ptb-100 ptb-sm-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-white">
                        <h2>Client Say</h2>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit sed do</p>
                    </div>
                    <div class="testimonial-carousel carousel-style-one">
                        <div class="single-testimonial">
                            <div class="testimonial-text pt-46">
                                <p class="text-white p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru exercitation ullamco laboris nisi ut aliquip</p>
                            </div>
                            <div class="testimonial-info">
                                <span class="testimonial-name text-white">Kevin Roberts</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Testimonial Area-->
    <!--Start of Blog Area-->
    <div class="blog-area pt-130 pb-110 pt-sm-60 pb-sm-40">
        <div class="container">
            <!-- Section Title Start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center ">
                        <h2>Our Blog</h2>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit sed do</p>
                    </div>
                </div>
            </div>
            <!-- Section Title End -->
            <div class="blog-carousel carousel-style-two">
                <!-- Single Item Start -->
                <div class="single-blog hover-effect">
                    <div class="blog-image box-hover">
                        <a href="#" class="block">
                            <img src="images/blog/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="blog-details.html">Standard blog post.</a></h4>
                        <div class="blog-post-info">
                            <span>Feb 13.</span>
                            <span>ADMIN NAME</span>
                            <span>4 comments</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adiicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim</p>
                    </div>
                </div>
                <!-- Single Item End -->
                <!-- Single Item Start -->
                <div class="single-blog hover-effect">
                    <div class="blog-image box-hover">
                        <a href="#" class="block">
                            <img src="images/blog/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="blog-details.html">Standard blog post.</a></h4>
                        <div class="blog-post-info">
                            <span>Feb 13.</span>
                            <span>ADMIN NAME</span>
                            <span>4 comments</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adiicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim</p>
                    </div>
                </div>
                <!-- Single Item End -->
                <!-- Single Item Start -->
                <div class="single-blog hover-effect">
                    <div class="blog-image box-hover">
                        <a href="#" class="block">
                            <img src="images/blog/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="blog-details.html">Standard blog post.</a></h4>
                        <div class="blog-post-info">
                            <span>Feb 13.</span>
                            <span>ADMIN NAME</span>
                            <span>4 comments</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adiicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim</p>
                    </div>
                </div>
                <!-- Single Item End -->
                <!-- Single Item Start -->
                <div class="single-blog hover-effect">
                    <div class="blog-image box-hover">
                        <a href="#" class="block">
                            <img src="images/blog/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="blog-details.html">Standard blog post.</a></h4>
                        <div class="blog-post-info">
                            <span>Feb 13.</span>
                            <span>ADMIN NAME</span>
                            <span>4 comments</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adiicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim</p>
                    </div>
                </div>
                <!-- Single Item End -->
                <!-- Single Item Start -->
                <div class="single-blog hover-effect">
                    <div class="blog-image box-hover">
                        <a href="#" class="block">
                            <img src="images/blog/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="blog-details.html">Standard blog post.</a></h4>
                        <div class="blog-post-info">
                            <span>Feb 13.</span>
                            <span>ADMIN NAME</span>
                            <span>4 comments</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adiicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim</p>
                    </div>
                </div>
                <!-- Single Item End -->
                <!-- Single Item Start -->
                <div class="single-blog hover-effect">
                    <div class="blog-image box-hover">
                        <a href="#" class="block">
                            <img src="images/blog/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="blog-details.html">Standard blog post.</a></h4>
                        <div class="blog-post-info">
                            <span>Feb 13.</span>
                            <span>ADMIN NAME</span>
                            <span>4 comments</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adiicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim</p>
                    </div>
                </div>
                <!-- Single Item End -->
            </div>
        </div>
    </div>
@endsection
