<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/itcfavicon.png') }}" type="image/x-icon" style="width: 15px;">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>

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
                <a class="navbar-brand" href="index.html">
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
                            <a class="nav-link ps-3 text-black fw-bold" style="font-size: 16px;"
                                href="index.html">Home</a>
                        </li>
                        <div class="dropdown">
                            <a href="courses.html">
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
                                <li><a class="dropdown-item text-black" href="#">Social Media Marketing</a></li>
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

                        <li class="nav-item">
                            <a class="nav-link ps-3 text-black fw-bold" style="font-size: 16px;"
                                aria-disabled="true">Contact us</a>
                        </li>
                </div>
                <div>
                    <button class="pt-2 pb-2 ps-3 pe-3 ms-auto border-0 text-light rounded"
                        style="background-color: #EF7A15;">Get Started</button>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar Ended -->

    <section class="mt-5">
        <div class="bread-crumb" style="background-image: url('{{ asset('assets/images/course-breadcramb.png') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 pt-4">
                                <li class="breadcrumb-item py-3">
                                    <a class="text-decoration-none" href="index.html">
                                        <img loading="lazy" class="brd-home mb-1" src="{{ asset('assets/images/home.png') }}"
                                            style="width: 16px;">
                                        <span class="text-white">Home </span>
                                    </a>
                                </li>
                                <li><i class="fa-solid fa-chevron-right mx-2 text-white"></i></li>
                                <li class="breadcrumb-item active py-3 " aria-current="page">
                                    <span class="text-white">Courses</span>
                                </li>
                            </ol>
                        </nav>
                        <h1 class="fs-1 text-white fw-600">Courses</h1>
                    </div>
                    <div class="col-3 ms-auto d-none d-sm-inline-block">
                        <div class="book-img ">
                            <img loading="lazy" src="{{ asset('assets/images/brd-book.png') }}" alt="" class="float-lg-end w-75">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!---------- Bread Crumb Area End ---------->

<section class="grid-view courses-list-view">
    <div class="container">
        <div class="row">
            <div class="courses-card courses-list-view-card mb-5">
                <div class="row mt-5">
                    @foreach ($courses as $course) <!-- Loop through each course -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                            <a href="{{ route('courses.show', $course->id) }}" class="checkPropagation courses-card-body text-decoration-none">
                                <div class="boxx border rounded-4 shadow">
                                    <div class="courses-card-image position-relative">
                                        <img loading="lazy" src="{{ asset('storage/' . $course->image) }}" class="h-100 object-fit-cover rounded-top-4 w-100" alt="{{ $course->name }}">
                                        <div class="courses-icon" id="coursesWishlistIcon12">
                                            <i class="fa-solid fa-heart checkPropagation bg-white p-2 position-absolute rounded-4 text-black-50"></i>
                                        </div>
                                    </div>
                                    <div class="courses-text p-3">
                                        <p class="mb-2 fw-bold fs-5 text-black">{{ $course->name }}</p>
                                        <p class="text-secondary">{{ $course->details }}</p>
                                        <div class="">
                                            <button class="border-0 text-light mt-3 mb-3" style="background-color: #EF7A15;padding: 3px 26px; border-radius: 42px;">
                                                READ MORE
                                            </button>
                                        </div>
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

