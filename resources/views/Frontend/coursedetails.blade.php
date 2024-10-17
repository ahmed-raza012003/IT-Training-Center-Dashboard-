<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/itcfavicon.png" type="image/x-icon" style="width: 15px;">
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
                    <img src={{asset('assets/images/logo.png')}} style="height: 45px;" alt="">
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
                                href="/">Home</a>
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
                    </ul>
                    <div>
                        <a href="admission">    <button class="pt-2 pb-2 ps-3 pe-3 ms-auto border-0 text-light rounded"
                                style="background-color: #EF7A15;">Get Started</button>
                        
                        </a>    </div>
                        <div class="m-2">
                            <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
        
                         </div>
                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar Ended -->




    <!---------- Banner Start ---------->
    <section class="mt-5">
        <style>
            .overlay {
                background-color: rgba(255, 255, 255, 0.9); /* White background with slight transparency */
                padding: 30px; /* Increased padding for better layout */
                border-radius: 15px; /* Curved corners */
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15); /* Box shadow for depth */
                margin-bottom: 20px; /* Margin at the bottom for spacing */
            }
    
            .text-light {
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7); /* Text shadow for better readability */
            }
    
            .text-dark {
                color: #343a40; /* Darker text color for better contrast */
            }
    
            .course-details-1st-text {
                margin-bottom: 20px; /* Added bottom margin to separate sections */
            }
    
            .info-tag {
                margin-bottom: 10px; /* Space between info tags */
            }
    
            .review {
                margin-top: 15px; /* Space above review section */
            }
    
            .icon ul {
                margin: 0; /* Remove default margin */
                padding: 0; /* Remove default padding */
            }
        </style>
        
        <div class="bread-crumb courses-details"
            style="background-image: url('{{ asset('assets/images/course-breadcramb-1.png') }}'); background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="overlay">
                            <div class="courses-details-1st-text fw-bold text-dark fs-1 mb-4 mt-5">
                                <h1 class="mb-4">{{ $course->name }}</h1>
                                <p class="mb-3 text-dark fs-5">{{ $course->details }}</p>
                                <div class="review">
                                    <div class="row">
                                        <div class="col-12 course-heading-info mb-3 d-flex flex-wrap">
                                            <div class="info-tag d-flex align-items-center fs-6 me-4">
                                                <p class="text-12px me-1"><strong>Duration:</strong></p>
                                                <p class="text-15px">
                                                    <?php
                                                    // Calculate total hours
                                                    $sessionsPerWeek = 5; // Number of sessions per week
                                                    $hoursPerSession = 3; // Duration of each session in hours
                                                    $totalHours = round($course->duration * 4.33 * $sessionsPerWeek * $hoursPerSession);
                                                    ?>
                                                    {{ $totalHours }} Hours
                                                </p>
                                            </div>
    
                                            <div class="info-tag d-flex align-items-center fs-6 me-4">
                                                <div class="icon">
                                                    <ul class="d-flex list-unstyled ps-0">
                                                        <li class="me-0 text-warning"><i class="fa-solid fa-star text-15px mt-7px"></i></li>
                                                        <li class="me-0 text-warning"><i class="fa-solid fa-star text-15px mt-7px"></i></li>
                                                        <li class="me-0 text-warning"><i class="fa-solid fa-star text-15px mt-7px"></i></li>
                                                        <li class="me-0 text-warning"><i class="fa-solid fa-star text-15px mt-7px"></i></li>
                                                        <li class="me-0"><i class="fa-solid fa-star text-light text-15px mt-7px"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-12 course-heading-info mb-3 d-flex flex-wrap">
                                            <div class="info-tag d-flex align-items-center fs-6 me-4">
                                                <i class="fas fa-language text-15px mt-8px" style="margin-top: 4px;"></i>
                                                <p class="text-15px">English</p>
                                            </div>
    
                                            <div class="info-tag d-flex align-items-center fs-6 me-4">
                                                <p><i class="far fa-calendar-alt text-15px mt-7px"></i></p>
                                                <p class="text-12px mt-5px me-1"><strong>Last updated:</strong></p>
                                                <p class="text-15px">Sun, 26-Nov-2023</p>
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
    </section>
    
    
    
    <!---------- Banner Area End ---------->

    <!--------- course Decription Page Start ------>
    <section class="course-decription mt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 order-2 order-lg-1">
                    <div class=" bg-white course-left-side p-2 rounded-4 shadow" style=" margin-top: -35px;">
                        <ul class=" border-bottom justify-content-between mx-4 nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link active border-0 d-inline-block fs-6 fw-medium nav-link position-relative py-2"
                                    id="course-overview-tab" data-bs-toggle="tab" data-bs-target="#course-overview"
                                    type="button" role="tab" aria-controls="course-overview" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18.666"
                                        viewBox="0 0 14 18.666">
                                        <g id="Group_8" data-name="Group 8" transform="translate(14 0) rotate(90)">
                                            <path id="Shape"
                                                d="M7,14.307l3.7,3.78c1.3,1.326,3.3.227,3.3-1.81V0H0V16.277c0,2.037,2,3.136,3.3,1.81ZM2,2.385V16.277l5-5.11,5,5.11V2.385Z"
                                                transform="translate(0 14) rotate(-90)" fill="#1e293b"
                                                fill-rule="evenodd" />
                                        </g>
                                    </svg>

                                    <span class="ms-2 " style="color: #1E293B;">Overview</button></span>
                            </li>
                            <!-- c -->
                            <li class="nav-item" role="presentation">
                                <button class=" border-0 d-inline-block fs-6 fw-medium nav-link position-relative py-2"
                                    id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor" type="button"
                                    role="tab" aria-controls="contact" aria-selected="false">
                                    <svg id="Group_12" data-name="Group 12" xmlns="http://www.w3.org/2000/svg"
                                        width="15.582" height="19.666" viewBox="0 0 15.582 19.666">
                                        <path id="Shape"
                                            d="M7.791,1.731a6.06,6.06,0,0,0-6.06,6.06V9.522A.866.866,0,1,1,0,9.522V7.791a7.791,7.791,0,0,1,15.582,0V9.522a.866.866,0,1,1-1.731,0V7.791A6.06,6.06,0,0,0,7.791,1.731Z"
                                            transform="translate(0 9.278)" fill="#1e293b" />
                                        <path id="Shape-2" data-name="Shape"
                                            d="M5.194,8.656A3.463,3.463,0,1,0,1.731,5.194,3.463,3.463,0,0,0,5.194,8.656Zm0,1.731A5.194,5.194,0,1,0,0,5.194,5.194,5.194,0,0,0,5.194,10.388Z"
                                            transform="translate(2.597)" fill="#1e293b" fill-rule="evenodd" />
                                    </svg>

                                    <span class="ms-2" style="color: #1E293B;">Instructor</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="border-0 d-inline-block fs-6 fw-medium nav-link position-relative py-2"
                                    id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button"
                                    role="tab" aria-controls="reviews" aria-selected="false">
                                    <svg id="Group_14" data-name="Group 14" xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="19.749" viewBox="0 0 20 19.749">
                                        <path id="Shape"
                                            d="M5,13.9V17L10.062,14,10.591,14A40.888,40.888,0,0,0,16,13.533a1.9,1.9,0,0,0,1.649-1.542A23.708,23.708,0,0,0,18,8a23.709,23.709,0,0,0-.346-3.991A1.9,1.9,0,0,0,16,2.467,40.515,40.515,0,0,0,10,2a40.514,40.514,0,0,0-6,.467A1.9,1.9,0,0,0,2.346,4.009,23.7,23.7,0,0,0,2,8a23.7,23.7,0,0,0,.346,3.991,1.859,1.859,0,0,0,1.285,1.455ZM.375,3.67A3.9,3.9,0,0,1,3.695.489,42.513,42.513,0,0,1,10,0a42.512,42.512,0,0,1,6.305.489,3.9,3.9,0,0,1,3.319,3.18A25.7,25.7,0,0,1,20,8a25.694,25.694,0,0,1-.375,4.33,3.9,3.9,0,0,1-3.319,3.18,42.9,42.9,0,0,1-5.681.484L4.509,19.608A1,1,0,0,1,3,18.748v-3.4A3.859,3.859,0,0,1,.375,12.33,25.7,25.7,0,0,1,0,8,25.7,25.7,0,0,1,.375,3.67Z"
                                            fill="#1e293b" fill-rule="evenodd" />
                                        <path id="Shape-2" data-name="Shape"
                                            d="M1,0A1,1,0,0,0,1,2H11a1,1,0,0,0,0-2ZM1,4A1,1,0,0,0,1,6H5A1,1,0,0,0,5,4Z"
                                            transform="translate(4 5)" fill="#1e293b" fill-rule="evenodd" />
                                    </svg>

                                    <span class="ms-2" style="color: #1E293B;">Reviews</span></button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="course-overview" role="tabpanel"
                            aria-labelledby="course-overview-tab">
                           <div class="course-description fs-6 m-4 ">
                               <h3 class="description-head fs-4 fw-medium mb-3 mt-10 text-dark">Course Description</h3>
                               <div class="text-secondary">
                                   {!! $course->outline !!} <!-- Display the outline content from TinyMCE -->
                               </div>
                           </div>
                       
                           <div class="course-description fs-6 m-4">
                            <h3 class="description-head fs-4 fw-medium mb-3 mt-10 text-dark">What Will I Learn?</h3>
                            <ul class="step-down">
                                @foreach(explode("\n", $course->what_will_i_learn) as $what_will_i_learn)
                                    <li class="ll text-secondary mx-1 my-3 position-relative list-unstyled">{{ trim($what_will_i_learn) }}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="course-description requirements fs-6 m-4">
                            <h3 class="description-head fs-4 fw-medium mb-3 mt-10 text-dark">Requirements</h3>
                            <ul>
                                @foreach(explode("\n", $course->requirements) as $requirement)
                                    <li class="text-secondary">{{ trim($requirement) }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                      <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                <div class="instructor  mt-5 mx-4">
                                    <div class="row g-3">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4">
                                            <div class="instructor-img">
                                                <img loading="lazy" src={{asset('assets/images/i1.jpg')}} class="rounded-3 w-100">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8">
                                            <div class="instructor-text">
                                                <h2 class="text-black ms-0 fw-600 fs-5">John Doe</h2>
                                                <p
                                                    class="ms-0 text-15px font-inter-light ellipsis-line-2 text-secondary">
                                                    Adobe
                                                    Certified Instructor &amp; Adobe Certified Expert</p>
                                                <div
                                                    class="font-inter-light text-secondary overflow-hidden">
                                                    Sharing is
                                                    who I am, and
                                                    teaching is where I am at my best, because I've been on both sides
                                                    of that equation, and getting to deliver useful training is my
                                                    meaningful way to be a part of the creative community.I've spent a
                                                    long time watching others learn, and teach, to refine how I work
                                                    with you to be efficient, useful and, most importantly, memorable. I
                                                    want you to carry what I've shown you into a bright future.I have a
                                                    wife (a lovely Irish girl) and kids. I have lived and worked in many
                                                    places (as Kiwis tend to do)</div>
                                            </div>
                                            <div class="instructor-icon mt-3  mb-5">
                                                <a class="bg-gradient border btn btn-primary btn-sm px-4 py-2" href="#"
                                                    target="_blank">View
                                                    profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="reviews ms-4">

                                    <div class="reviews-border border-bottom pb-4" id="userReview9">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-5 col-5 mt-5">
                                                <h3 class="text-center text-black fw-500 fs-5">Mathew Anderson</h3>
                                                <p class="text-center m-2">07-Jul-2019</p>
                                                <h1 class="mb-3 text-center">4</h1>
                                                <div class="icon text-center">
                                                    <i class="fa-solid fa-star text-warning"></i>
                                                    <i class="fa-solid fa-star text-warning"></i>
                                                    <i class="fa-solid fa-star text-warning"></i>
                                                    <i class="fa-solid fa-star text-warning"></i>
                                                    <i class="fa-solid fa-star text-muted"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-7 col-7 mt-5">
                                                <p class="text m-3">This course taught me a lot. Very effective!!</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="d-flex justify-content-end">


                                                    <a class="px-2 text-danger" onclick="" href="#"
                                                        data-bs-toggle="tooltip" title="Remove"><i
                                                            class="fas fa-trash"></i></a>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <script type="text/javascript">
                                        $(function () {

                                            if ($('[data-bs-toggle="tooltip"]').length > 0) {
                                                $('[data-bs-toggle="tooltip"]').tooltip();
                                            }

                                            if ($('.tagify').length > 0) {
                                                $('.tagify:not(.initialized)').tagify();
                                                $('.tagify:not(.initialized)').addClass('initialized');
                                            }

                                            $('a[href="#"]').on('click', function (event) {
                                                event.preventDefault();
                                            });

                                            if ($('.text_editor:not(.initialized)').length) {
                                                $('.text_editor:not(.initialized)').summernote({
                                                    height: 180,                 // set editor height
                                                    minHeight: null,             // set minimum height of editor
                                                    maxHeight: null,             // set maximum height of editor
                                                    focus: true                  // set focus to editable area after initializing summernote
                                                });
                                                $('.text_editor:not(.initialized)').addClass('initialized');
                                            }


                                            //When need to add a wishlist button inside a anchor tag
                                            $('.checkPropagation').on('click', function (event) {
                                                var action = $(this).attr('action');
                                                var onclickFunction = $(this).attr('onclick');
                                                var onChange = $(this).attr('onchange');
                                                var tag = $(this).prop("tagName").toLowerCase();
                                                console.log(tag);
                                                if (tag != 'a' && action) {
                                                    $(location).attr('href', $(this).attr('action'));
                                                    return false;
                                                } else if (onclickFunction) {
                                                    if (onclickFunction) {
                                                        onclickFunction;
                                                    }
                                                    return false;
                                                } else if (tag == 'a') {
                                                    return true;
                                                }
                                            });
                                            var formElement;
                                            if ($('.ajaxForm:not(.initialized)').length > 0) {
                                                $('.ajaxForm:not(.initialized)').ajaxForm({
                                                    beforeSend: function (data, form) {
                                                        var formElement = $(form);
                                                    },
                                                    uploadProgress: function (event, position, total, percentComplete) {
                                                    },
                                                    complete: function (xhr) {

                                                        setTimeout(function () {
                                                            distributeServerResponse(xhr.responseText);
                                                        }, 400);

                                                        if ($('.ajaxForm.resetable').length > 0) {
                                                            $('.ajaxForm.resetable')[0].reset();
                                                        }
                                                    },
                                                    error: function (e) {
                                                        console.log(e);
                                                    }
                                                });
                                                $('.ajaxForm:not(.initialized)').addClass('initialized');
                                            }
                                        });

                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 order-1 order-lg-2">
                    <div class="course-right-section position-sticky">
                        <div class=" bg-white course-card rounded-2 shadow" style=" margin-top: -150px;">
                            <div class="card-img position-relative ">
                                <div class="courses-card-image overflow-hidden">
                                    <div class=" bg-secondary card-video-icon cursor-pointer d-inline-block position-absolute rounded-5"
                                        style="top: 39%;left: 41%;" onclick="">
                                        <i class="fa-solid fa-play text-white" style=" padding: 16px 20px;"></i>
                                    </div>
                                    <img loading="lazy" class="w-100 p-2 rounded-4" 
                                    src="{{ asset('storage/' . $course->image) }}" 
                                    style="padding: 8px;">

                                    <div class="courses-icon " id="coursesWishlistIcon12">
                                        <i class=" cursor-pointer fa-heart fa-solid me-2 p-2 position-absolute rounded-4 text-body-tertiary bg-white"
                                            style="top: 14px;right: 7px;"
                                            ></i>
                                    </div>
                                </div>
                            </div>
                            <div class=" ammount d-flex justify-content-between px-4 py-2">

                                <a href="#" title="Compare this course" data-bs-toggle="tooltip" class="ms-auto py-2">
                                    <img loading="lazy" width="18px" src={{asset('assets/images/compare.png')}}
                                        style="filter: invert(1);">
                                </a>
                            </div>
                            <div class="border-bottom d-flex enrol justify-content-between mx-4 py-3">
                                <div class="icon d-flex">
                                    <img loading="lazy" src="{{ asset('assets/images/c-enrold-1.png') }}" class="me-3" style="height: 20px; width: 20px;">
                                    <h4 class="fw-600 text-dark fs-6">Lectures</h4>
                                </div>
                                <h5 class="fw-600 text-dark fs-6">{{ $course->lectures }}</h5> <!-- Dynamic Lectures -->
                            </div>

                            <div class="border-bottom d-flex enrol justify-content-between mx-4 py-3">
                                <div class="icon d-flex">
                                    <img loading="lazy" src="{{ asset('assets/images/c-enrold-4.png') }}" class="me-3" style="height: 20px; width: 20px;">
                                    <h4 class="fw-600 text-dark fs-6">Quizzes</h4>
                                </div>
                                <h5 class="fw-600 text-dark fs-6">{{ $course->quizzes }}</h5> <!-- Dynamic Quizzes -->
                            </div>

                            <div class="border-bottom d-flex enrol justify-content-between mx-4 py-3">
                                <div class="icon d-flex">
                                    <img loading="lazy" src="{{ asset('assets/images/c-enrold-2.png') }}" class="me-3" style="height: 20px; width: 20px;">
                                    <h4 class="fw-600 text-dark fs-6">Skill level</h4>
                                </div>
                                <h5 class="fw-600 text-dark fs-6">{{ $course->skill_level }}</h5> <!-- Dynamic Skill Level -->
                            </div>

                            <div class="border-bottom d-flex enrol justify-content-between mx-4 py-3">
                                <div class="icon d-flex">
                                    <img loading="lazy" src="{{ asset('assets/images/c-enrold-5.png') }}" class="me-3" style="height: 20px; width: 20px;">
                                    <h4 class="fw-600 text-dark fs-6">Expiry period</h4>
                                </div>
                                <h5 class="fw-600 text-dark fs-6">{{ $course->expiry_period }}</h5> <!-- Dynamic Expiry Period -->
                            </div>
                             

                            <div class="border-bottom d-flex enrol justify-content-between mx-4 py-3">
                                <div class="icon d-flex">
                                    <img loading="lazy" src="{{ asset('assets/images/certificate.png') }}" class="me-3" style="height: 20px; width: 20px;">
                                    <h4 class="fw-600 text-dark fs-6">Certificate</h4>
                                </div>
                                <h5 class="fw-600 text-dark fs-6">{{ $course->certificate ? 'Yes' : 'No' }}</h5> <!-- Dynamic Certificate -->
                            </div>
                           


                            <div class="w-100 px-4 pb-2 text-center">
                                <a href="" target="_blank" class="p-2 text-decoration-none" style="color: #316FF6;"
                                    data-bs-toggle="tooltip" title="Share on facebook" data-bs-placement="top">
                                    <i class="fab fa-facebook text-20px"></i>
                                </a>
                                <a href="" target="_blank" class="p-2 text-decoration-none" style="color: #1DA1F2;"
                                    data-bs-toggle="tooltip" title="Share on twitter" data-bs-placement="top">
                                    <i class="fab fa-twitter text-20px"></i>
                                </a>
                                <a href="" target="_blank" class="p-2 text-decoration-none" style="color: #128c7e;"
                                    data-bs-toggle="tooltip" title="Share on whatsapp" data-bs-placement="top">
                                    <i class="fab fa-whatsapp text-20px"></i>
                                </a>
                                <a href="" target="_blank" class="p-2 text-decoration-none" style="color: #0077b5;"
                                    data-bs-toggle="tooltip" title="Share on linkedin" data-bs-placement="top">
                                    <i class="fab fa-linkedin text-20px"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- course Decription Page end ------>



    <!-- Footer Section Started -->

    <section class="footer wow position-relative pt-5 " style="background-color: #1f1c35;">
        <div class="container">
            <div class="row justify-content-between" style="    padding: 40px 0px 90px;  padding-bottom: 20px;">
                <div
                    class="col-lg-3 col-md-6 col-sm-12 col-12 d-flex justify-content-lg-center justify-content-md-center justify-content-sm-start mb-3">
                    <div>
                        <img loading="lazy" src={{asset('assets/images/footlogo.png')}} style="height: 40px;">

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
                                <span class="ms-4 ps-1" style="font-size: 17px; color: #fff;">
                                    Wireless Pull RYK
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
                                style="border-right: none; border-left: none; border-top: none; color: #fff; details: none;"
                                class="bg-transparent border-light pb-2" placeholder="Enter your e-mail">
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
                <div class="col-6 col-md-12 col-sm-12 col-12 text-lg-center text-md-center text-sm-center">
                    <p class="pt-4 mb-0" style="color: #fff;">© IT Work Center 2024 | All Rights Reserved</p>
                </div>

                <div class="col-6 col-md-12 col-sm-12 col-12">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</body>

</html>