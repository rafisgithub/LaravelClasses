@extends('frontEnd.master')
@section('title')
    Job board
@endsection
@section('content')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area pt-94 pb-85 bg-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h2 class="text-center">Find a Job</h2>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center m-0">
                                <li><a href="index.html">Home</a></li>
                                <li>Find a Job</li>
                            </ul>
                        </div>
                    </div>
                    <div class="job-search-content text-center brd-style">
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
    <!--End of Breadcrumb Banner Area-->
    <!--Start of Job Post Area-->
    <div class="job-post-area ptb-130 ptb-sm-60">
        <div class="container">
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
@endsection
