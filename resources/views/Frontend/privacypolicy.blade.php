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
    <link rel="shortcut icon" href="{{ asset('assets/images/itcfavicon.png') }}" type="image/x-icon" style="width: 15px;">
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
                            <a class="nav-link ps-3 text-black fw-bold" style="font-size: 16px;" href="index.html">Home</a>
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
                    </ul>
                    <div>
                        <button class="pt-2 pb-2 ps-3 pe-3 ms-auto border-0 text-light rounded"
                            style="background-color: #EF7A15;">Get Started</button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar Ended -->

    <div class="container-fluid d-flex"
        style="background-image: url('{{ asset('assets/images/termbanner.jpg') }}'); height: 300px; width: 100%; background-position: center; align-items: center;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-black text-center">Privacy Policy</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="text-light text-center" style="font-size: 16px; color: gray;">Your Privacy is Our Priority: IT
                        Center's Commitment to
                        Safeguarding Your Personal Information
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col-12">
                <div>
                    <h3>
                        Privacy Policy for ITWork Center
                    </h3>
                    <p style="line-height: 1.8; color: gray;">At ITWork Center, we value your privacy and are committed to protecting your personal
                        information.
                        This privacy policy outlines how we collect, use, and safeguard your data when you visit our
                        website
                        or use our services. By accessing our site or enrolling in our training programs, you agree to
                        the
                        terms of this policy.
                    </p>
                </div>
                <div>
                    <h3>
                        Information We Collect
                    </h3>
                    <ul class="ms-0">
                        <li class="mb-3" style="list-style: none;">
                            <span style="color: #2b2c2f; font-size: 19px;"><b>Customized Learning : </b></span><span style="color: gray;">The information you provide helps us tailor our courses to suit your individual preferences and needs.
                            </span>
                        </li>
                        <li class="mb-3" style="list-style: none;">
                            <span style="color: #2b2c2f; font-size: 19px;"><b>Communication : </b></span><span style="color: gray;">We use your contact details to send you course updates, important notices, and other relevant information. You can opt out of these communications at any time.
                            </span>
                        </li>
                        <li class="mb-3" style="list-style: none;">
                            <span style="color: #2b2c2f; font-size: 19px;"><b>User Experience Improvement : </b></span><span style="color: gray;">Analyzing how you interact with our website allows us to make it more user-friendly and efficient.
                            </span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3>
                        Image Uploads
                    </h3>
                    <p style="line-height: 1.8; color: gray;">If you upload images to the site, avoid including location data (EXIF GPS). Visitors to the site can download and extract any embedded location data from your uploaded images.
                    </p>
                </div>
                <div>
                    <h3>
                        Sharing Your Information
                    </h3>
                    <ul class="ms-0">
                        <li class="mb-3" style="list-style: none;">
                            <span style="color: #2b2c2f; font-size: 19px;"><b>Third-Party Services : </b></span><span style="color: gray;">We may share your information with trusted third-party service providers, such as those handling payment processing or analytics. These partners follow strict privacy rules and only use your data to support our services.
                            </span>
                        </li>
                        <li class="mb-3" style="list-style: none;">
                            <span style="color: #2b2c2f; font-size: 19px;"><b>Legal Requirements : </b></span><span style="color: gray;">We may disclose your information if required by law or necessary to protect our rights or the safety of our users.
                            </span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3>
                        Data Security
                    </h3>
                    <p style="line-height: 1.8; color: gray;">
                        Your personal information is protected using industry-standard security measures, including encryption and secure servers. We regularly review and update our security protocols to prevent unauthorized access.
                    </p>
                </div>
                <div>
                    <h3>
                        Your Rights and Choices
                    </h3>
                    <ul class="ms-0">
                        <li class="mb-3" style="list-style: none;">
                            <span style="color: #2b2c2f; font-size: 19px;"><b>Updating Your Information : </b></span><span style="color: gray;">You can view and update your personal details anytime by logging into your account.
                            </span>
                        </li>
                        <li class="mb-3" style="list-style: none;">
                            <span style="color: #2b2c2f; font-size: 19px;"><b> Opt-Out : </b></span><span style="color: gray;">If you no longer wish to receive non-essential communications, you can adjust your preferences in your account settings or contact our support team.
                            </span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2>
                        Changes to This Privacy Policy
                    </h2>
                    <p style="line-height: 1.8; color: gray;">
                        We may occasionally update this privacy policy. Please revisit this page periodically to stay informed about any changes. Your continued use of our website after updates means you accept the revised terms.
                    </p>
                </div>
                <div>
                    <h3>
                        Contact Us
                    </h3>
                    <p style="line-height: 1.8; color: gray;">
                        If you have any questions about this privacy policy or how we handle your data, please contact us.
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
