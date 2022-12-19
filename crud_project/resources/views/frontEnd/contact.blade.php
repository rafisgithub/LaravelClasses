@extends('frontEnd.master')
@section('content')
    <div class="row c-mr-0">
        <div class="col-md-12">
            <div class="text-box text-center">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>

    </section>

    <section class="map">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9024419979205!2d90.3932688!3d23.750858100000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd552c2b3b%3A0x4e70f117856f0c22!2sBASIS%20Institute%20of%20Technology%20%26%20Management%20(BITM)!5e0!3m2!1sen!2sbd!4v1661158766398!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- ================= Start contact Area ============= -->
    <section class="contact-area">
        <div class="row c-mr-0">
            <div class="col-md-6">

                <div class="row mt-5">
                    <div class="col-md-1">
                        <i class="fa-solid fa-house-chimney"></i>
                    </div>
                    <div class="col-md-11">
                        <h2>
                            University of Engineering and Management, Gurukul Campus</h2>
                        <p>Jaipur, Rajasthan, India</p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-1">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="col-md-11">
                        <h2>+91 6378281761</h2>
                        <p>Monday to Saturday, 10AM to 6PM</p>
                    </div>
                </div>

                <div class="row mt-5 ">
                    <div class="col-md-1">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="col-md-11">
                        <h2>amalendupandey56@gmail.com</h2>
                        <p>Email us your queries</p>
                    </div>
                </div>


            </div>

            <div class="col-md-6">
                <div class="contact-form">
                    <form action="">
                        <input type="text" class="form-control" placeholder="your Name">
                        <input type="email" class="form-control" placeholder="your Email">
                        <input type="text" class="form-control" placeholder="your Subject">
                        <textarea class="form-control" rows="10" placeholder="your Message"></textarea>
                        <input type="submit" class="btn hero-btn2" value="Send Message">
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
