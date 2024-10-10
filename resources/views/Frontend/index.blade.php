<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Work Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/itcfavicon.png')}}" type="image/x-icon" style="width: 15px;">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>

    <!-- Top Navbar Started  -->

    <div class="bg-dark">
        <div class="container">
            <div class="row justify-content-center align-item-center pt-2 pb-2">
                <div class="col-4 col-md-4 col-sm-4 col-12 d-flex justify-content-center justify-content-md-start">
                    <span class="fs-6 text-dark text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #228B22;"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-dasharray="64" stroke-dashoffset="64"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 3C8.5 3 10.5 7.5 10.5 8C10.5 9 9 10 8.5 11C8 12 9 13 10 14C10.3943 14.3943 12 16 13 15.5C14 15 15 13.5 16 13.5C16.5 13.5 21 15.5 21 16C21 18 19.5 19.5 18 20C16.5 20.5 15.5 20.5 13.5 20C11.5 19.5 10 19 7.5 16.5C5 14 4.5 12.5 4 10.5C3.5 8.5 3.5 7.5 4 6C4.5 4.5 6 3 8 3Z">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0" />
                            </path>
                        </svg>
                        <span class="text-light"> +92 327 0017770</span>
                    </span>
                </div>

                <div class="col-4 col-md-4 col-sm-4 col-12 d-flex justify-content-center">
                    <span class="fs-6 text-dark text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #228B22;"
                            viewBox="0 0 15 15">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M1 2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H1Zm0 1h13v.925a.448.448 0 0 0-.241.07L7.5 7.967L1.241 3.995A.448.448 0 0 0 1 3.925V3Zm0 1.908V12h13V4.908L7.741 8.88a.45.45 0 0 1-.482 0L1 4.908Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="text-light"> info@ITWork.Center</span>
                    </span>
                </div>

                <div class="col-4 col-md-4 col-sm-4 col-12 d-flex justify-content-center justify-content-md-end">
                    <span class="fs-6 text-dark text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #228B22;"
                            viewBox="0 0 14 14">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M11.5 5c0 3-4.5 6.5-4.5 6.5S2.5 8 2.5 5C2.5 2.549 4.549.5 7 .5s4.5 2.049 4.5 4.5" />
                                <path
                                    d="M7 6.5a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3m4.077 3.5H12l1.5 3.5H.5L2 10h.923" />
                            </g>
                        </svg>
                        <span class="text-light">Wireless Pull RYK</span>
                    </span>
                </div>
            </div>
        </div>


    </div>

    <!-- Top Navbar Ended -->

    <!-- Navbar Started -->
    <div class="container shadow " style="border-radius: 40px;">
        <nav class="navbar navbar-expand-lg mt-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/images/logo.png') }}" style="height: 45px;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link ps-3 text-black fw-bold" style="font-size: 16px;" href="/">Home</a>
                        </li>
                        <div class="dropdown">
                            <a href="/course">
                                <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init
                                    class="btn dropdown-toggle text-black fw-bold" style="font-size: 16px;"
                                    type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown"
                                    aria-expanded="false">
                                    Trainings
                                </button>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle text-black " style="font-size: 17px;"
                                        href="#">Web Design</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Frontend</a></li>
                                        <li><a class="dropdown-item" href="#">Backend</a></li>
                                        <li><a class="dropdown-item" href="wordpress.html">Wordpress Theme</a></li>
                                        <a></a>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle text-black " style="font-size: 17px;"
                                        href="#">Graphic Design</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Adobe PhotoShop</a></li>
                                        <li><a class="dropdown-item" href="#">Adobe Illustrator</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle text-black " style="font-size: 17px;"
                                        href="#">App Development</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">React Native </a></li>
                                        <li><a class="dropdown-item" href="#">Flutter </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle text-black " style="font-size: 17px;"
                                        href="#">E-Commerce</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Shopify</a></li>
                                        <li><a class="dropdown-item" href="#">Daraz</a></li>
                                        <li><a class="dropdown-item" href="#">Amazon</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item text-black" href="#">Social Media Maketing</a></li>
                                <li><a class="dropdown-item text-black" href="#">Video Editing</a></li>
                            </ul>
                        </div>


                        <li class="nav-item">
                            <a class="nav-link ps-3 text-black fw-bold" style="font-size: 16px;" href="#">About us</a>
                        </li>

                        <div class="dropdown">
                            <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init
                                class="btn dropdown-toggle text-black fw-bold" type="button" id="dropdownMenuButton"
                                data-mdb-toggle="dropdown" aria-expanded="false">
                                Pages
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Team</a></li>
                                <li><a class="dropdown-item" href="#">Blogs</a></li>
                                <li><a class="dropdown-item" href="#">Login</a></li>
                                <li><a class="dropdown-item" href="#">Register</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>


                        <!-- <li class="nav-item">
                            <a class="nav-link ps-3" href="#">Trainings</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link ps-3 text-black fw-bold" style="font-size: 16px;"
                                aria-disabled="true">Contact us</a>
                        </li>
                </div>
                <div>
                   <a href="/admission"> <button class="pt-2 pb-2 ps-3 pe-3 ms-auto border-0 text-light rounded"
                        style="background-color: #EF7A15;">Get Started</button></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar Ended -->



    <!-- Hero Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-12 mt-5">
                <div>
                    <h1 style="color: #EF7A15;">IT Work Center Rahim Yar Khan</h1>
                    <h1 style="line-height: 62px; font-weight: 800;" class="hero-head1">Empowering Rahim Yar Khan with
                        Tech Skills</h1>
                    <!-- <span style="line-height: 62px; color: #EF7A15;  font-weight: 800;" class="hero-head1">Make Website
                        Look Easy</span>
                    <span style="line-height: 62px; font-weight: 800;" class="hero-head2">And Nice With Premium
                        Templetes</span> -->
                </div>
                <div>
                    <p class="fs-4 mt-5">
                        Looking to kickstart your IT career? IT Work Center offers top-notch IT trainings in Rahim Yar
                        Khan. Learn from industry experts and gain hands-on experience. Empower yourself with the skills
                        that matter.
                    </p>
                </div>
                <div>
                    <a href="/admission">  <button class="pt-2 pb-2 ps-3 pe-3 border-0 text-light rounded mt-3"
                        style="background-color: #EF7A15;">Get Started</button></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <div>
                    <img src="{{ asset('assets/images/herosec.png')}}" style="position: relative; z-index: 999;" class="img-fluid"
                        alt="itworkbanner">
                </div>
                <!-- <div>
                    <img src="Dots.png" style="height: 170px; position: absolute;   bottom: 43px;" alt="">
                </div> -->
            </div>
        </div>
    </div>



    <section class="ep-about ep-section section-gap position-relative mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">


                    <div
                        class="d-flex justify-content-lg-start justify-content-md-start justify-content-sm-stacenterrt ">
                        <img src="{{ asset('assets/images/about_img.png')}}" style="position: relative; z-index: 999;" class="img-fluid"
                            alt="itworkbanner">
                    </div>

                    <!-- <div>
                        <div id="aboutbackimg text-center text-md-center text-sm-center">
                            <img src="images/about_img.png" alt="about-img" class="img-fluid">
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div>
                        <div class="mb-4 mt-2">
                            <span class="fw-bold" style="color: #EF7A15; font-size: 18px;">Know About Us</span>
                            <h1 class="mt-3">
                                Unlocking the <span class="ps-3 pe-3 pt-0 pb-1"
                                    style="background-color: #fec961; border-radius: 45px;">Power</span> <br>
                                of Knowledge
                            </h1>
                            <p class="mt-4" style="color: #4f536c; font-size: 15px;">
                                Et purus duis sollicitudin dignissim habitant. Egestas
                                nulla quis venenatis cras sed eu massa eu faucibus. Urna
                                fusce aenean tortor pretium. Ac
                            </p>
                        </div>
                        <div class="d-flex" style="gap: 20px;">
                            <div class="ep-feature-list">
                                <img src="{{ asset('assets/images/abouttick.png')}}" height="24px" alt="">
                            </div>
                            <div class="ep-feature-list__info">
                                <h3 style="font-size: 20px;">Ignite your passion for learning</h3>
                                <p style="color: #4f536c; font-size: 15px;">
                                    Et purus duis sollicitudin dignissim habitant.
                                    Egestas nulla quis venenatis cras sed eu massa eu
                                    faucibus.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex" style="gap: 20px;">
                            <div class="ep-feature-list__icon">
                                <img src="{{ asset('assets/images/abouttick.png')}}" height="24px" alt="">
                            </div>
                            <div class="ep-feature-list__info">
                                <h3 style="font-size: 20px;">Discover the joy of lifelong learning</h3>
                                <p style="font-size: 15px;">
                                    Et purus duis sollicitudin dignissim habitant.
                                    Egestas nulla quis venenatis cras sed eu massa eu
                                    faucibus.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="text-uppercase mt-5 pt-3 pb-3 ps-4 pe-4"
                            style="outline: none; border: 1px solid; border-radius: 45px;">read more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- About Us Ended -->
    <!-- Start Upcoming Courses -->

    <section class="py-5 eUpcomingCourse pt-5 py-5 ">
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <div class="title-one fs-1 fw-bold ">
                        <h4 class="title fs-1 fw-bold pt-5">Explore Our <span style="color: #EF7A15;">Upcoming</span>
                            <span class="title fs-1 fw-bold animet-text" style="color: #228B22;"> Courses</span>
                        </h4>
                        {{-- <!-- <h4 >Courses</h4> --> --}}
                    </div>

                </div>

            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <div class="Etop_right">
                        <p class="fz_15_m_24 fw-400  position-relative">Discover a world of learning opportunities
                            through our upcoming courses,
                            where industry experts and thought leaders will guide you in acquiring new expertise,
                            expanding your horizons, and reaching your full potential.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row g-3">
                        @foreach ($courses as $course)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="{{ route('courses.show', $course->id) }}" id="top_course_{{ $course->id }}" class="course-item-one d-block position-relative rounded-4 shadow">
                                    <div class="">
                                        <div class="img">
                                            <img loading="lazy" src="{{ asset('storage/' . $course->image) }}" style="height: 240px;" alt="{{ $course->name }}" class="object-fit-cover rounded-4 w-100 course_cards">
                                        </div>
                                    </div>
                                    <!-- Overlay at the bottom -->
                                    <div class="position-absolute bottom-0 w-100 rounded-4 rounded-top-0" style="background: linear-gradient(90deg, #EF7A15, #F06B10, #F58A3E); padding: 10px;">
                                        <div class="text-center">
                                            <span class="text-white fs-6">{{ $course->name }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- End Upcoming Courses -->
    <!-- Top catagories Started -->

    <section class="top-categories py-5 ">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 ">
                    <p class=" text-center fw-bold position-relative" style="color: #EF7A15; font-size: 16px;">
                        Categories</p>
                    <h1 class=" text-center mt-2 " style="font-size: 35px;">Study Aids to <span
                            class="ps-3 pe-3 pt-0 pb-1"
                            style="background-color: #fec961; border-radius: 45px;">Boost</span> <br>
                        Your Learning</h1>
                </div>
            </div>
            <div class="category-product mt-2">
                
                <section class="container-fluid bg-color">
                    <style>
                 
                        .course-card {
                            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; /* Shadow effect for the card */
                        }
                    </style>
                    
                    <div class="row justify-content-center">
                        <!-- 1st -->
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow animate__animated animate__fadeIn mb-5" data-wow-duration="1000" data-wow-delay="600">
                            <div class="bg-white d-flex justify-content-center pt-4 pb-4 rounded-4 course-card">
                                <div class="justify-content-center">
                                    <div class="cate-image text-center rounded-4">
                                        <img src="{{ asset('assets/images/htmlcss.jpg')}}" id="course_img" alt="" class="course-image">
                                    </div>
                                    <div class="eText mt-4">
                                        <h5 class="pt-0 fs-6 fw-semibold text-black">HTML &amp; CSS</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- 2nd -->
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow animate__animated animate__fadeIn mb-5" data-wow-duration="1000" data-wow-delay="600">
                            <div class="bg-white d-flex justify-content-center pt-4 pb-4 rounded-4 course-card">
                                <div class="justify-content-center">
                                    <div class="cate-image text-center rounded-4">
                                        <img src="{{ asset('assets/images/illustrator.jpg') }}" id="course_img" alt="" class="course-image">
                                    </div>
                                    <div class="eText mt-4">
                                        <h5 class="pt-0 fs-6 fw-semibold text-black">Illustrator</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- 3rd -->
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow animate__animated animate__fadeIn mb-5" data-wow-duration="1000" data-wow-delay="600">
                            <div class="bg-white d-flex justify-content-center pt-4 pb-4 rounded-4 course-card">
                                <div class="justify-content-center">
                                    <div class="cate-image text-center rounded-4">
                                        <img src="{{ asset('assets/images/photoshop.jpg') }}" id="course_img" alt="" class="course-image">
                                    </div>
                                    <div class="eText mt-4">
                                        <h5 class="pt-0 fs-6 fw-semibold text-black">Photoshop</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- 4th -->
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow animate__animated animate__fadeIn mb-5" data-wow-duration="1000" data-wow-delay="600">
                            <div class="bg-white d-flex justify-content-center pt-4 pb-4 rounded-4 course-card">
                                <div class="justify-content-center">
                                    <div class="cate-image text-center rounded-4">
                                        <img src="{{ asset('assets/images/i4.jpg') }}" id="course_img" alt="" class="course-image">
                                    </div>
                                    <div class="eText mt-4">
                                        <h5 class="pt-0 fs-6 fw-semibold text-black">WordPress</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- 5th -->
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow animate__animated animate__fadeIn mb-5" data-wow-duration="1000" data-wow-delay="600">
                            <div class="bg-white d-flex justify-content-center pt-4 pb-4 rounded-4 course-card">
                                <div class="justify-content-center">
                                    <div class="cate-image text-center rounded-4">
                                        <img src="{{ asset('assets/images/lervel-01-01.png') }}" id="course_img" alt="" class="course-image">
                                    </div>
                                    <div class="eText mt-4">
                                        <h5 class="pt-0 fs-6 fw-semibold text-black">Laravel</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- 6th -->
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow animate__animated animate__fadeIn mb-5" data-wow-duration="1000" data-wow-delay="600">
                            <div class="bg-white d-flex justify-content-center pt-4 pb-4 rounded-4 course-card">
                                <div class="justify-content-center">
                                    <div class="cate-image text-center rounded-4">
                                        <img src="{{ asset('assets/images/Net-01.png') }}" id="course_img" alt="" class="course-image">
                                    </div>
                                    <div class="eText mt-4">
                                        <h5 class="pt-0 fs-6 fw-semibold text-black">Dot Net</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- 7th -->
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow animate__animated animate__fadeIn mb-5" data-wow-duration="1000" data-wow-delay="600">
                            <div class="bg-white d-flex justify-content-center pt-4 pb-4 rounded-4 course-card">
                                <div class="justify-content-center">
                                    <div class="cate-image text-center rounded-4">
                                        <img src="{{ asset('assets/images/figmaaa.png') }}" id="course_img" alt="" class="course-image">
                                    </div>
                                    <div class="eText mt-4">
                                        <h5 class="pt-0 fs-6 fw-semibold text-black">Figma</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- 8th -->
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow animate__animated animate__fadeIn mb-5" data-wow-duration="1000" data-wow-delay="600">
                            <div class="bg-white d-flex justify-content-center pt-4 pb-4 rounded-4 course-card">
                                <div class="justify-content-center">
                                    <div class="cate-image text-center rounded-4">
                                        <img src="{{ asset('assets/images/premiusrpro.png') }}" id="course_img" alt="" class="course-image">
                                    </div>
                                    <div class="eText mt-4">
                                        <h5 class="pt-0 fs-6 fw-semibold text-black">Premiur Pro</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- 9th -->
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow animate__animated animate__fadeIn mb-5" data-wow-duration="1000" data-wow-delay="600">
                            <div class="bg-white d-flex justify-content-center pt-4 pb-4 rounded-4 course-card">
                                <div class="justify-content-center">
                                    <div class="cate-image text-center rounded-4">
                                        <img src="{{ asset('assets/images/aftereffects.png') }}" id="course_img" alt="" class="course-image">
                                    </div>
                                    <div class="eText mt-4">
                                        <h5 class="pt-0 fs-6 fw-semibold text-black">After Effects</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- 10th -->
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow animate__animated animate__fadeIn mb-5" data-wow-duration="1000" data-wow-delay="600">
                            <div class="bg-white d-flex justify-content-center pt-4 pb-4 rounded-4 course-card">
                                <div class="justify-content-center">
                                    <div class="cate-image text-center rounded-4">
                                        <img src="{{ asset('assets/images/i9.jpg') }}" id="course_img" alt="" class="course-image">
                                    </div>
                                    <div class="eText mt-4">
                                        <h5 class="pt-0 fs-6 fw-semibold text-black">Social Media</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- 11th -->
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow animate__animated animate__fadeIn mb-5" data-wow-duration="1000" data-wow-delay="600">
                            <div class="bg-white d-flex justify-content-center pt-4 pb-4 rounded-4 course-card">
                                <div class="justify-content-center">
                                    <div class="cate-image text-center rounded-4">
                                        <img src="{{ asset('assets/images/mobiledesign.jpg') }}" id="course_img" alt="" class="course-image">
                                    </div>
                                    <div class="eText mt-4">
                                        <h5 class="pt-0 fs-6 fw-semibold text-black">Mobile App</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- 12th -->
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow animate__animated animate__fadeIn mb-5" data-wow-duration="1000" data-wow-delay="600">
                            <div class="bg-white d-flex justify-content-center pt-4 pb-4 rounded-4 course-card">
                                <div class="justify-content-center">
                                    <div class="cate-image text-center rounded-4">
                                        <img src="{{ asset('assets/images/i10.jpg') }}" id="course_img" alt="" class="course-image">
                                    </div>
                                    <div class="eText mt-4">
                                        <h5 class="pt-0 fs-6 fw-semibold text-black">Bootstrap</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                
                
            </div>
        </div>
    </section>

    <!-- Top catagories Ended -->
    <!-- Our Expert Instructor Started -->

    <section
    class="expert-instructor eExpert-instruction top-categories py-5 wow animate__animated animate__fadeInUp opacityOnUp"
    data-wow-duration="1000" data-wow-delay="400">
    {{-- <style>
        .instructor-img {
            max-height: 500px; /* Adjust the maximum height as needed */
            width: auto; /* Maintain aspect ratio */
            object-fit: cover; /* Cover the area while maintaining aspect ratio */
            border-radius: 10px; /* Optional: Add rounded corners */
        }
    
        /* Optionally adjust the swiper-slide size */
        .swiper-slide {
            display: flex; /* Ensure the slide centers the image */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }
    </style> --}}
    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div>
                    <p class="f-36 mt-0 pt-0 mb-0" style="color: #EF7A15; font-weight: 500; font-size: 20px;">Our Mentor</p>
                    <h1 class="mt-4 mb-5 fw-bold">
                        Meet Our <span class="ps-3 pe-3 pt-0 pb-1" style="background-color: #fec961; border-radius: 45px;">Inspiring</span><br>
                        Dedicated Mentor
                    </h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-lg-end justify-content-md-end justify-content-sm-start"
                style="align-items: center;">
                <div class="d-flex justify-content-center" style="align-items: center;">
                   <a href="/admission"> <button class="border-0 text-light mt-3 mb-3"
                        style="background-color: #EF7A15;padding: 18px 26px; border-radius: 42px;">Get Started</button>
                    </a>  </div>
            </div>
        </div>
        <div class="row">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($instructors as $instructor)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $instructor->profile_picture) }}" alt="{{ $instructor->name }}" class="instructor-img">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            breakpoints: {
                480: {
                    slidesPerView: 1
                },
                767: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
                1366: {
                    slidesPerView: 4
                }
            },
            spaceBetween: 20,
            autoplay: true
        });
    </script>
