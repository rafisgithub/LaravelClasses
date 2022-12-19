@extends('frontEnd.master')
@section('title')
    Job Details
@endsection
@section('content')
    <div class="breadcrumb-banner-area pt-94 pb-85 bg-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h2 class="text-center">About Us</h2>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center m-0">
                                <li><a href="index.html">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!-- About Area Start -->
    <div class="about-area ptb-130 ptb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="abt-img img-full">
                        <img src="{{asset('frontEndAsset')}}/images/bg/about.jpg" alt="jobhere">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="abt-content">
                        <h4><span>About</span> Job Here</h4>
                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectel adipis elit, sed do eiusmod tempor incidi ut labore et dolore m aliqua. Ut enim ad minim veniam, quis nostrud exercitatik ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                        <p>sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudanti totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archite beatae vitae dicta sunt explicabo. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
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
                            <img src="{{asset('frontEndAsset')}}/images/icons/wrk1.png" alt="">
                            <span>1</span>
                        </div>
                        <h5>Create An Account</h5>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit, sed do eiusmod tempor incididunt ut lab et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-item">
                        <div class="img-icon">
                            <img src="{{asset('frontEndAsset')}}/images/icons/wrk2.png" alt="">
                            <span>2</span>
                        </div>
                        <h5>Search Desired Job</h5>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit, sed do eiusmod tempor incididunt ut lab et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-item">
                        <div class="img-icon">
                            <img src="{{asset('frontEndAsset')}}/images/icons/wrk3.png" alt="">
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
    <div class="team-area pt-130 pb-100 pt-sm-60 pb-sm-30">
        <div class="container">
            <!-- Section Title Start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center ">
                        <h2>Team Member</h2>
                        <p>Lorem ipsum dolor sit amet, contetur adipisil elit sed do</p>
                    </div>
                </div>
            </div>
            <!-- Section Title End -->
            <div class="row">
                <!-- Single Team Start -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{asset('frontEndAsset')}}/images/team/1.jpg" alt="jobhere">
                        </div>
                        <div class="team-content">
                            <h5>Jon Dowe</h5>
                            <h6>CEO Jobhere</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Team End -->
                <!-- Single Team Start -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{asset('frontEndAsset')}}/images/team/2.jpg" alt="jobhere">
                        </div>
                        <div class="team-content">
                            <h5>Jon Dowe</h5>
                            <h6>CEO Jobhere</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Team End -->
                <!-- Single Team Start -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{asset('frontEndAsset')}}/images/team/3.jpg" alt="jobhere">
                        </div>
                        <div class="team-content">
                            <h5>Jon Dowe</h5>
                            <h6>CEO Jobhere</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Team End -->
                <!-- Single Team Start -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{asset('frontEndAsset')}}/images/team/4.jpg" alt="jobhere">
                        </div>
                        <div class="team-content">
                            <h5>Jon Dowe</h5>
                            <h6>CEO Jobhere</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Team End -->
            </div>
        </div>
    </div>
@endsection



