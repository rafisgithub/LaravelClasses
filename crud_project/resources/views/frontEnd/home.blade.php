@extends('frontEnd.master')
@section('content')

    <section class="courses mb-5">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <h1>Courses we offer</h1>
                <p>Explore the intersection of technology and society. Learn about environmental justice. Take the famous Problem of God course. Our innovative courses inspire and invite you to help solve some of today’s most pressing local, national and global issues.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card course-content ">
                    <div class="card-body">
                        <h4>Undergraduate Programs</h4>
                        <p>
                            For decades, Eduford College has improved the health of our communities, one graduate at a time. The JoAnn McGrath School of Nursing and Health Professions, as one of the largest nursing schools in Wisconsin, offers a wide array of fully accredited nursing programs, guaranteed clinical placements and a technology-rich Center for Clinical Education.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card course-content">
                    <div class="card-body">
                        <h4>Graduate Programs</h4>
                        <p>
                            Building on our strong roots education, Eduford is proud to offer an array of coed graduate programs for women and men who are ready to advance their careers and grow as leaders. The Eduford College Community Psychology Master's program will help you to meet your goals of becoming a Licensed Professional Counselor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card course-content">
                    <div class="card-body">
                        <h4>Post Graduation</h4>
                        <p>
                            The Eduford, as one of the largest nursing schools in Wisconsin, offers a wide array of fully accredited nursing programs, guaranteed clinical placements and a technology-rich Center for Clinical Education. The Eduford College Community Psychology Master's program will help you to meet your goals of becoming a Licensed Professional Counselor.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="campus mb-5">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <h1>Our Global Campus</h1>
                <p>The University of Hartford's main campus is located on Bloomfield Avenue. Surrounded by green space, the main campus is divided into residential and academic buildings connected by a bridge that overlooks the north branch of the Park River, known to us as Hog River.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class=" campus-content">
                    <img src="{{asset('frontEndAsset')}}/image/london.png" alt="">
                    <div class="layer"></div>
                    <div class="layer-content">
                        <h3>LONDON</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="campus-content">
                    <img src="{{asset('frontEndAsset')}}/image/newyork.png" alt="">
                    <div class="layer"></div>
                    <div class="layer-content">
                        <h3>NEW YORK</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class=" campus-content">
                    <img src="{{asset('frontEndAsset')}}/image/washington.png" alt="">
                    <div class="layer"></div>
                    <div class="layer-content">
                        <h3>WASHINGTON</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="facilities">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <div class="facilities-text">
                    <h1>Our Facilities</h1>
                    <p>We commit to meet the financial need of every admitted undergraduate student. We don’t consider your ability to pay when we review your application, and we don’t base our decision on whether you can cover the cost. If you’re accepted here, you belong here.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5 c-mr-0 facilities-content">
            <div class="col-md-4">
                <div class="card single-facility">
                    <img src="{{asset('frontEndAsset')}}/image/library.png" alt="">
                    <div class="card-body mt-3 single-facility-body">
                        <h3>World Class Library</h3>
                        <p>Pursue research at Eduford’s libraries, which include more than 3.5 million holdings. Whether your focus is on a specific discipline, interdisciplinary areas or emerging fields, our libraries offer academic resources, a maker hub, collaborative spaces and more.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card single-facility">
                    <img src="{{asset('frontEndAsset')}}/image/basketball.png" alt="">
                    <div class="card-body mt-3 single-facility-body">
                        <h3>Largest Play Ground</h3>
                        <p>The College introduces students to philosophy and theology and challenges them to delve deeply into the arts, humanities, languages, social sciences and sciences.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card single-facility">
                    <img src="{{asset('frontEndAsset')}}/image/cafeteria.png" alt="">
                    <div class="card-body mt-3 single-facility-body">
                        <h3>Tasty and Healthy Food.</h3>
                        <p>Whether students pursue studies in Arabic, chemistry, government or one of hundreds of other opportunities, they are part of a rich legacy of academic excellence designed to serve them well in an ever-changing world.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="testimonial">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <div class="testimonial-text">
                    <h1>What Our Student Says</h1>
                    <p>We commit to meet the financial need of every admitted undergraduate student. We don’t consider your ability to pay when we review your application, and we don’t base our decision on whether you can cover the cost. If you’re accepted here, you belong here.</p>
                </div>
            </div>
        </div>

        <div class="row c-mr-0 mt-5 mb-5 ">
            <div class="col-md-6 col-12">
                <div class="row testimonial-content">
                    <div class="col-md-2 col-2">
                        <img class="img-fluid" src="{{asset('frontEndAsset')}}/image/user1.jpg" alt="">
                    </div>
                    <div class="col-md-10 col-10">
                        <div>
                            <p>“Eduford is home to me not because of the fancy buildings like Healy Hall, or its prestigious reputation, but rather because of the university’s care for the whole person as each of us attempts to live our lives for others.” </p>
                            <h5>Anamika Saha</h5>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 TH">
                <div class="row testimonial-content">
                    <div class="col-md-2 col-2">
                        <img class="img-fluid" src="{{asset('frontEndAsset')}}/image/user2.jpg" alt="">
                    </div>
                    <div class="col-md-10 col-10">
                        <div>
                            <p class="pb-6">“It’s likely that you will come to love some of the most amazing souls this campus has to offer. That love may come in the form of friendships that you know will last forever.”</p>
                            <h5>Abhishek Roy</h5>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="row c-mr-0">
            <div class="col-md-12 ">
                <div class="cta-content">
                    <h1>Enroll For Our Various Online Courses </h1>
                    <h1 class="mt-5 mb-5">Anywhere from the World</h1>
                    <p class="text-center">
                        <a href="" class="btn btn-outline-primary hero-btn">Contact Us</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