</section>


    <!-- Our Expert Instructor Ended -->
    <!-- Frequently Asked Questions Started -->

    <div class="container-fluid" id="fqabanner">

        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-3 col-md-3 col-sm-6 col-6 ">
                    <div>
                        <div class="text-center">
                            <img src="{{asset ('assets/images/faqs1.png') }}" alt="">
                        </div>
                        <h1 class="text-center mt-4">
                            14<b>+</b>
                        </h1>
                        <p class="text-center" style="color: #4f536c;">Student Enrolled</p>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-6 col-6">
                    <div>
                        <div class="text-center">
                            <img src="{{asset ('assets/images/faqs2.png')}}" alt="">
                        </div>
                        <h1 class="text-center mt-4">
                            14<b>+</b>
                        </h1>
                        <p class="text-center" style="color: #4f536c;">Classes Complete</p>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-6 col-6">
                    <div>
                        <div class="text-center">
                            <img src="{{asset ('assets/images/faqs3.png')}}" alt="">
                        </div>
                        <h1 class="text-center mt-4">
                            14<b>+</b>
                        </h1>
                        <p class="text-center" style="color: #4f536c;">Happy Coustomer</p>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-6 col-6">
                    <div>
                        <div class="text-center">
                            <img src="{{asset ('assets/images/faqs4.png')}}" alt="">
                        </div>
                        <h1 class="text-center mt-4">
                            14<b>+</b>
                        </h1>
                        <p class="text-center" style="color: #4f536c;">Top Instructor</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-white"
                        style="border-radius: 20px; box-shadow: 0px 0px 60px 0px rgba(0, 0, 0, 0.05);">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                                <img src="{{asset ('assets/images/faqimg.png')}}" class="img-fluid p-5" alt="">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="p-5">
                                    <p class="text-uppercase fw-bold" style="color: #EF7A15; font-size: 20px;">
                                        Faqs
                                    </p>
                                    <h2 class="fw-bold">
                                        Frequently Asked <br>
                                        Questions and Answers
                                    </h2>
                                </div>
                                <div class="accordion p-5 pt-0" id="educationAccordion">

                                    <div class="accordion-item rounded-4 mb-3 p-1"
                                        style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <h2 class="accordion-header rounded-4" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span class="number bg-light p-2 rounded-4">01</span>
                                                <span class="ms-3 fw-bold" style="font-size: 18px;">What are the
                                                    benefits of education?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show rounded-4"
                                            aria-labelledby="headingOne" data-bs-parent="#educationAccordion">
                                            <div class="accordion-body rounded-4 ms-5">
                                                The generated is therefore always free from repetition is the injected
                                                humour or words etc.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="rounded-4 mb-3 p-1"
                                        style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <h2 class="accordion-header rounded-4" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <span class="number bg-light p-2 rounded-4">02</span> <span
                                                    class="ms-3 fw-bold" style="font-size: 18px;">What
                                                    are the benefits of education?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse rounded-4 "
                                            aria-labelledby="headingTwo" data-bs-parent="#educationAccordion">
                                            <div class="accordion-body rounded-4  ms-5">
                                                Information about finding the right program for you.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="rounded-4 p-1 mb-3"
                                        style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <span class="number bg-light p-2 rounded-4">03</span> <span
                                                    class="ms-3 fw-bold" style="font-size: 18px;">What
                                                    are the benefits of education?</span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse rounded-4 p-1"
                                            aria-labelledby="headingThree" data-bs-parent="#educationAccordion">
                                            <div class="accordion-body rounded-4  ms-5">
                                                Information about financial aid for education.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    






    <!-- Our Latest Blogs Ended -->
    <!-- Become a Student Started  -->

    <section class="student py-5 ">
        <div class="container">
            <div class="row eStudent">
                <div class="col-lg-6   wow  ">
                    <div class=" mb-5  student-body-1 py-4 rounded-4 "
                    style="background-image: url({{ asset('assets/images/join_card1.jpg') }}); background-size: cover;">                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="student-body-text  position-relative px-5 " style=" height: 220px;">
                                    <h1 class="fs-2 fw-medium text-white">Join now to start learning</h1>
                                    <p class="fs-6 fw-light my-4 text-white">Learn from our quality instructors! </p>
                                    <a href="/admission" class=" btn border fw-bolder px-5 py-2 rounded-3 text-decoration-none"
                                        style=" background-color: #fff;color: #1E293B;">Get started</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  wow  ">
                    <div class="student-body-2 py-4 rounded-4"
                    style="background-image: url({{ asset('assets/images/join_card2.jpg') }}); background-size: cover;">                        <div class="row">
                        <div class="row">
                            <div class="col-lg-8  col-md-8 col-sm-12">
                                <div class="student-body-text  position-relative px-5 " style=" height: 220px;">
                                    <h1 class="fs-2 fw-medium text-white">Become a new instructor</h1>
                                    <p class="fs-6 fw-light my-4 text-white">Teach thousands of students and earn money!
                                    </p>
                                    <a href="#" class="  btn border fw-bolder px-5 py-2 rounded-3 text-decoration-none"
                                        style=" background-color: #fff; color: #1E293B;">Join now</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Become a Student Ended -->
    <!-- Footer Section Started -->

    <section class="footer wow position-relative pt-5 " style="background-color: #1f1c35;">
        <div class="container">
            <div class="row justify-content-between" style="    padding: 40px 0px 90px;  padding-bottom: 20px;">
                <div
                    class="col-lg-3 col-md-6 col-sm-12 col-12 d-flex justify-content-lg-center justify-content-md-center justify-content-sm-start mb-3">
                    <div>
                        <img loading="lazy" src="{{ asset('assets/images/footlogo.png') }}" style="height: 40px;">

                        <p class="mt-5" style="color: #fff; font-size: 17px;">
                            Readers lose focus without clear, <br> engaging content.
                        </p>

                        <div class="mt-4 pt-2">
                            <div>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        style="color: #fff;" viewBox="0 0 14 14">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M11.5 5c0 3-4.5 6.5-4.5 6.5S2.5 8 2.5 5C2.5 2.549 4.549.5 7 .5s4.5 2.049 4.5 4.5" />
                                            <path
                                                d="M7 6.5a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3m4.077 3.5H12l1.5 3.5H.5L2 10h.923" />
                                        </g>
                                    </svg></span>
                                <!-- <span style="color: #fff; font-size: 17px;" class="pt-1 ms-2">
                                    Address
                                </span> -->
                                <span class="ms-4 ps-1" style="font-size: 17px; color: #fff;">
                                    66 Broklyant, New York India

                                </span>
                            </div>



                        </div>
                        <div class="mt-4 ">
                            <div>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        style="color: #fff;" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-dasharray="64"
                                            stroke-dashoffset="64" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 3C8.5 3 10.5 7.5 10.5 8C10.5 9 9 10 8.5 11C8 12 9 13 10 14C10.3943 14.3943 12 16 13 15.5C14 15 15 13.5 16 13.5C16.5 13.5 21 15.5 21 16C21 18 19.5 19.5 18 20C16.5 20.5 15.5 20.5 13.5 20C11.5 19.5 10 19 7.5 16.5C5 14 4.5 12.5 4 10.5C3.5 8.5 3.5 7.5 4 6C4.5 4.5 6 3 8 3Z">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s"
                                                values="64;0" />
                                        </path>
                                    </svg></span>
                                <!-- <span style="color: #fff; font-size: 17px;" class="pt-1 ms-2">
                                    Phone Number
                                </span> -->
                                <span class="ms-4 pt-1 ps-1" style="font-size: 17px; color: #fff;">
                                    +92 327 0017770
                                </span>
                            </div>



                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-3 col-md-6 col-sm-6 mb-5 d-flex justify-content-lg-center justify-content-md-center justify-content-sm-start ">
                    <div>
                        <h1 class="fs-5 fw-semibold mb-3 text-white">Top categories</h1>
                        <ul class="p-0 mt-5 pt-2">
                            <li><a href="htmlcss.html" class="d-inline-block py-2 text-decoration-none text-white"> HTML
                                    &amp; CSS</a></li>
                            <li><a href="#" class="d-inline-block py-2 text-decoration-none text-white"> Color
                                    Theory</a></li>
                            <li><a href="photoshop.html" class="d-inline-block py-2 text-decoration-none text-white">
                                    Photoshop</a></li>
                            <li><a href="wordpresstheme.html"
                                    class="d-inline-block py-2 text-decoration-none text-white">
                                    WordPress Theme</a></li>
                            <li><a href="#" class="d-inline-block py-2 text-decoration-none text-white">
                                    Adobe Illustrator</a></li>
                            <li><a href="responsive.html" class="d-inline-block py-2 text-decoration-none text-white">
                                    Responsive Design</a></li>
                        </ul>
                    </div>
                </div>
                <div
                    class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-lg-center justify-content-md-center justify-content-sm-start ">
                    <div>
                        <h1 class="fs-5 fw-semibold mb-3 text-white">Useful links</h1>
                        <ul class="p-0 mt-5 pt-2">
                            <li> <a href="#" class="d-inline-block py-2 text-decoration-none text-white">Become An
                                    Instructor</a></li>
                            <li> <a href="#" class="d-inline-block py-2 text-decoration-none text-white">Blog</a></li>
                            <li><a href="#" class="d-inline-block py-2 text-decoration-none text-white">All Courses</a>
                            </li>
                            <li><a href="#" class="d-inline-block py-2 text-decoration-none text-white">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-4 d-flex justify-content-lg-center justify-content-md-center justify-content-sm-start "
                    style="background-image: url(images/footer-pattern.png);">
                    <div>
                        <h1 class="fs-5 fw-semibold mb-3 text-white">Help</h1>
                        <div class="mt-5 pt-2">
                            <input type="text"
                                style="border-right: none; border-left: none; border-top: none; color: #fff; outline: none;"
                                class="bg-transparent border-light pb-2" placeholder="Enter your e-mail">
                            <!-- <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    style="color: #fff; position: relative; right: 20px; bottom: 4px;">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5"
                                        d="m14 10l-3 3m9.288-9.969a.535.535 0 0 1 .68.681l-5.924 16.93a.535.535 0 0 1-.994.04l-3.219-7.242a.534.534 0 0 0-.271-.271l-7.242-3.22a.535.535 0 0 1 .04-.993l16.93-5.925Z" />
                                </svg></span> -->

                        </div>
                        <button class="border-0 text-light  mt-3 mb-3"
                            style="background-color: #EF7A15;padding: 3px 26px; border-radius: 42px;">
                            Send</button>
                        <div>
                            <p style="font-size: 18px; color: #fff;" class="mt-4">
                                Follow Us
                            </p>
                        </div>
                    </div>
                </div>
                <div style="border-bottom: 1px solid gray;">

                </div>
            </div>

            <div class="row">
                <!-- <div class="d-flex justify-content-between"></div> -->
                <div class="col-6 col-md-12 col-sm-12 text-lg-center text-md-center text-sm-center">
                    <p class="pt-4 mb-0" style="color: #fff;">© IT Work Center 2024 | All Rights Reserved</p>
                </div>

                <div class="col-6 col-md-12 col-sm-12">
                    <ul class="ps-0 ms-0 d-flex pt-4 justify-content-lg-center justify-content-md-center justify-content-sm-center"
                        style="gap: 25px;">
                        <li style="color: #fff;">Terms & Condition</li>
                        <li style="color: #fff;">Privacy Policy</li>
                        <li style="color: #fff;">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>

        </div>

    </section>

    <!-- Footer Section Ended -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</body>

</html>