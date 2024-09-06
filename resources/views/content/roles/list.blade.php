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

                  <div class="card overflow-hiddenCoupons">
                       <div class="card-body p-0">
                            <div class="table-responsive">
                                 <table class="table align-middle mb-0 table-hover table-centered">
                                      <thead class="bg-light-subtle">
                                           <tr>
                                                <th>Role</th>
                                                <th>Workspace</th>
                                                <th>Tags</th>
                                                <th>Users</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                           </tr>
                                      </thead>
                                      <tbody>
                                           <tr>
                                                <td>Workspace Manager</td>
                                                <td>
                                                     <img src="assets/images/app-calendar/facebook.png" class="avatar-xs rounded-circle me-1" alt="..."> Facebook
                                                </td>
                                                <td> <span class="badge bg-light-subtle text-muted border py-1 px-2">Manager</span> <span class="badge bg-light-subtle text-muted border py-1 px-2">Product</span></td>
                                                <td>
                                                     <div class="avatar-group">
                                                          <div class="avatar">
                                                               <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm">
                                                          </div>
                                                          <div class="avatar">
                                                               <span class=" avatar-sm d-flex align-items-center justify-content-center bg-danger-subtle text-danger rounded-circle fw-bold shadow">
                                                                    P
                                                               </span>
                                                          </div>
                                                          <div class="avatar">
                                                               <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-sm">
                                                          </div>
                                                          <div class="avatar">
                                                               <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-sm">
                                                          </div>
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="form-check form-switch">
                                                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1" checked>
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="d-flex gap-2">
                                                          <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="role-edit.html" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                     </div>
                                                </td>
                                           </tr>

                                           <tr>
                                                <td>Product Owner</td>
                                                <td>
                                                     <img src="assets/images/app-calendar/slack.png" class="avatar-xs rounded-circle me-1" alt="..."> Slack
                                                </td>
                                                <td> <span class="badge bg-light-subtle text-muted border py-1 px-2">Manager</span> <span class="badge bg-light-subtle text-muted border py-1 px-2">Product</span> <span class="badge bg-light-subtle text-muted border py-1 px-2">Data</span></td>
                                                <td>
                                                     <div class="avatar-group">
                                                          <div class="avatar">
                                                               <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-sm">
                                                          </div>
                                                          <div class="avatar">
                                                               <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-sm">
                                                          </div>
                                                          <div class="avatar">
                                                               <span class=" avatar-sm d-flex align-items-center justify-content-center bg-info-subtle text-info rounded-circle fw-bold shadow">
                                                                    +12
                                                               </span>
                                                          </div>
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="form-check form-switch">
                                                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked4">
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="d-flex gap-2">
                                                          <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="role-edit.html" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                     </div>
                                                </td>
                                           </tr>

                                           <tr>
                                                <td>Product Designer</td>
                                                <td>
                                                     <img src="assets/images/app-calendar/zoom.png" class="avatar-xs rounded-circle me-1" alt="..."> Zoom
                                                </td>
                                                <td><span class="badge bg-light-subtle text-muted border py-1 px-2">Designer</span> <span class="badge bg-light-subtle text-muted border py-1 px-2">Data</span></td>
                                                <td>
                                                     <div class="avatar">
                                                          <img src="assets/images/users/avatar-10.jpg" alt="" class="rounded-circle avatar-sm">
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="form-check form-switch">
                                                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked2" checked>
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="d-flex gap-2">
                                                          <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="role-edit.html" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                     </div>
                                                </td>
                                           </tr>

                                           <tr>
                                                <td>Data Analyst</td>
                                                <td>
                                                     <img src="assets/images/app-calendar/google-analytics.png" class="avatar-xs rounded-circle me-1" alt="..."> Analytics
                                                </td>
                                                <td> <span class="badge bg-light-subtle text-muted border py-1 px-2">Data</span></td>
                                                <td>
                                                     <div class="avatar-group">
                                                          <div class="avatar">
                                                               <img src="assets/images/users/avatar-10.jpg" alt="" class="rounded-circle avatar-sm">
                                                          </div>
                                                          <div class="avatar">
                                                               <img src="assets/images/users/avatar-11.jpg" alt="" class="rounded-circle avatar-sm">
                                                          </div>
                                                          <div class="avatar">
                                                               <img src="assets/images/users/avatar-12.jpg" alt="" class="rounded-circle avatar-sm">
                                                          </div>
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="form-check form-switch">
                                                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked4">
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="d-flex gap-2">
                                                          <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="role-edit.html" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                     </div>
                                                </td>
                                           </tr>

                                           <tr>
                                                <td>Tech Lead</td>
                                                <td>
                                                     <a href="#!" class="link-primary">+ Add Workspace</a>
                                                </td>
                                                <td> <span class="badge bg-light-subtle text-muted border py-1 px-2">Product</span> <span class="badge bg-light-subtle text-muted border py-1 px-2">Data</span> <span class="badge bg-light-subtle text-muted border py-1 px-2">Supporter</span></td>
                                                <td> <a href="#!" class="link-primary">+ Add User</a></td>
                                                <td>
                                                     <div class="form-check form-switch">
                                                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked4">
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="d-flex gap-2">
                                                          <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="role-edit.html" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                     </div>
                                                </td>
                                           </tr>

                                           <tr>
                                                <td>Product Manager</td>
                                                <td>
                                                     <img src="assets/images/app-calendar/google-meet.png" class="avatar-xs rounded-circle me-1" alt="..."> Meet
                                                </td>
                                                <td> <span class="badge bg-light-subtle text-muted border py-1 px-2">System Design</span></td>
                                                <td>
                                                     <div class="avatar-group">
                                                          <div class="avatar">
                                                               <span class=" avatar-sm d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle fw-bold shadow">
                                                                    A
                                                               </span>
                                                          </div>
                                                          <div class="avatar">
                                                               <span class=" avatar-sm d-flex align-items-center justify-content-center bg-info-subtle text-info rounded-circle fw-bold shadow">
                                                                    J
                                                               </span>
                                                          </div>
                                                          <div class="avatar">
                                                               <span class=" avatar-sm d-flex align-items-center justify-content-center bg-warning-subtle text-warning rounded-circle fw-bold shadow">
                                                                    K
                                                               </span>
                                                          </div>
                                                          <div class="avatar">
                                                               <span class=" avatar-sm d-flex align-items-center justify-content-center bg-dark text-white rounded-circle fw-bold shadow">
                                                                    +17
                                                               </span>
                                                          </div>
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="form-check form-switch">
                                                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked3" checked>
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="d-flex gap-2">
                                                          <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="role-edit.html" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                     </div>
                                                </td>
                                           </tr>
                                           <tr>
                                                <td>Chief Product Owner</td>
                                                <td>
                                                     <img src="assets/images/app-calendar/google-mail.png" class="avatar-xs rounded-circle me-1" alt="..."> Mail
                                                </td>
                                                <td> <span class="badge bg-light-subtle text-muted border py-1 px-2">Manager</span> <span class="badge bg-light-subtle text-muted border py-1 px-2">Product</span></td>
                                                <td>
                                                     <div class="avatar-group">
                                                          <div class="avatar">
                                                               <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-sm">
                                                          </div>
                                                          <div class="avatar">
                                                               <img src="assets/images/users/avatar-12.jpg" alt="" class="rounded-circle avatar-sm">
                                                          </div>
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="form-check form-switch">
                                                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked4" checked>
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="d-flex gap-2">
                                                          <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="role-edit.html" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                     </div>
                                                </td>
                                           </tr>
                                           <tr>
                                                <td>Support Team Head</td>
                                                <td>
                                                     <img src="assets/images/app-calendar/stripe.png" class="avatar-xs rounded-circle me-1" alt="..."> Strip
                                                </td>
                                                <td> <span class="badge bg-light-subtle text-muted border py-1 px-2">QA</span></td>
                                                <td>
                                                     <div class="avatar">
                                                          <span class=" avatar-sm d-flex align-items-center justify-content-center bg-warning-subtle text-warning rounded-circle fw-bold shadow">
                                                               K
                                                          </span>
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="form-check form-switch">
                                                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked5">
                                                     </div>
                                                </td>
                                                <td>
                                                     <div class="d-flex gap-2">
                                                          <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="role-edit.html" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                     </div>
                                                </td>
                                           </tr>
                                      </tbody>
                                 </table>
                            </div>
                            <!-- end table-responsive -->
                       </div>
                       <div class="row g-0 align-items-center justify-content-between text-center text-sm-start p-3 border-top">
                            <div class="col-sm">
                                 <div class="text-muted">
                                      Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">59</span> Results
                                 </div>
                            </div>
                            <div class="col-sm-auto mt-3 mt-sm-0">
                                 <ul class="pagination  m-0">
                                      <li class="page-item">
                                           <a href="#" class="page-link"><i class='bx bx-left-arrow-alt'></i></a>
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
                                           <a href="#" class="page-link"><i class='bx bx-right-arrow-alt'></i></a>
                                      </li>
                                 </ul>
                            </div>
                       </div>
                  </div> <!-- end card -->

             </div>
             <!-- End Container Fluid -->

           

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->

   </div>
   <!-- END Wrapper -->

  
@endsection