<!-- Footer Section Started -->

    <section class="footer wow position-relative pt-5" style="background-color: #1f1c35;">
        <div class="container">
            <div class="row justify-content-between" style="padding: 40px 0px 90px; padding-bottom: 20px;">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 d-flex justify-content-lg-center justify-content-md-center justify-content-sm-start mb-3">
                    <div>
                        <img loading="lazy" src="{{ asset('assets/images/footlogo.png') }}" style="height: 40px;">
                        <p class="mt-5" style="color: #fff; font-size: 17px;">
                            Readers lose focus without clear, <br> engaging content.
                        </p>
                        <div class="mt-4 pt-2">
                            <div>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" style="color: #fff;" viewBox="0 0 14 14">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M11.5 5c0 3-4.5 6.5-4.5 6.5S2.5 8 2.5 5C2.5 2.549 4.549.5 7 .5s4.5 2.049 4.5 4.5" />
                                            <path d="M7 6.5a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3m4.077 3.5H12l1.5 3.5H.5L2 10h.923" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="ms-4 ps-1" style="font-size: 17px; color: #fff;">
                                    66 Broklyant, New York India
                                </span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #fff;" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-dasharray="64" stroke-dashoffset="64" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 3C8.5 3 10.5 7.5 10.5 8C10.5 9 9 10 8.5 11C8 12 9 13 10 14C10.3943 14.3943 12 16 13 15.5C14 15 15 13.5 16 13.5C16.5 13.5 21 15.5 21 16C21 18 19.5 19.5 18 20C16.5 20.5 15.5 20.5 13.5 20C11.5 19.5 10 19 7.5 16.5C5 14 4.5 12.5 4 10.5C3.5 8.5 3.5 7.5 4 6C4.5 4.5 6 3 8 3Z">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0" />
                                        </path>
                                    </svg>
                                </span>
                                <span class="ms-4 pt-1 ps-1" style="font-size: 17px; color: #fff;">
                                    +92 327 0017770
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5 d-flex justify-content-lg-center justify-content-md-center justify-content-sm-start ">
                    <div>
                        <h1 class="fs-5 fw-semibold mb-3 text-white">Top categories</h1>
                        <ul class="p-0 mt-5 pt-2">
                            <li><a href="htmlcss.html" class="d-inline-block py-2 text-decoration-none text-white"> HTML &amp; CSS</a></li>
                            <li><a href="#" class="d-inline-block py-2 text-decoration-none text-white"> Color Theory</a></li>
                            <li><a href="photoshop.html" class="d-inline-block py-2 text-decoration-none text-white"> Photoshop</a></li>
                            <li><a href="wordpresstheme.html" class="d-inline-block py-2 text-decoration-none text-white"> WordPress Theme</a></li>
                            <li><a href="#" class="d-inline-block py-2 text-decoration-none text-white"> Adobe Illustrator</a></li>
                            <li><a href="responsive.html" class="d-inline-block py-2 text-decoration-none text-white"> Responsive Design</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-lg-center justify-content-md-center justify-content-sm-start ">
                    <div>
                        <h1 class="fs-5 fw-semibold mb-3 text-white">Useful links</h1>
                        <ul class="p-0 mt-5 pt-2">
                            <li> <a href="#" class="d-inline-block py-2 text-decoration-none text-white">Become An Instructor</a></li>
                            <li> <a href="#" class="d-inline-block py-2 text-decoration-none text-white">Blog</a></li>
                            <li><a href="#" class="d-inline-block py-2 text-decoration-none text-white">All Courses</a></li>
                            <li><a href="#" class="d-inline-block py-2 text-decoration-none text-white">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-4 d-flex justify-content-lg-center justify-content-md-center justify-content-sm-start " style="background-image: url({{ asset('assets/images/footer-pattern.png') }});">
                    <div>
                        <h1 class="fs-5 fw-semibold mb-3 text-white">Help</h1>
                        <div class="mt-5 pt-2">
                            <input type="text" style="border-right: none; border-left: none; border-top: none; color: #fff; outline: none;" class="bg-transparent border-light pb-2" placeholder="Enter your e-mail">
                        </div>
                        <button class="border-0 text-light mt-3 mb-3" style="background-color: #EF7A15;padding: 3px 26px; border-radius: 42px;">
                            Send</button>
                        <div>
                            <p style="font-size: 18px; color: #fff;" class="mt-4">
                                Follow Us
                            </p>
                        </div>
                    </div>
                </div>
                <div style="border-bottom: 1px solid gray;"></div>
            </div>
    
            <div class="row">
                <div class="col-6 col-md-12 col-sm-12 text-lg-center text-md-center text-sm-center">
                    <p class="pt-4 mb-0" style="color: #fff;">© IT Work Center 2024 | All Rights Reserved</p>
                </div>
    
                <div class="col-6 col-md-12 col-sm-12">
                    <ul class="ps-0 ms-0 d-flex pt-4 justify-content-lg-center justify-content-md-center justify-content-sm-center" style="gap: 25px;">
                        <li style="color: #fff;">Terms & Condition</li>
                        <li style="color: #fff;">Privacy Policy</li>
                        <li style="color: #fff;">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Footer Section Ended -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</body>

</html>