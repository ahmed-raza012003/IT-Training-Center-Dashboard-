@extends('layouts.master')

@section('body')
    

     <!-- START Wrapper -->
     <div class="wrapper">

          

        <!-- Activity Timeline -->
        <div>
             <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-activity-offcanvas" style="max-width: 450px; width: 100%;">
                  <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                       <h5 class="text-white m-0 fw-semibold">Activity Stream</h5>
                       <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>

                  <div class="offcanvas-body p-0">
                       <div data-simplebar class="h-100 p-4">
                            <div class="position-relative ms-2">
                                 <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                                 <div class="position-relative ps-4">
                                      <div class="mb-4">
                                           <span class="position-absolute start-0 avatar-sm translate-middle-x bg-danger d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:folder-check-duotone"></iconify-icon></span>
                                           <div class="ms-2">
                                                <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Report-Fix / Update </h5>
                                                <p class="d-flex align-items-center">Add 3 files to <span class=" d-flex align-items-center text-primary ms-1"><iconify-icon icon="iconamoon:file-light"></iconify-icon> Tasks</span></p>
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
                                           <span class="position-absolute start-0 avatar-sm translate-middle-x bg-success d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:check-circle-1-duotone"></iconify-icon></span>
                                           <div class="ms-2">
                                                <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Project Status
                                                </h5>
                                                <p class="d-flex align-items-center mb-0">Marked<span class=" d-flex align-items-center text-primary mx-1"><iconify-icon icon="iconamoon:file-light"></iconify-icon> Design </span> as <span class="badge bg-success-subtle text-success px-2 py-1 ms-1"> Completed</span></p>
                                                <div class="d-flex align-items-center gap-3 mt-1 bg-light bg-opacity-50 p-2 rounded-2">
                                                     <a href="#!" class="fw-medium text-dark">UI/UX Figma Design</a>
                                                     <div class="ms-auto">
                                                          <a href="#!" class="fw-medium text-primary fs-18" data-bs-toggle="tooltip" data-bs-title="Download" data-bs-placement="bottom"><iconify-icon icon="iconamoon:cloud-download-duotone"></iconify-icon></a>
                                                     </div>
                                                </div>
                                                <h6 class="mt-3 text-muted">Monday , 3:00 PM</h6>
                                           </div>
                                      </div>
                                 </div>
                                 <div class="position-relative ps-4">
                                      <div class="mb-4">
                                           <span class="position-absolute start-0 avatar-sm translate-middle-x bg-primary d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-16">UI</span>
                                           <div class="ms-2">
                                                <h5 class="mb-1 text-dark fw-semibold fs-15">Larkon Application UI v2.0.0 <span class="badge bg-primary-subtle text-primary px-2 py-1 ms-1"> Latest</span>
                                                </h5>
                                                <p>Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                                                <div class="mt-2">
                                                     <a href="#!" class="btn btn-light btn-sm">Download Zip</a>
                                                </div>
                                                <h6 class="mt-3 text-muted">Monday , 2:10 PM</h6>
                                           </div>
                                      </div>
                                 </div>
                                 <div class="position-relative ps-4">
                                      <div class="mb-4">
                                           <span class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img src="assets/images/users/avatar-7.jpg" alt="avatar-5" class="avatar-sm rounded-circle"></span>
                                           <div class="ms-2">
                                                <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Alex Smith Attached Photos
                                                </h5>
                                                <div class="row g-2 mt-2">
                                                     <div class="col-lg-4">
                                                          <a href="#!">
                                                               <img src="assets/images/small/img-6.jpg" alt="" class="img-fluid rounded">
                                                          </a>
                                                     </div>
                                                     <div class="col-lg-4">
                                                          <a href="#!">
                                                               <img src="assets/images/small/img-3.jpg" alt="" class="img-fluid rounded">
                                                          </a>
                                                     </div>
                                                     <div class="col-lg-4">
                                                          <a href="#!">
                                                               <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid rounded">
                                                          </a>
                                                     </div>
                                                </div>
                                                <h6 class="mt-3 text-muted">Monday 1:00 PM</h6>
                                           </div>
                                      </div>
                                 </div>
                                 <div class="position-relative ps-4">
                                      <div class="mb-4">
                                           <span class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img src="assets/images/users/avatar-6.jpg" alt="avatar-5" class="avatar-sm rounded-circle"></span>
                                           <div class="ms-2">
                                                <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Rebecca J. added a new team member
                                                </h5>
                                                <p class="d-flex align-items-center gap-1"><iconify-icon icon="iconamoon:check-circle-1-duotone" class="text-success"></iconify-icon> Added a new member to Front Dashboard</p>
                                                <h6 class="mt-3 text-muted">Monday 10:00 AM</h6>
                                           </div>
                                      </div>
                                 </div>
                                 <div class="position-relative ps-4">
                                      <div class="mb-4">
                                           <span class="position-absolute start-0 avatar-sm translate-middle-x bg-warning d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:certificate-badge-duotone"></iconify-icon></span>
                                           <div class="ms-2">
                                                <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Achievements
                                                </h5>
                                                <p class="d-flex align-items-center gap-1 mt-1">Earned a <iconify-icon icon="iconamoon:certificate-badge-duotone" class="text-danger fs-20"></iconify-icon>" Best Product Award"</p>
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

        <!-- Right Sidebar (Theme Settings) -->
        <div>
             <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
                  <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                       <h5 class="text-white m-0">Theme Settings</h5>
                       <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>

                  <div class="offcanvas-body p-0">
                       <div data-simplebar class="h-100">
                            <div class="p-3 settings-bar">

                                 <div>
                                      <h5 class="mb-3 font-16 fw-semibold">Color Scheme</h5>

                                      <div class="form-check mb-2">
                                           <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light" value="light">
                                           <label class="form-check-label" for="layout-color-light">Light</label>
                                      </div>

                                      <div class="form-check mb-2">
                                           <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark">
                                           <label class="form-check-label" for="layout-color-dark">Dark</label>
                                      </div>
                                 </div>

                                 <div>
                                      <h5 class="my-3 font-16 fw-semibold">Topbar Color</h5>

                                      <div class="form-check mb-2">
                                           <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                                           <label class="form-check-label" for="topbar-color-light">Light</label>
                                      </div>
                                      <div class="form-check mb-2">
                                           <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                           <label class="form-check-label" for="topbar-color-dark">Dark</label>
                                      </div>
                                 </div>


                                 <div>
                                      <h5 class="my-3 font-16 fw-semibold">Menu Color</h5>

                                      <div class="form-check mb-2">
                                           <input class="form-check-input" type="radio" name="data-menu-color" id="leftbar-color-light" value="light">
                                           <label class="form-check-label" for="leftbar-color-light">
                                                Light
                                           </label>
                                      </div>

                                      <div class="form-check mb-2">
                                           <input class="form-check-input" type="radio" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                           <label class="form-check-label" for="leftbar-color-dark">
                                                Dark
                                           </label>
                                      </div>
                                 </div>

                                 <div>
                                      <h5 class="my-3 font-16 fw-semibold">Sidebar Size</h5>

                                      <div class="form-check mb-2">
                                           <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-default" value="default">
                                           <label class="form-check-label" for="leftbar-size-default">
                                                Default
                                           </label>
                                      </div>

                                      <div class="form-check mb-2">
                                           <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small" value="condensed">
                                           <label class="form-check-label" for="leftbar-size-small">
                                                Condensed
                                           </label>
                                      </div>

                                      <div class="form-check mb-2">
                                           <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-hidden" value="hidden">
                                           <label class="form-check-label" for="leftbar-hidden">
                                                Hidden
                                           </label>
                                      </div>

                                      <div class="form-check mb-2">
                                           <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small-hover-active" value="sm-hover-active">
                                           <label class="form-check-label" for="leftbar-size-small-hover-active">
                                                Small Hover Active
                                           </label>
                                      </div>

                                      <div class="form-check mb-2">
                                           <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small-hover" value="sm-hover">
                                           <label class="form-check-label" for="leftbar-size-small-hover">
                                                Small Hover
                                           </label>
                                      </div>
                                 </div>

                            </div>
                       </div>
                  </div>
                  <div class="offcanvas-footer border-top p-3 text-center">
                       <div class="row">
                            <div class="col">
                                 <button type="button" class="btn btn-danger w-100" id="reset-layout">Reset</button>
                            </div>
                       </div>
                  </div>
             </div>
        </div>
        <!-- ========== Topbar End ========== -->

       

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div>

             <div class="page-content">

                  <!-- Start Container Fluid -->
                  <div class="container-xxl">

                       <div class="row">
                            <div class="col-md-6 col-xl-3">
                                 <div class="card">
                                      <div class="card-body">
                                           <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                     <h4 class="card-title mb-2">Payment Refund</h4>
                                                     <p class="text-muted fw-medium fs-22 mb-0">490</p>
                                                </div>
                                                <div>
                                                     <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                          <iconify-icon icon="solar:chat-round-money-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                     </div>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                 <div class="card">
                                      <div class="card-body">
                                           <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                     <h4 class="card-title mb-2">Order Cancel</h4>
                                                     <p class="text-muted fw-medium fs-22 mb-0">241</p>
                                                </div>
                                                <div>
                                                     <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                          <iconify-icon icon="solar:cart-cross-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                     </div>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                 <div class="card">
                                      <div class="card-body">
                                           <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                     <h4 class="card-title mb-2">Order Shipped</h4>
                                                     <p class="text-muted fw-medium fs-22 mb-0">630</p>
                                                </div>
                                                <div>
                                                     <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                          <iconify-icon icon="solar:box-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                     </div>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                 <div class="card">
                                      <div class="card-body">
                                           <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                     <h4 class="card-title mb-2">Order Delivering</h4>
                                                     <p class="text-muted fw-medium fs-22 mb-0">170</p>
                                                </div>
                                                <div>
                                                     <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                          <iconify-icon icon="solar:tram-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                     </div>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                 <div class="card">
                                      <div class="card-body">
                                           <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                     <h4 class="card-title mb-2">Pending Review</h4>
                                                     <p class="text-muted fw-medium fs-22 mb-0">210</p>
                                                </div>
                                                <div>
                                                     <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                          <iconify-icon icon="solar:clipboard-remove-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                     </div>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                 <div class="card">
                                      <div class="card-body">
                                           <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                     <h4 class="card-title mb-2">Pending Payment</h4>
                                                     <p class="text-muted fw-medium fs-22 mb-0">608</p>
                                                </div>
                                                <div>
                                                     <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                          <iconify-icon icon="solar:clock-circle-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                     </div>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                 <div class="card">
                                      <div class="card-body">
                                           <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                     <h4 class="card-title mb-2">Delivered</h4>
                                                     <p class="text-muted fw-medium fs-22 mb-0">200</p>
                                                </div>
                                                <div>
                                                     <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                          <iconify-icon icon="solar:clipboard-check-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                     </div>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                 <div class="card">
                                      <div class="card-body">
                                           <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                     <h4 class="card-title mb-2">In Progress</h4>
                                                     <p class="text-muted fw-medium fs-22 mb-0">656</p>
                                                </div>
                                                <div>
                                                     <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                          <iconify-icon icon="solar:inbox-line-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                                     </div>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                            </div>
                       </div>

                       <div class="row">
                            <div class="col-xl-12">
                                 <div class="card">
                                      <div class="d-flex card-header justify-content-between align-items-center">
                                           <div>
                                                <h4 class="card-title">All Order List</h4>
                                           </div>
                                           <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                                     This Month
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                     <!-- item-->
                                                     <a href="#!" class="dropdown-item">Download</a>
                                                     <!-- item-->
                                                     <a href="#!" class="dropdown-item">Export</a>
                                                     <!-- item-->
                                                     <a href="#!" class="dropdown-item">Import</a>
                                                </div>
                                           </div>
                                      </div>
                                      <div class="card-body p-0">
                                           <div class="table-responsive">
                                                <table class="table align-middle mb-0 table-hover table-centered">
                                                     <thead class="bg-light-subtle">
                                                          <tr>
                                                               <th>Order ID</th>
                                                               <th>Created at</th>
                                                               <th>Customer</th>
                                                               <th>Priority</th>
                                                               <th>Total</th>
                                                               <th>Payment Status</th>
                                                               <th>Items</th>
                                                               <th>Delivery Number</th>
                                                               <th>Order Status</th>
                                                               <th>Action</th>
                                                          </tr>
                                                     </thead>
                                                     <tbody>
                                                          <tr>
                                                               <td>
                                                                    #583488/80
                                                               </td>
                                                               <td>Apr 23 , 2024</td>
                                                               <td>
                                                                    <a href="#!" class="link-primary fw-medium">Gail C. Anderson</a>
                                                               </td>
                                                               <td> Normal</td>
                                                               <td> $1,230.00</td>
                                                               <td> <span class="badge bg-light text-dark  px-2 py-1 fs-13">Unpaid</span></td>
                                                               <td> 4</td>
                                                               <td> -</td>
                                                               <td> <span class="badge border border-secondary text-secondary  px-2 py-1 fs-13">Draft</span></td>
                                                               <td>
                                                                    <div class="d-flex gap-2">
                                                                         <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    </div>
                                                               </td>
                                                          </tr>

                                                          <tr>
                                                               <td>
                                                                    #456754/80
                                                               </td>
                                                               <td>Apr 20 , 2024</td>
                                                               <td>
                                                                    <a href="#!" class="link-primary fw-medium">Jung S. Ayala</a>
                                                               </td>
                                                               <td> Normal</td>
                                                               <td> $987.00</td>
                                                               <td> <span class="badge bg-success text-light  px-2 py-1 fs-13">Paid</span></td>
                                                               <td> 2</td>
                                                               <td> -</td>
                                                               <td> <span class="badge border border-warning text-warning  px-2 py-1 fs-13">Packaging</span></td>
                                                               <td>
                                                                    <div class="d-flex gap-2">
                                                                         <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    </div>
                                                               </td>
                                                          </tr>
                                                          <tr>
                                                               <td>
                                                                    #578246/80
                                                               </td>
                                                               <td>Apr 19 , 2024</td>
                                                               <td>
                                                                    <a href="#!" class="link-primary fw-medium">David A. Arnold</a>
                                                               </td>
                                                               <td> High</td>
                                                               <td> $1,478.00</td>
                                                               <td> <span class="badge  bg-success text-light px-2 py-1 fs-13">Paid</span></td>
                                                               <td> 5</td>
                                                               <td> #D-57837678</td>
                                                               <td> <span class="badge border border-success text-success  px-2 py-1 fs-13">Completed</span></td>
                                                               <td>
                                                                    <div class="d-flex gap-2">
                                                                         <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    </div>
                                                               </td>
                                                          </tr>

                                                          <tr>
                                                               <td>
                                                                    #348930/80
                                                               </td>
                                                               <td>Apr 04 , 2024</td>
                                                               <td>
                                                                    <a href="#!" class="link-primary fw-medium">Cecile D. Gordon</a>
                                                               </td>
                                                               <td> Normal</td>
                                                               <td> $720.00</td>
                                                               <td> <span class="badge bg-light text-dark  px-2 py-1 fs-13">Refund</span></td>
                                                               <td> 4</td>
                                                               <td> -</td>
                                                               <td> <span class="badge border border-danger text-danger  px-2 py-1 fs-13">Canceled</span></td>
                                                               <td>
                                                                    <div class="d-flex gap-2">
                                                                         <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    </div>
                                                               </td>
                                                          </tr>


                                                          <tr>
                                                               <td>
                                                                    #391367/80
                                                               </td>
                                                               <td>Apr 02 , 2024</td>
                                                               <td>
                                                                    <a href="#!" class="link-primary fw-medium">William Moreno</a>
                                                               </td>
                                                               <td> Normal</td>
                                                               <td> $1,909.00</td>
                                                               <td><span class="badge  bg-success text-light px-2 py-1 fs-13">Paid</span></td>
                                                               <td> 6</td>
                                                               <td> #D-89734235</td>
                                                               <td> <span class="badge border border-success text-success  px-2 py-1 fs-13">Completed</span></td>
                                                               <td>
                                                                    <div class="d-flex gap-2">
                                                                         <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    </div>
                                                               </td>
                                                          </tr>


                                                          <tr>
                                                               <td>
                                                                    #930447/80
                                                               </td>
                                                               <td>March 28 , 2024</td>
                                                               <td>
                                                                    <a href="#!" class="link-primary fw-medium">Alphonse Roy</a>
                                                               </td>
                                                               <td> High</td>
                                                               <td> $879.00</td>
                                                               <td><span class="badge  bg-success text-light px-2 py-1 fs-13">Paid</span></td>
                                                               <td> 4</td>
                                                               <td> #D-35227268</td>
                                                               <td><span class="badge border border-success text-success  px-2 py-1 fs-13">Completed</span></td>
                                                               <td>
                                                                    <div class="d-flex gap-2">
                                                                         <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    </div>
                                                               </td>
                                                          </tr>

                                                          <tr>
                                                               <td>
                                                                    #462397/80
                                                               </td>
                                                               <td>March 20 , 2024</td>
                                                               <td>
                                                                    <a href="#!" class="link-primary fw-medium">Pierpont Marleau</a>
                                                               </td>
                                                               <td> High</td>
                                                               <td> $1,230.00</td>
                                                               <td> <span class="badge bg-light text-dark  px-2 py-1 fs-13">Refund</span></td>
                                                               <td> 2</td>
                                                               <td> -</td>
                                                               <td> <span class="badge border border-danger text-danger  px-2 py-1 fs-13">Canceled</span></td>
                                                               <td>
                                                                    <div class="d-flex gap-2">
                                                                         <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    </div>
                                                               </td>
                                                          </tr>

                                                          <tr>
                                                               <td>
                                                                    #472356/80
                                                               </td>
                                                               <td>March 12 , 2024</td>
                                                               <td>
                                                                    <a href="#!" class="link-primary fw-medium">Madeleine Gervais</a>
                                                               </td>
                                                               <td> Normal</td>
                                                               <td> $1,264.00</td>
                                                               <td> <span class="badge bg-success text-light  px-2 py-1 fs-13">Paid</span></td>
                                                               <td> 3</td>
                                                               <td> #D-74922656</td>
                                                               <td> <span class="badge border border-success text-success  px-2 py-1 fs-13">Completed</span></td>
                                                               <td>
                                                                    <div class="d-flex gap-2">
                                                                         <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    </div>
                                                               </td>
                                                          </tr>

                                                          <tr>
                                                               <td>
                                                                    #448226/80
                                                               </td>
                                                               <td>March 02 , 2024</td>
                                                               <td>
                                                                    <a href="#!" class="link-primary fw-medium">Satordi Gaillou</a>
                                                               </td>
                                                               <td> High</td>
                                                               <td> $1,787.00</td>
                                                               <td> <span class="badge bg-success text-light  px-2 py-1 fs-13">Paid</span></td>
                                                               <td> 4</td>
                                                               <td> -</td>
                                                               <td> <span class="badge border border-warning text-warning  px-2 py-1 fs-13">Packaging</span></td>
                                                               <td>
                                                                    <div class="d-flex gap-2">
                                                                         <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                         <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    </div>
                                                               </td>
                                                          </tr>


                                                     </tbody>
                                                </table>
                                           </div>
                                           <!-- end table-responsive -->
                                      </div>
                                      <div class="card-footer border-top">
                                           <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-end mb-0">
                                                     <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                                     <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                     <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                     <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                     <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                                </ul>
                                           </nav>
                                      </div>
                                 </div>
                            </div>

                       </div>

                  </div>
                  <!-- End Container Fluid -->

                

             </div>
             <!-- ==================================================== -->
             <!-- End Page Content -->
             <!-- ==================================================== -->


        </div>

   </div>
   <!-- END Wrapper -->
@endsection
