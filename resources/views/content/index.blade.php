@extends('layouts.master')
@section('body')
    <div class="wrapper">


        <div>
            <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-activity-offcanvas"
                style="max-width: 450px; width: 100%;">
                <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                    <h5 class="text-white m-0 fw-semibold">Activity Stream</h5>
                    <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <div class="offcanvas-body p-0">
                    <div data-simplebar class="h-100 p-4">
                        <div class="position-relative ms-2">
                            <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                            <div class="position-relative ps-4">
                                <div class="mb-4">
                                    <span
                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-danger d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon
                                            icon="iconamoon:folder-check-duotone"></iconify-icon></span>
                                    <div class="ms-2">
                                        <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Report-Fix / Update </h5>
                                        <p class="d-flex align-items-center">Add 3 files to <span
                                                class=" d-flex align-items-center text-primary ms-1"><iconify-icon
                                                    icon="iconamoon:file-light"></iconify-icon> Tasks</span></p>
                                        <div class="bg-light bg-opacity-50 rounded-2 p-2">
                                            <div class="row">
                                                <div class="col-lg-6 border-end border-light">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <i class="bx bxl-figma fs-20 text-red"></i>
                                                        <a href="#!" class="text-dark fw-medium">Concept.fig</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <i class="bx bxl-file-doc fs-20 text-success"></i>
                                                        <a href="#!" class="text-dark fw-medium">larkon.docs</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mt-2 text-muted">Monday , 4:24 PM</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative ps-4">
                                <div class="mb-4">
                                    <span
                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-success d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon
                                            icon="iconamoon:check-circle-1-duotone"></iconify-icon></span>
                                    <div class="ms-2">
                                        <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Project Status
                                        </h5>
                                        <p class="d-flex align-items-center mb-0">Marked<span
                                                class=" d-flex align-items-center text-primary mx-1"><iconify-icon
                                                    icon="iconamoon:file-light"></iconify-icon> Design </span> as <span
                                                class="badge bg-success-subtle text-success px-2 py-1 ms-1">
                                                Completed</span></p>
                                        <div
                                            class="d-flex align-items-center gap-3 mt-1 bg-light bg-opacity-50 p-2 rounded-2">
                                            <a href="#!" class="fw-medium text-dark">UI/UX Figma Design</a>
                                            <div class="ms-auto">
                                                <a href="#!" class="fw-medium text-primary fs-18"
                                                    data-bs-toggle="tooltip" data-bs-title="Download"
                                                    data-bs-placement="bottom"><iconify-icon
                                                        icon="iconamoon:cloud-download-duotone"></iconify-icon></a>
                                            </div>
                                        </div>
                                        <h6 class="mt-3 text-muted">Monday , 3:00 PM</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative ps-4">
                                <div class="mb-4">
                                    <span
                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-primary d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-16">UI</span>
                                    <div class="ms-2">
                                        <h5 class="mb-1 text-dark fw-semibold fs-15">Larkon Application UI v2.0.0 <span
                                                class="badge bg-primary-subtle text-primary px-2 py-1 ms-1"> Latest</span>
                                        </h5>
                                        <p>Get access to over 20+ pages including a dashboard layout, charts, kanban board,
                                            calendar, and pre-order E-commerce & Marketing pages.</p>
                                        <div class="mt-2">
                                            <a href="#!" class="btn btn-light btn-sm">Download Zip</a>
                                        </div>
                                        <h6 class="mt-3 text-muted">Monday , 2:10 PM</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative ps-4">
                                <div class="mb-4">
                                    <span
                                        class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img
                                            src="assets/images/users/avatar-7.jpg" alt="avatar-5"
                                            class="avatar-sm rounded-circle"></span>
                                    <div class="ms-2">
                                        <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Alex Smith Attached Photos
                                        </h5>
                                        <div class="row g-2 mt-2">
                                            <div class="col-lg-4">
                                                <a href="#!">
                                                    <img src="assets/images/small/img-6.jpg" alt=""
                                                        class="img-fluid rounded">
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#!">
                                                    <img src="assets/images/small/img-3.jpg" alt=""
                                                        class="img-fluid rounded">
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#!">
                                                    <img src="assets/images/small/img-4.jpg" alt=""
                                                        class="img-fluid rounded">
                                                </a>
                                            </div>
                                        </div>
                                        <h6 class="mt-3 text-muted">Monday 1:00 PM</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative ps-4">
                                <div class="mb-4">
                                    <span
                                        class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img
                                            src="assets/images/users/avatar-6.jpg" alt="avatar-5"
                                            class="avatar-sm rounded-circle"></span>
                                    <div class="ms-2">
                                        <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Rebecca J. added a new team
                                            member
                                        </h5>
                                        <p class="d-flex align-items-center gap-1"><iconify-icon
                                                icon="iconamoon:check-circle-1-duotone"
                                                class="text-success"></iconify-icon> Added a new member to Front Dashboard
                                        </p>
                                        <h6 class="mt-3 text-muted">Monday 10:00 AM</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative ps-4">
                                <div class="mb-4">
                                    <span
                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-warning d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon
                                            icon="iconamoon:certificate-badge-duotone"></iconify-icon></span>
                                    <div class="ms-2">
                                        <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Achievements
                                        </h5>
                                        <p class="d-flex align-items-center gap-1 mt-1">Earned a <iconify-icon
                                                icon="iconamoon:certificate-badge-duotone"
                                                class="text-danger fs-20"></iconify-icon>" Best Product Award"</p>
                                        <h6 class="mt-3 text-muted">Monday 9:30 AM</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#!" class="btn btn-outline-dark w-100">View All</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container-fluid">

                <!-- Start here.... -->
                <div class="row">
                    <div class="col-xxl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-primary text-truncate mb-3" role="alert">
                                    We regret to inform you that our server is currently experiencing technical
                                    difficulties.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-soft-primary rounded">
                                                    <iconify-icon icon="solar:cart-5-bold-duotone"
                                                        class="avatar-title fs-32 text-primary"></iconify-icon>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-6 text-end">
                                                <p class="text-muted mb-0 text-truncate">Total Orders</p>
                                                <h3 class="text-dark mt-1 mb-0">13, 647</h3>
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->
                                    </div> <!-- end card body -->
                                    <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i>
                                                    2.3%</span>
                                                <span class="text-muted ms-1 fs-12">Last Week</span>
                                            </div>
                                            <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                    </div> <!-- end card body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                            <div class="col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-soft-primary rounded">
                                                    <i class="bx bx-award avatar-title fs-24 text-primary"></i>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-6 text-end">
                                                <p class="text-muted mb-0 text-truncate">New Leads</p>
                                                <h3 class="text-dark mt-1 mb-0">9, 526</h3>
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->
                                    </div> <!-- end card body -->
                                    <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i>
                                                    8.1%</span>
                                                <span class="text-muted ms-1 fs-12">Last Month</span>
                                            </div>
                                            <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                    </div> <!-- end card body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                            <div class="col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-soft-primary rounded">
                                                    <i class="bx bxs-backpack avatar-title fs-24 text-primary"></i>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-6 text-end">
                                                <p class="text-muted mb-0 text-truncate">Deals</p>
                                                <h3 class="text-dark mt-1 mb-0">976</h3>
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->
                                    </div> <!-- end card body -->
                                    <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i>
                                                    0.3%</span>
                                                <span class="text-muted ms-1 fs-12">Last Month</span>
                                            </div>
                                            <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                    </div> <!-- end card body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                            <div class="col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-soft-primary rounded">
                                                    <i class="bx bx-dollar-circle avatar-title text-primary fs-24"></i>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-6 text-end">
                                                <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                                                <h3 class="text-dark mt-1 mb-0">$123.6k</h3>
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->
                                    </div> <!-- end card body -->
                                    <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i>
                                                    10.6%</span>
                                                <span class="text-muted ms-1 fs-12">Last Month</span>
                                            </div>
                                            <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                    </div> <!-- end card body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- end col -->

                    <div class="col-xxl-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Performance</h4>
                                    <div>
                                        <button type="button" class="btn btn-sm btn-outline-light">ALL</button>
                                        <button type="button" class="btn btn-sm btn-outline-light">1M</button>
                                        <button type="button" class="btn btn-sm btn-outline-light">6M</button>
                                        <button type="button" class="btn btn-sm btn-outline-light active">1Y</button>
                                    </div>
                                </div> <!-- end card-title-->

                                <div dir="ltr">
                                    <div id="dash-performance-chart" class="apex-charts"></div>
                                </div>
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Conversions</h5>
                                <div id="conversions" class="apex-charts mb-2 mt-n2"></div>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <p class="text-muted mb-2">This Week</p>
                                        <h3 class="text-dark mb-3">23.5k</h3>
                                    </div> <!-- end col -->
                                    <div class="col-6">
                                        <p class="text-muted mb-2">Last Week</p>
                                        <h3 class="text-dark mb-3">41.05k</h3>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                                <div class="text-center">
                                    <button type="button" class="btn btn-light shadow-none w-100">View Details</button>
                                </div> <!-- end row -->
                            </div>
                        </div>
                    </div> <!-- end left chart card -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sessions by Country</h5>
                                <div id="world-map-markers" style="height: 316px">
                                </div>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <p class="text-muted mb-2">This Week</p>
                                        <h3 class="text-dark mb-3">23.5k</h3>
                                    </div> <!-- end col -->
                                    <div class="col-6">
                                        <p class="text-muted mb-2">Last Week</p>
                                        <h3 class="text-dark mb-3">41.05k</h3>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card card-height-100">
                            <div class="card-header d-flex align-items-center justify-content-between gap-2">
                                <h4 class="card-title flex-grow-1">Top Pages</h4>

                                <a href="#" class="btn btn-sm btn-soft-primary">View All</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-nowrap table-centered m-0">
                                    <thead class="bg-light bg-opacity-50">
                                        <tr>
                                            <th class="text-muted ps-3">Page Path</th>
                                            <th class="text-muted">Page Views</th>
                                            <th class="text-muted">Exit Rate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-3"><a href="#"
                                                    class="text-muted">larkon/ecommerce.html</a></td>
                                            <td>465 </td>
                                            <td><span class="badge badge-soft-success">4.4%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><a href="#"
                                                    class="text-muted">larkon/dashboard.html</a></td>
                                            <td> 426</td>
                                            <td><span class="badge badge-soft-danger">20.4%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><a href="#" class="text-muted">larkon/chat.html</a>
                                            </td>
                                            <td>254 </td>
                                            <td><span class="badge badge-soft-warning">12.25%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><a href="#"
                                                    class="text-muted">larkon/auth-login.html</a></td>
                                            <td> 3369</td>
                                            <td><span class="badge badge-soft-success">5.2%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><a href="#" class="text-muted">larkon/email.html</a>
                                            </td>
                                            <td>985 </td>
                                            <td><span class="badge badge-soft-danger">64.2%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><a href="#"
                                                    class="text-muted">larkon/social.html</a></td>
                                            <td>653 </td>
                                            <td><span class="badge badge-soft-success">2.4%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3"><a href="#" class="text-muted">larkon/blog.html</a>
                                            </td>
                                            <td>478 </td>
                                            <td><span class="badge badge-soft-danger">1.4%</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-4 d-none">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Recent Transactions</h4>
                                <div>
                                    <a href="#!" class="btn btn-sm btn-primary">
                                        <i class="bx bx-plus me-1"></i>Add
                                    </a>
                                </div>
                            </div> <!-- end card-header-->
                            <div class="card-body p-0">
                                <div class="px-3" data-simplebar style="max-height: 398px;">
                                    <table class="table table-hover mb-0 table-centered">
                                        <tbody>
                                            <tr>
                                                <td>24 April, 2024</td>
                                                <td>$120.55</td>
                                                <td><span class="badge bg-success">Cr</span></td>
                                                <td>Commisions </td>
                                            </tr>
                                            <tr>
                                                <td>24 April, 2024</td>
                                                <td>$9.68</td>
                                                <td><span class="badge bg-success">Cr</span></td>
                                                <td>Affiliates </td>
                                            </tr>
                                            <tr>
                                                <td>20 April, 2024</td>
                                                <td>$105.22</td>
                                                <td><span class="badge bg-danger">Dr</span></td>
                                                <td>Grocery </td>
                                            </tr>
                                            <tr>
                                                <td>18 April, 2024</td>
                                                <td>$80.59</td>
                                                <td><span class="badge bg-success">Cr</span></td>
                                                <td>Refunds </td>
                                            </tr>
                                            <tr>
                                                <td>18 April, 2024</td>
                                                <td>$750.95</td>
                                                <td><span class="badge bg-danger">Dr</span></td>
                                                <td>Bill Payments </td>
                                            </tr>
                                            <tr>
                                                <td>17 April, 2024</td>
                                                <td>$455.62</td>
                                                <td><span class="badge bg-danger">Dr</span></td>
                                                <td>Electricity </td>
                                            </tr>
                                            <tr>
                                                <td>17 April, 2024</td>
                                                <td>$102.77</td>
                                                <td><span class="badge bg-success">Cr</span></td>
                                                <td>Interest </td>
                                            </tr>
                                            <tr>
                                                <td>16 April, 2024</td>
                                                <td>$79.49</td>
                                                <td><span class="badge bg-success">Cr</span></td>
                                                <td>Refunds </td>
                                            </tr>
                                            <tr>
                                                <td>05 April, 2024</td>
                                                <td>$980.00</td>
                                                <td><span class="badge bg-danger">Dr</span></td>
                                                <td>Shopping</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4 class="card-title">
                                        Recent Orders
                                    </h4>

                                    <a href="#!" class="btn btn-sm btn-soft-primary">
                                        <i class="bx bx-plus me-1"></i>Create Order
                                    </a>
                                </div>
                            </div>
                            <!-- end card body -->
                            <div class="table-responsive table-centered">
                                <table class="table mb-0">
                                    <thead class="bg-light bg-opacity-50">
                                        <tr>
                                            <th class="ps-3">
                                                Order ID.
                                            </th>
                                            <th>
                                                Date
                                            </th>
                                            <th>
                                                Product
                                            </th>
                                            <th>
                                                Customer Name
                                            </th>
                                            <th>
                                                Email ID
                                            </th>
                                            <th>
                                                Phone No.
                                            </th>
                                            <th>
                                                Address
                                            </th>
                                            <th>
                                                Payment Type
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- end thead-->
                                    <tbody>
                                        <tr>
                                            <td class="ps-3">
                                                <a href="order-detail.html">#RB5625</a>
                                            </td>
                                            <td>29 April 2024</td>
                                            <td>
                                                <img src="assets/images/products/product-1(1).png" alt="product-1(1)"
                                                    class="img-fluid avatar-sm">
                                            </td>
                                            <td>
                                                <a href="#!">Anna M. Hines</a>
                                            </td>
                                            <td>anna.hines@mail.com</td>
                                            <td>(+1)-555-1564-261</td>
                                            <td>Burr Ridge/Illinois</td>
                                            <td>Credit Card</td>
                                            <td>
                                                <i class="bx bxs-circle text-success me-1"></i>Completed
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <a href="order-detail.html">#RB9652</a>
                                            </td>
                                            <td>25 April 2024</td>
                                            <td>
                                                <img src="assets/images/products/product-4.png" alt="product-4"
                                                    class="img-fluid avatar-sm">
                                            </td>
                                            <td>
                                                <a href="#!">Judith H. Fritsche</a>
                                            </td>
                                            <td>judith.fritsche.com</td>
                                            <td>(+57)-305-5579-759</td>
                                            <td>SULLIVAN/Kentucky</td>
                                            <td>Credit Card</td>
                                            <td>
                                                <i class="bx bxs-circle text-success me-1"></i>Completed
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <a href="order-detail.html">#RB5984</a>
                                            </td>
                                            <td>25 April 2024</td>
                                            <td>
                                                <img src="assets/images/products/product-5.png" alt="product-5"
                                                    class="img-fluid avatar-sm">
                                            </td>
                                            <td>
                                                <a href="#!">Peter T. Smith</a>
                                            </td>
                                            <td>peter.smith@mail.com</td>
                                            <td>(+33)-655-5187-93</td>
                                            <td>Yreka/California</td>
                                            <td>Pay Pal</td>
                                            <td>
                                                <i class="bx bxs-circle text-success me-1"></i>Completed
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <a href="order-detail.html">#RB3625</a>
                                            </td>
                                            <td>21 April 2024</td>
                                            <td>
                                                <img src="assets/images/products/product-6.png" alt="product-6"
                                                    class="img-fluid avatar-sm">
                                            </td>
                                            <td>
                                                <a href="#!">Emmanuel J. Delcid</a>
                                            </td>
                                            <td>
                                                emmanuel.delicid@mail.com
                                            </td>
                                            <td>(+30)-693-5553-637</td>
                                            <td>Atlanta/Georgia</td>
                                            <td>Pay Pal</td>
                                            <td>
                                                <i class="bx bxs-circle text-primary me-1"></i>Processing
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <a href="order-detail.html">#RB8652</a>
                                            </td>
                                            <td>18 April 2024</td>
                                            <td>
                                                <img src="assets/images/products/product-1(2).png" alt="product-1(2)"
                                                    class="img-fluid avatar-sm">
                                            </td>
                                            <td>
                                                <a href="#!">William J. Cook</a>
                                            </td>
                                            <td>william.cook@mail.com</td>
                                            <td>(+91)-855-5446-150</td>
                                            <td>Rosenberg/Texas</td>
                                            <td>Credit Card</td>
                                            <td>
                                                <i class="bx bxs-circle text-primary me-1"></i>Processing
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!-- end tbody -->
                                </table>
                                <!-- end table -->
                            </div>
                            <!-- table responsive -->

                            <div class="card-footer border-top">
                                <div class="row g-3">
                                    <div class="col-sm">
                                        <div class="text-muted">
                                            Showing
                                            <span class="fw-semibold">5</span>
                                            of
                                            <span class="fw-semibold">90,521</span>
                                            orders
                                        </div>
                                    </div>

                                    <div class="col-sm-auto">
                                        <ul class="pagination m-0">
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i
                                                        class="bx bx-left-arrow-alt"></i></a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i
                                                        class="bx bx-right-arrow-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div> <!-- end row -->

            </div>

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->

    </div>
    <!-- END Wrapper -->
@endsection
