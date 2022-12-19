@extends('frontEnd.master')
@section('title')
    Contact
@endsection
@section('content')
    <div class="breadcrumb-banner-area pt-94 pb-85 bg-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h2 class="text-center">Contact Us</h2>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center m-0">
                                <li><a href="index.html">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Start of Google Map-->
    <div class="map-conact-form-area fix ptb-130 ptb-sm-60">
        <div class="container">
            <div class="google-map-area">
                <!--  Map Section -->
                <div id="contacts" class="map-area">
                    <div id="googleMap" style="width:100%;height:485px;"></div>
                </div>
            </div>
        </div>
        <!--Start of Contact Form And info-->
        <div class="container">
            <div class="gray-bg">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="contact-info-wrapper d-flex justify-content-center flex-column light-gray-bg">
                            <div class="contact-info-box">
                                <div class="contact-info text-center">
                                    <div class="single-contact-info">
                                        <div class="single-contact-icon">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                        <div class="single-contact-text">
                                            <span class="block">info@example.com</span>
                                            <span class="block">info@example.com</span>
                                        </div>
                                    </div>
                                    <div class="single-contact-info">
                                        <div class="single-contact-icon">
                                            <i class="zmdi zmdi-phone"></i>
                                        </div>
                                        <div class="single-contact-text">
                                            <span class="block">+012 345 678 102 </span>
                                            <span class="block">+013 345 628 112 </span>
                                        </div>
                                    </div>
                                    <div class="single-contact-info">
                                        <div class="single-contact-icon">
                                            <i class="zmdi zmdi-pin"></i>
                                        </div>
                                        <div class="single-contact-text">
                                            <span class="block">House 09, Road 32, Mohammadpur,</span>
                                            <span class="block">Dhaka-1200, UK</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="followus">
                                    <h4>Follow Us</h4>
                                    <div class="social-links">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div class="contact-form-wrapper">
                                <h4>Get In Touch</h4>
                                <form id="contact-form" action="https://htmldemo.net/jobhere/jobhere-v1/mail.php" method="post">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" name="name" id="name" class="pl-20" placeholder="Name">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="email" id="email" class="pl-20" placeholder="Email">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="text" id="sub" class="pl-20" placeholder="Subject">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" class="mb-10"></textarea>
                                        </div>
                                        <p class="form-messege"></p>
                                        <div class="col-12">
                                            <button type="submit" class="button submit-btn">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

