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
                       <div class="col-xl-3 col-lg-4">
                            <div class="card">
                                 <div class="card-body">
                                      <div class="bg-light text-center rounded bg-light">
                                           <img src="assets/images/product/p-1.png" alt="" class="avatar-xxl">
                                      </div>
                                      <div class="mt-3">
                                           <h4>Fashion Men , Women & Kid's</h4>
                                           <div class="row">
                                                <div class="col-lg-4 col-4">
                                                     <p class="mb-1 mt-2">Created By :</p>
                                                     <h5 class="mb-0">Seller</h5>
                                                </div>
                                                <div class="col-lg-4 col-4">
                                                     <p class="mb-1 mt-2">Stock :</p>
                                                     <h5 class="mb-0">46233</h5>
                                                </div>
                                                <div class="col-lg-4 col-4">
                                                     <p class="mb-1 mt-2">ID :</p>
                                                     <h5 class="mb-0">FS16276</h5>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                                 <div class="card-footer border-top">
                                      <div class="row g-2">
                                           <div class="col-lg-6">
                                                <a href="#!" class="btn btn-outline-secondary w-100">Create Category</a>
                                           </div>
                                           <div class="col-lg-6">
                                                <a href="#!" class="btn btn-primary w-100">Cancel</a>
                                           </div>
                                      </div>
                                 </div>
                            </div>
                       </div>

                       <div class="col-xl-9 col-lg-8 ">
                            <div class="card">
                                 <div class="card-header">
                                      <h4 class="card-title">Add Thumbnail Photo</h4>
                                 </div>
                                 <div class="card-body">
                                      <!-- File Upload -->
                                      <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                           <div class="fallback">
                                                <input name="file" type="file" multiple />
                                           </div>
                                           <div class="dz-message needsclick">
                                                <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                                                <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to browse</span></h3>
                                                <span class="text-muted fs-13">
                                                     1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                                                </span>
                                           </div>
                                      </form>
                                 </div>
                            </div>

                            <div class="card">
                                 <div class="card-header">
                                      <h4 class="card-title">General Information</h4>
                                 </div>
                                 <div class="card-body">
                                      <div class="row">
                                           <div class="col-lg-6">
                                                <form>
                                                     <div class="mb-3">
                                                          <label for="category-title" class="form-label">Category Title</label>
                                                          <input type="text" id="category-title" class="form-control" placeholder="Enter Title" value="Fashion Men , Women & Kid's">
                                                     </div>
                                                </form>
                                           </div>

                                           <div class="col-lg-6">
                                                <form>
                                                     <label for="crater" class="form-label">Created By</label>
                                                     <select class="form-control" id="crater" data-choices data-choices-groups data-placeholder="Select Crater">
                                                          <option value="">Select Crater</option>
                                                          <option value="Seller" selected>Seller</option>
                                                          <option value="Admin">Admin</option>
                                                          <option value="Other">Other</option>
                                                     </select>
                                                </form>
                                           </div>
                                           <div class="col-lg-6">
                                                <form>
                                                     <div class="mb-3">
                                                          <label for="product-stock" class="form-label">Stock</label>
                                                          <input type="number" id="product-stock" class="form-control" placeholder="Quantity" value="46233">
                                                     </div>

                                                </form>
                                           </div>
                                           <div class="col-lg-6">
                                                <form>
                                                     <div class="mb-3">
                                                          <label for="product-id" class="form-label">Tag ID</label>
                                                          <input type="text" id="product-id" class="form-control" placeholder="#******" value="FS16276">
                                                     </div>

                                                </form>
                                           </div>
                                           <div class="col-lg-12">
                                                <div class="mb-0">
                                                     <label for="description" class="form-label">Description</label>
                                                     <textarea class="form-control bg-light-subtle" id="description" rows="7" placeholder="Type description">Aurora Fashion has once again captivated fashion enthusiasts with its latest collection, seamlessly blending elegance with comfort in a range of exquisite designs.</textarea>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                            </div>
                            <div class="card">
                                 <div class="card-header">
                                      <h4 class="card-title">Meta Options</h4>
                                 </div>
                                 <div class="card-body">
                                      <div class="row">
                                           <div class="col-lg-6">
                                                <form>
                                                     <div class="mb-3">
                                                          <label for="meta-title" class="form-label">Meta Title</label>
                                                          <input type="text" id="meta-title" class="form-control" placeholder="Enter Title" value="Fashion Brand">
                                                     </div>
                                                </form>
                                           </div>
                                           <div class="col-lg-6">
                                                <form>
                                                     <div class="mb-3">
                                                          <label for="meta-tag" class="form-label">Meta Tag Keyword</label>
                                                          <input type="text" id="meta-tag" class="form-control" placeholder="Enter word" value="fashion">
                                                     </div>
                                                </form>
                                           </div>
                                           <div class="col-lg-12">
                                                <div class="mb-0">
                                                     <label for="description" class="form-label">Description</label>
                                                     <textarea class="form-control bg-light-subtle" id="description" rows="4" placeholder="Type description"></textarea>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                            </div>
                            <div class="p-3 bg-light mb-3 rounded">
                                 <div class="row justify-content-end g-2">
                                      <div class="col-lg-2">
                                           <a href="#!" class="btn btn-outline-secondary w-100">Save Change</a>
                                      </div>
                                      <div class="col-lg-2">
                                           <a href="#!" class="btn btn-primary w-100">Cancel</a>
                                      </div>
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
    