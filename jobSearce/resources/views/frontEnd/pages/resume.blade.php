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
                        <h2 class="text-center">Create Resume</h2>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center m-0">
                                <li><a href="index.html">Home</a></li>
                                <li>Resume</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Start of Single Job Post Area-->
    <div class="single-job-post-area ptb-130 ptb-sm-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="#">
                        <div class="single-job-content">
                            <div class="title"><span>Profile</span></div>
                            <div class="single-job-form">
                                <div class="single-info mb-14 fix">
                                    <label class="uppercase pull-left m-0">photo</label>
                                    <div class="uploader fix pull-left fileupload">
                                        <input id="fileupload" name="fileupload" type="file">
                                        <span class="filename">Upload your company logo</span>
                                        <span class="action"><i class="zmdi zmdi-folder"></i>Browse</span>
                                    </div>
                                </div>
                                <div class="single-info pb-14">
                                    <label for="f_name" class="uppercase pull-left m-0">First Name</label>
                                    <div class="form-box fix">
                                        <input type="text" id="f_name" name="f_name" placeholder="Please enter your first name">
                                    </div>
                                </div>
                                <div class="single-info pb-14">
                                    <label for="m_name" class="uppercase pull-left m-0">Middle name</label>
                                    <div class="form-box fix">
                                        <input type="text" id="m_name" name="m_name" placeholder="Please enter your middle name">
                                    </div>
                                </div>
                                <div class="single-info">
                                    <label for="l_name" class="uppercase pull-left m-0">last name</label>
                                    <div class="form-box fix">
                                        <input type="text" id="l_name" name="l_name" placeholder="Please enter your last name">
                                    </div>
                                </div>
                            </div>
                            <div class="title"><span>Contact Information</span></div>
                            <div class="single-job-form">
                                <div class="single-info mb-14">
                                    <label for="country" class="uppercase pull-left m-0">country</label>
                                    <div class="form-box fix">
                                        <input type="text" id="country" name="country" placeholder="Please enter your country name">
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="city" class="uppercase pull-left m-0">city</label>
                                    <div class="form-box fix">
                                        <input type="text" id="city" name="city" placeholder="Please enter your city name">
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="address" class="uppercase pull-left m-0">address</label>
                                    <div class="form-box fix">
                                        <input type="text" id="address" name="address" placeholder="Please enter your address">
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="phone" class="uppercase pull-left m-0">phone</label>
                                    <div class="form-box fix">
                                        <input type="text" id="phone" name="phone" placeholder="Please enter your phone number">
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="email" class="uppercase pull-left m-0">email</label>
                                    <div class="form-box fix">
                                        <input type="text" id="email" name="email" placeholder="Please enter your email">
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="website" class="uppercase pull-left m-0">website</label>
                                    <div class="form-box fix">
                                        <input type="text" id="website" name="website" placeholder="Please enter your website">
                                    </div>
                                </div>
                            </div>
                            <div class="title"><span>Biography</span></div>
                            <div class="single-job-form">
                                <div class="single-info mb-14 fix">
                                    <label class="uppercase pull-left m-0">description</label>
                                    <div class="desc fix">
                                        <textarea name="textarea" class="fix textarea" cols="30" rows="10" placeholder="Please enter description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="title"><span>Education</span></div>
                            <div class="single-job-form">
                                <div class="single-info mb-14">
                                    <label for="school_name" class="uppercase pull-left m-0">school name</label>
                                    <div class="form-box fix">
                                        <input type="text" id="school_name" name="school_name" placeholder="Please enter your school name">
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="school_name" class="uppercase pull-left m-0">degree</label>
                                    <div class="form-box fix">
                                        <input type="text" id="degree" name="degree" placeholder="Please enter your degree">
                                    </div>
                                </div>
                                <div class="single-info mb-14 fix">
                                    <label class="uppercase pull-left m-0">description</label>
                                    <div class="desc fix">
                                        <textarea name="textarea" class="fix small textarea" cols="30" rows="10" placeholder="Please enter description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="title"><span>Experience</span></div>
                            <div class="single-job-form mb-0">
                                <div class="single-info pb-14">
                                    <label for="title" class="uppercase pull-left m-0">Job Title</label>
                                    <div class="form-box fix">
                                        <input type="text" id="title" name="title" placeholder="Enter your title">
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="date_from" class="uppercase pull-left m-0">date from</label>
                                    <div class="form-box fix">
                                        <input type="text" id="date_from" name="date_from" placeholder="Please enter date">
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="date_to" class="uppercase pull-left m-0">date to</label>
                                    <div class="form-box fix">
                                        <input type="text" id="date_to" name="date_to" placeholder="Please enter date">
                                    </div>
                                </div>
                                <div class="single-info fix">
                                    <label class="uppercase pull-left m-0">description </label>
                                    <div class="desc fix">
                                        <textarea name="textarea" class="fix small textarea" cols="30" rows="10" placeholder="Please enter description"></textarea>
                                        <div class="resubtn mt-40">
                                            <a href="#" class="button button-medium-box">save resume</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



