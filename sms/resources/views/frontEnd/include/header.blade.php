<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="{{asset('frontEndAsset')}}/images/logo.png" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="{{route('/')}}">Home</a></li>
                    <li><a class="nav-link" href="{{route('about')}}">About</a></li>
                    <li><a class="nav-link" href="courses.html">Courses</a></li>
                    <li><a class="nav-link" href="{{route('contact-us')}}">Contact us</a></li>
                    <li><a class="nav-link" href="{{route('student-login')}}">Student Login</a></li>
                    <li><a class="nav-link" href="{{route('student-register')}}">Student Register</a></li>
                    @if(Session::get('teacherId'))
                        <li><a class="nav-link" href="{{route('teacher-profile')}}">{{Session::get('teacherName')}}</a></li>
                        <li><a class="nav-link" href="{{route('teacher-logout')}}">LogOut</a></li>
                    @else
                        <li><a class="nav-link" href="{{route('teacher-login')}}"> Teacher Login</a></li>
                    @endif

                </ul>
            </div>

        </div>
    </nav>
</header>
