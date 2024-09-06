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
        <div class="page-content">

             <!-- Start Container Fluid -->
             <div class="container-xxl">


                  <div class="row">
                       <div class="col-md-6 col-xl-3">
                            <div class="card">
                                 <div class="card-body">
                                      <div class="d-flex align-items-center justify-content-between">
                                           <div>
                                                <h4 class="card-title mb-2 d-flex align-items-center gap-2">Total Orders </h4>
                                                <p class="text-muted fw-medium fs-22 mb-0">472 <span class="badge text-danger bg-danger-subtle fs-12"><i class="bx bx-down-arrow-alt"></i>6.9%</span> <span class="fs-12">(Last Week)</span></p>
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
                                                <h4 class="card-title mb-2 d-flex align-items-center gap-2">Order Items Over Time</h4>
                                                <p class="text-muted fw-medium fs-22 mb-0">231 <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-up-arrow-alt"></i>13.2%</span> <span class="fs-12">(Last Week)</span></p>
                                           </div>
                                           <div>
                                                <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                     <iconify-icon icon="solar:sort-by-time-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
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
                                                <h4 class="card-title mb-2 d-flex align-items-center gap-2">Return Order</h4>
                                                <p class="text-muted fw-medium fs-22 mb-0">367 <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-up-arrow-alt"></i>2.1%</span> <span class="fs-12">(Last Week)</span></p>
                                           </div>
                                           <div>
                                                <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                     <iconify-icon icon="solar:bag-cross-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
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
                                                <h4 class="card-title mb-2 d-flex align-items-center gap-2">Fulfilled Orders Over Time</h4>
                                                <p class="text-muted fw-medium fs-22 mb-0">123 <span class="badge text-danger bg-danger-subtle fs-12"><i class="bx bx-down-arrow-alt"></i>3.1%</span> <span class="fs-12">(Last Week)</span></p>
                                           </div>
                                           <div>
                                                <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                                     <iconify-icon icon="solar:bag-smile-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
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
                                           <h4 class="card-title">All Order Items</h4>
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
                                                          <th>Customer Name</th>
                                                          <th>Email</th>
                                                          <th>Order Date</th>
                                                          <th>Total</th>
                                                          <th>Order Status</th>
                                                          <th>Action</th>
                                                     </tr>
                                                </thead>
                                                <tbody>
                                                     <tr>
                                                          <td>Michael A. Miner</td>
                                                          <td> michaelminer@dayrep.com</td>
                                                          <td> 07 Jan, 2023</td>
                                                          <td>$289.00</td>
                                                          <td><span class="badge bg-success-subtle text-success py-1 px-2">Completed</span></td>
                                                          <td>
                                                               <div class="d-flex gap-2">
                                                                    <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               </div>
                                                          </td>
                                                     </tr>

                                                     <tr>
                                                          <td>Theresa T. Brose</td>
                                                          <td>theresbrosea@dayrep.com</td>
                                                          <td> 03 Dec, 2023</td>
                                                          <td>$213.00</td>
                                                          <td><span class="badge bg-danger-subtle text-danger py-1 px-2">Cancel</span></td>
                                                          <td>
                                                               <div class="d-flex gap-2">
                                                                    <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               </div>
                                                          </td>
                                                     </tr>

                                                     <tr>
                                                          <td>James L. Erickson</td>
                                                          <td>walterlcalabre@jourrapide.com</td>
                                                          <td> 28 Sep, 2023 </td>
                                                          <td>$735.00</td>
                                                          <td><span class="badge bg-success-subtle text-success py-1 px-2">Completed</span></td>
                                                          <td>
                                                               <div class="d-flex gap-2">
                                                                    <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               </div>
                                                          </td>
                                                     </tr>
                                                     <tr>
                                                          <td>Lily W. Wilson</td>
                                                          <td> olivehmize@rhyta.com</td>
                                                          <td>10 Aug, 2023</td>
                                                          <td>$324.00</td>
                                                          <td><span class="badge bg-warning-subtle text-warning py-1 px-2">Pending</span></td>
                                                          <td>
                                                               <div class="d-flex gap-2">
                                                                    <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               </div>
                                                          </td>
                                                     </tr>
                                                     <tr>
                                                          <td>Sarah M. Brooks</td>
                                                          <td>christasardina@dayrep.com</td>
                                                          <td> 22 May, 2023 </td>
                                                          <td>$153.00</td>
                                                          <td><span class="badge bg-success-subtle text-success py-1 px-2">Completed</span></td>
                                                          <td>
                                                               <div class="d-flex gap-2">
                                                                    <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               </div>
                                                          </td>
                                                     </tr>
                                                     <tr>
                                                          <td>Joe K. Hall</td>
                                                          <td>darrenwrivera@dayrep.com</td>
                                                          <td>15 Mar, 2023</td>
                                                          <td>$424.00</td>
                                                          <td><span class="badge bg-danger-subtle text-danger py-1 px-2">Cancel</span></td>
                                                          <td>
                                                               <div class="d-flex gap-2">
                                                                    <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               </div>
                                                          </td>
                                                     </tr>
                                                     <tr>
                                                          <td>Ralph Hueber</td>
                                                          <td>	robertvleavitt@dayrep.com</td>
                                                          <td>19 Dec, 2023</td>
                                                          <td>$521.00</td>
                                                          <td><span class="badge bg-warning-subtle text-warning py-1 px-2">Pending</span></td>
                                                          <td>
                                                               <div class="d-flex gap-2">
                                                                    <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               </div>
                                                          </td>
                                                     </tr>
                                                     <tr>
                                                          <td>Sarah Drescher</td>
                                                          <td>lydiajanderson@dayrep.com</td>
                                                          <td>11 Jun, 2023</td>
                                                          <td>$313.00</td>
                                                          <td><span class="badge bg-success-subtle text-success py-1 px-2">Completed</span></td>
                                                          <td>
                                                               <div class="d-flex gap-2">
                                                                    <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               </div>
                                                          </td>
                                                     </tr>
                                                     <tr>
                                                          <td>Leonie Meister</td>
                                                          <td>leonie@dayrep.com</td>
                                                          <td>19 Mar, 2023 </td>
                                                          <td>$219.00</td>
                                                          <td><span class="badge bg-danger-subtle text-danger py-1 px-2">Cancel</span></td>
                                                          <td>
                                                               <div class="d-flex gap-2">
                                                                    <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                    <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
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
   <!-- END Wrapper -->

   
@endsection