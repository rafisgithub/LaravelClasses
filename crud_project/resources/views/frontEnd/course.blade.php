
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
                            Building on our strong roots in leadership, health care and education, Eduford is proud to offer an array of coed graduate programs for women and men who are ready to advance their careers and grow as leaders. The Eduford College Community Psychology Master's program will help you to meet your goals of becoming a Licensed Professional Counselor.
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


@endsection
