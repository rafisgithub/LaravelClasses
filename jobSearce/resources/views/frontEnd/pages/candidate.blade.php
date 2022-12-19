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
                        <h2 class="text-center">Candidates List</h2>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center m-0">
                                <li><a href="index.html">Home</a></li>
                                <li>Candidates</li>
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
    <div class="canditates-area ptb-130 ptb-sm-60">
        <div class="container">
            <div class="all-job-post">
                <!-- Nav tabs -->
                <div class="post-tab nav">
                    <a class="nav-link" data-bs-toggle="tab" href="#featured">FULL TIME</a>
                    <a class="nav-link  active" data-bs-toggle="tab" href="#recent_job">PART TIME</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#featured">FREELANCER</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#recent_job">FREELANCER</a>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="featured">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/1.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/2.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/3.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/4.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/5.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/6.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/7.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/8.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="loadmorebtn">
                                    <a href="#" class="button">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="recent_job">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/8.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/7.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/6.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/5.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/4.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/3.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/2.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-job-post">
                                    <div class="img-icon">
                                        <img src="{{asset('frontEndAsset')}}/images/candidates/1.jpg" alt="">
                                    </div>
                                    <div class="address">
                                        <h6>Applicant Name</h6>
                                        <p><span>Designation</span></p>
                                        <p>$ 5000  (Min)</p>
                                        <p>Location : Dhaka</p>
                                    </div>
                                    <div class="button-box"><a href="#" class="button button-black">VIEW RESUME</a></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="loadmorebtn">
                                    <a href="#" class="button">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



