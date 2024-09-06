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

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <!-- Logo & title -->
                                <div class="clearfix pb-3 bg-info-subtle p-lg-3 p-2 m-n2 rounded position-relative">
                                    <div class="float-sm-start">
                                        <div class="auth-logo">
                                            <img class="logo-dark me-1" src="assets/images/logo-dark.png" alt="logo-dark" height="24" />
                                        </div>
                                        <div class="mt-4">
                                            <h4>Larkon Admin.</h4>
                                            <address class="mt-3 mb-0">
                                                1729 Bangor St,<br>
                                                Houlton, ME, 04730 , United States <br>
                                                <abbr title="Phone">Phone:</abbr> +1(142)-532-9109
                                            </address>
                                        </div>
                                    </div>
                                    <div class="float-sm-end">
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="p-0 pe-5 py-1">
                                                            <p class="mb-0 text-dark fw-semibold"> Invoice : </p>
                                                        </td>
                                                        <td class="text-end text-dark fw-semibold px-0 py-1">#INV-0758267/90</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-0 pe-5 py-1">
                                                            <p class="mb-0">Issue Date: </p>
                                                        </td>
                                                        <td class="text-end text-dark fw-medium px-0 py-1">23 April 2024</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-0 pe-5 py-1">
                                                            <p class="mb-0">Due Date : </p>
                                                        </td>
                                                        <td class="text-end text-dark fw-medium px-0 py-1">26 April 2024</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-0 pe-5 py-1">
                                                            <p class="mb-0">Amount : </p>
                                                        </td>
                                                        <td class="text-end text-dark fw-medium px-0 py-1">$737.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-0 pe-5 py-1">
                                                            <p class="mb-0">Status : </p>
                                                        </td>
                                                        <td class="text-end px-0 py-1"><span class="badge bg-success text-white  px-2 py-1 fs-13">Paid</span></td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="position-absolute top-100 start-50 translate-middle">
                                        <img src="assets/images/check-2.png" alt="" class="img-fluid">
                                    </div>
                                </div>

                                <div class="clearfix pb-3 mt-4">
                                    <div class="float-sm-start">
                                        <div class="">
                                            <h4 class="card-title">Issue From :</h4>
                                            <div class="mt-3">
                                                <h4>Larkon Admin.INC</h4>
                                                <p class="mb-2">2437 Romano Street Cambridge, MA 02141</p>
                                                <p class="mb-2"><span class="text-decoration-underline">Phone :</span> +(31)781-417-2004</p>
                                                <p class="mb-2"><span class="text-decoration-underline">Email :</span> JulianeKuhn@jourrapide.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-sm-end">
                                        <div class="">
                                            <h4 class="card-title">Issue For :</h4>
                                            <div class="mt-3">
                                                <h4>Gaston Lapierre</h4>
                                                <p class="mb-2">1344 Hershell Hollow Road WA 98168 , USA</p>
                                                <p class="mb-2"><span class="text-decoration-underline">Phone :</span> +(123) 732-760-5760</p>
                                                <p class="mb-2"><span class="text-decoration-underline">Email :</span> hello@dundermuffilin.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive table-borderless text-nowrap table-centered">
                                            <table class="table mb-0">
                                                <thead class="bg-light bg-opacity-50">
                                                    <tr>
                                                        <th class="border-0 py-2">Product Name</th>
                                                        <th class="border-0 py-2">Quantity</th>
                                                        <th class="border-0 py-2">Price</th>
                                                        <th class="border-0 py-2">Tax</th>
                                                        <th class="text-end border-0 py-2">Total</th>
                                                    </tr>
                                                </thead> <!-- end thead -->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div class="rounded bg-light avatar d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-1.png" alt="" class="avatar">
                                                                </div>
                                                                <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Men Black Slim Fit T-shirt</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>M</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>1</td>
                                                        <td>$80.00</td>
                                                        <td>$3.00</td>
                                                        <td class="text-end">$83.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div class="rounded bg-light avatar d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-5.png" alt="" class="avatar">
                                                                </div>
                                                                <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Dark Green Cargo Pent</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>M</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>3</td>
                                                        <td>$110.00</td>
                                                        <td>$4.00</td>
                                                        <td class="text-end">$330.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div class="rounded bg-light avatar d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-8.png" alt="" class="avatar">
                                                                </div>
                                                                <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Men Dark Brown Wallet</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>1</td>
                                                        <td>$132.00</td>
                                                        <td>$5.00</td>
                                                        <td class="text-end">$137.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div class="rounded bg-light avatar d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-10.png" alt="" class="avatar">
                                                                </div>
                                                                <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Kid's Yellow T-shirt</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>2</td>
                                                        <td>$110.00</td>
                                                        <td>$5.00</td>
                                                        <td class="text-end">$223.00</td>
                                                    </tr>
                                                </tbody> <!-- end tbody -->
                                            </table> <!-- end table -->
                                        </div> <!-- end table responsive -->
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row justify-content-end">
                                    <div class="col-lg-5 col-6">
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr class="">
                                                        <td class="text-end p-0 pe-5 py-2">
                                                            <p class="mb-0"> Sub Total : </p>
                                                        </td>
                                                        <td class="text-end text-dark fw-medium  py-2">$777.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-end p-0 pe-5 py-2">
                                                            <p class="mb-0">Discount : </p>
                                                        </td>
                                                        <td class="text-end text-dark fw-medium  py-2">-$60.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-end p-0 pe-5 py-2">
                                                            <p class="mb-0">Estimated Tax (15.5%) : </p>
                                                        </td>
                                                        <td class="text-end text-dark fw-medium  py-2">$20.00</td>
                                                    </tr>
                                                    <tr class="border-top">
                                                        <td class="text-end p-0 pe-5 py-2">
                                                            <p class="mb-0 text-dark fw-semibold">Grand Amount : </p>
                                                        </td>
                                                        <td class="text-end text-dark fw-semibold  py-2">$737.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <div class="alert alert-danger alert-icon p-2" role="alert">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm rounded bg-danger d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                                                    <i class="bx bx-info-circle text-white"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                   All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 mb-1">
                                    <div class="text-end d-print-none">
                                        <a href="javascript:window.print()" class="btn btn-info width-xl">Print</a>
                                        <a href="javascript:void(0);" class="btn btn-outline-primary width-xl">Submit</a>
                                    </div>
                                </div>

                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div>
            <!-- End Container Fluid -->

            

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->

    </div>
    <!-- END Wrapper -->

   
@endsection