@extends('frontEnd.master')
@section('title')
    JobHere
@endsection

@section('content')
    <!-- End of Header Area -->
    <!-- Search Form Start -->
    <div class="search-job-area bg-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="job-search-content text-center">
                        <h4>One million success stories</h4>
                        <h2>find job our website</h2>
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
    <div class="job-categroy-area ptb-130 ptb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center ">
                        <h2>Job Category </h2>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit sed do</p>
                    </div>
                </div>
            </div>
            <div class="category-job-list-actiive owl-carousel">
                <div class="category-item">
                    <div class="img-icon">
                        <img src="{{asset('frontEndAsset')}}/images/icons/cat1.png" alt="">
                    </div>
                    <h5>Hotel & Restaurant</h5>
                    <h6>(16 Jobs)</h6>
                </div>
                <div class="category-item">
                    <div class="img-icon">
                        <img src="{{asset('frontEndAsset')}}/images/icons/cat2.png" alt="">
                    </div>
                    <h5>Travel & Agency </h5>
                    <h6>(10 Jobs)</h6>
                </div>
                <div class="category-item">
                    <div class="img-icon">
                        <img src="{{asset('frontEndAsset')}}/images/icons/cat3.png" alt="">
                    </div>
                    <h5>Business & Finance</h5>
                    <h6>(15 Jobs)</h6>
                </div>
                <div class="category-item">
                    <div class="img-icon">
                        <img src="{{asset('frontEndAsset')}}/images/icons/cat4.png" alt="">
                    </div>
                    <h5>Theme & Software</h5>
                    <h6>(18 Jobs)</h6>
                </div>
                <div class="category-item">
                    <div class="img-icon">
                        <img src="{{asset('frontEndAsset')}}/images/icons/cat1.png" alt="">
                    </div>
                    <h5>Hotel & Restaurant</h5>
                    <h6>(16 Jobs)</h6>
                </div>
                <div class="category-item">
                    <div class="img-icon">
                        <img src="{{asset('frontEndAsset')}}/images/icons/cat2.png" alt="">
                    </div>
                    <h5>Travel & Agency </h5>
                    <h6>(10 Jobs)</h6>
                </div>
                <div class="category-item">
                    <div class="img-icon">
                        <img src="{{asset('frontEndAsset')}}/images/icons/cat3.png" alt="">
                    </div>
                    <h5>Business & Finance</h5>
                    <h6>(15 Jobs)</h6>
                </div>
                <div class="category-item">
                    <div class="img-icon">
                        <img src="{{asset('frontEndAsset')}}/images/icons/cat4.png" alt="">
                    </div>
                    <h5>Theme & Software</h5>
                    <h6>(18 Jobs)</h6>
                </div>
                <div class="category-item">
                    <div class="img-icon">
                        <img src="{{asset('frontEndAsset')}}/images/icons/cat1.png" alt="">
                    </div>
                    <h5>Hotel & Restaurant</h5>
                    <h6>(16 Jobs)</h6>
                </div>
                <div class="category-item">
                    <div class="img-icon">
                        <img src="{{asset('frontEndAsset')}}/images/icons/cat2.png" alt="">
                    </div>
                    <h5>Travel & Agency </h5>
                    <h6>(10 Jobs)</h6>
                </div>
                <div class="category-item">
                    <div class="img-icon">
                        <img src="{{asset('frontEndAsset')}}/images/icons/cat3.png" alt="">
                    </div>
                    <h5>Business & Finance</h5>
                    <h6>(15 Jobs)</h6>
                </div>
                <div class="category-item">
                    <div class="img-icon">
                        <img src="{{asset('frontEndAsset')}}/images/icons/cat4.png" alt="">
                    </div>
                    <h5>Theme & Software</h5>
                    <h6>(18 Jobs)</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Category End -->
    <!--Start of Job Post Area-->
    <div class="job-post-area pb-100 pb-sm-35">
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
            <div class="all-job-post">
                <!-- Nav tabs -->
                <div class="post-tab nav">
                    <a class="nav-link" data-bs-toggle="tab" href="#featured">FEATURED JOBS</a>
                    <a class="nav-link  active" data-bs-toggle="tab" href="#recent_job">RECENT JOBS</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#featured">PART TIME</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#recent_job">FULL TIME</a>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="featured">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Online English Teachers</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Teacher</p>
                                        <p>Date : 14.05.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Hiring Web designer & Developer</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Designer</p>
                                        <p>Date : 12.06.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>SEO Analiyst & Reviewer</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Designer</p>
                                        <p>Date : 11.02.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Content Writer and Speaker</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Education</p>
                                        <p>Date : 14.09.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Hiring Online English Teachers</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Designer</p>
                                        <p>Date : 14.09.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Social Media Expert</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Media</p>
                                        <p>Date : 14.09.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="recent_job">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Font-End Develper</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Web</p>
                                        <p>Date : 18.05.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Senior Software Engineer</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Engineering</p>
                                        <p>Date : 11.05.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Platform/Backend Engineer</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Engineering</p>
                                        <p>Date : 09.02.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Social media Specialist</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Media</p>
                                        <p>Date : 01.10.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Platform/Backend Engineer</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Engineering</p>
                                        <p>Date : 09.02.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/company-logo/1.png" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Hiring Online English Teachers</h6>
                                        <p>Publisher : Company Name</p>
                                        <p>In : Designer</p>
                                        <p>Date : 14.09.2018</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">APPLY NOW</a></div>

                                </div>
                            </div>
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
    <div class="woring-area pt-130 pb-100 pt-sm-60 pb-sm-30">
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
            <div class="row work-shap">
                <div class="col-md-4">
                    <div class="work-item">
                        <div class="img-icon">
                            <img src="{{asset('frontEndAsset')}}/images/icons/wrk1.png" alt="">
                        </div>
                        <h5>Create An Account</h5>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit, sed do eiusmod tempor incididunt ut lab et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-item">
                        <div class="img-icon">
                            <img src="{{asset('frontEndAsset')}}/images/icons/wrk2.png" alt="">
                        </div>
                        <h5>Search Desired Job</h5>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit, sed do eiusmod tempor incididunt ut lab et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-item">
                        <div class="img-icon">
                            <img src="{{asset('frontEndAsset')}}/images/icons/wrk3.png" alt="">
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
                            <img src="{{asset('frontEndAsset')}}/images/blog/1.jpg" alt="">
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
                            <img src="{{asset('frontEndAsset')}}/images/blog/2.jpg" alt="">
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
                            <img src="{{asset('frontEndAsset')}}/images/blog/3.jpg" alt="">
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
                            <img src="{{asset('frontEndAsset')}}/images/blog/1.jpg" alt="">
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
                            <img src="{{asset('frontEndAsset')}}/images/blog/2.jpg" alt="">
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
                            <img src="{{asset('frontEndAsset')}}/images/blog/3.jpg" alt="">
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
    <!--End of Blog Area-->
    <!--Start of Footer Widget-area-->
@endsection
