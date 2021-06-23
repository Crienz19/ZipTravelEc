<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ZIP Travel Philippines</title>
    <meta name="robots" content="index, follow">
    <meta name="twitter:description" content="ZIP Travel is a career and education counseling/travel organization. We help students and young professionals attend cultural exchanges in the United States, Australia, and Canada.  As a global company, we have been in the business for over 27 years and have helped thousands of students worldwide obtain an opportunity to participate in the Cultural Exchange Program authorized by the U.S. Department of State. ">
    <meta name="twitter:image" content="{{ asset('assets/img/J1%20PROGRAMS-1.jpg') }}">
    <meta name="description" content="ZIP Travel is a career and education counseling/travel organization. We help students and young professionals attend cultural exchanges in the United States, Australia, and Canada.  As a global company, we have been in the business for over 27 years and have helped thousands of students worldwide obtain an opportunity to participate in the Cultural Exchange Program authorized by the U.S. Department of State. ">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/img/J1%20PROGRAMS-1.jpg') }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="ZIP Travel Philippines">
    <link rel="icon" type="image/png" sizes="1944x1944" href="{{ asset('assets/img/LOGO_ZIP.png') }}">
    <link rel="icon" type="image/png" sizes="1944x1944" href="{{ asset('assets/img/LOGO_ZIP.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome5-overrides.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Barlow' rel='stylesheet'>
</head>

<body>
@include('frontview._partials.navbar')
<header class="program-header" style="background-image: url('{{ asset("assets/img/INTERN-1.jpg") }}');background-position: top;background-size: cover;background-repeat: no-repeat;"></header>
    <section class="p-5">
        <div class="container-fluid">
            <div>
                <h3 class="text-center" style="font-weight: bold;">INTERNSHIP PROGRAM</h3>
                <p class="text-justify text-xl-center mt-3">Internship programs are six to 12-month programs designed to allow college and university students and fresh graduates to come to the United States, gain exposure to U.S. culture, and learn U.S. business practices.<br></p>
            </div>
        </div>
    </section>
    <section class="section-blue">
        <div class="container-fluid">
            <div class="row text-center text-white">
                <div class="col">
                    <h3 style="font-weight: bold;">QUALIFICATIONS</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="z-card"><img src="{{ asset('assets/img/plus-18-movie.png') }}" width="120px">
                        <p class="text-white">Must be 18 to 26 years old</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="z-card"><img src="{{ asset('assets/img/graduation.png') }}" width="120px">
                        <p class="text-white">Must be a graduate of any course for not more than 12 months<br></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="z-card"><img src="{{ asset('assets/img/man.png') }}" width="120px">
                        <p class="text-white">Must be able to interact in an English speaking environment<br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5">
        <div class="container-fluid">
            <p class="text-justify text-xl-center">This program aims to bridge the gap between formal education and practical work experience.</p>
        </div>
    </section>
    @include('frontview._partials.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
</body>

</html>