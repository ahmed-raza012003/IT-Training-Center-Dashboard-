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
                                      <img src="assets/images/product/p-1.png" alt="" class="img-fluid rounded bg-light">
                                      <div class="mt-3">
                                           <h4>Men Black Slim Fit T-shirt <span class="fs-14 text-muted ms-1">(Fashion)</span></h4>
                                           <h5 class="text-dark fw-medium mt-3">Price :</h5>
                                           <h4 class="fw-semibold text-dark mt-2 d-flex align-items-center gap-2">
                                                <span class="text-muted text-decoration-line-through">$100</span> $80 <small class="text-muted"> (30% Off)</small>
                                           </h4>
                                           <div class="mt-3">
                                                <h5 class="text-dark fw-medium">Size :</h5>
                                                <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                                     <input type="checkbox" class="btn-check" id="size-s">
                                                     <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-s">S</label>

                                                     <input type="checkbox" class="btn-check" id="size-m" checked>
                                                     <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-m">M</label>

                                                     <input type="checkbox" class="btn-check" id="size-xl">
                                                     <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xl">Xl</label>

                                                     <input type="checkbox" class="btn-check" id="size-xxl">
                                                     <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xxl">XXL</label>

                                                </div>
                                           </div>
                                           <div class="mt-3">
                                                <h5 class="text-dark fw-medium">Colors :</h5>
                                                <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                                     <input type="checkbox" class="btn-check" id="color-dark">
                                                     <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-dark"> <i class="bx bxs-circle fs-18 text-dark"></i></label>

                                                     <input type="checkbox" class="btn-check" id="color-yellow">
                                                     <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-yellow"> <i class="bx bxs-circle fs-18 text-warning"></i></label>

                                                     <input type="checkbox" class="btn-check" id="color-white">
                                                     <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-white"> <i class="bx bxs-circle fs-18 text-white"></i></label>

                                                     <input type="checkbox" class="btn-check" id="color-red">
                                                     <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-red"> <i class="bx bxs-circle fs-18 text-danger"></i></label>

                                                </div>
                                           </div>
                                      </div>
                                 </div>
                                 <div class="card-footer bg-light-subtle">
                                      <div class="row g-2">
                                           <div class="col-lg-6">
                                                <a href="#!" class="btn btn-outline-secondary w-100">Create Product</a>
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
                                      <h4 class="card-title">Add Product Photo</h4>
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
                                      <h4 class="card-title">Product Information</h4>
                                 </div>
                                 <div class="card-body">
                                      <div class="row">
                                           <div class="col-lg-6">
                                                <form>
                                                     <div class="mb-3">
                                                          <label for="product-name" class="form-label">Product Name</label>
                                                          <input type="text" id="product-name" class="form-control" placeholder="Items Name">
                                                     </div>
                                                </form>
                                           </div>
                                           <div class="col-lg-6">
                                                <form>
                                                     <label for="product-categories" class="form-label">Product Categories</label>
                                                     <select class="form-control" id="product-categories" data-choices data-choices-groups data-placeholder="Select Categories" name="choices-single-groups">
                                                          <option value="">Choose a categories</option>
                                                          <option value="Fashion">Fashion</option>
                                                          <option value="Electronics">Electronics</option>
                                                          <option value="Footwear">Footwear</option>
                                                          <option value="Sportswear">Sportswear</option>
                                                          <option value="Watches">Watches</option>
                                                          <option value="Furniture">Furniture</option>
                                                          <option value="Appliances">Appliances</option>
                                                          <option value="Headphones">Headphones</option>
                                                          <option value="Other Accessories">Other Accessories</option>
                                                     </select>
                                                </form>
                                           </div>
                                      </div>
                                      <div class="row">
                                           <div class="col-lg-4">
                                                <form>
                                                     <div class="mb-3">
                                                          <label for="product-brand" class="form-label">Brand</label>
                                                          <input type="text" id="product-brand" class="form-control" placeholder="Brand Name">
                                                     </div>
                                                </form>
                                           </div>
                                           <div class="col-lg-4">
                                                <form>
                                                     <div class="mb-3">
                                                          <label for="product-weight" class="form-label">Weight</label>
                                                          <input type="text" id="product-weight" class="form-control" placeholder="In gm & kg">
                                                     </div>
                                                </form>
                                           </div>
                                           <div class="col-lg-4">
                                                <form>
                                                     <label for="gender" class="form-label">Gender</label>
                                                     <select class="form-control" id="gender" data-choices data-choices-groups data-placeholder="Select Gender">
                                                          <option value="">Select Gender</option>
                                                          <option value="Men">Men</option>
                                                          <option value="Women">Women</option>
                                                          <option value="Other">Other</option>
                                                     </select>
                                                </form>
                                           </div>
                                      </div>
                                      <div class="row mb-4">
                                           <div class="col-lg-4">
                                                <div class="mt-3">
                                                     <h5 class="text-dark fw-medium">Size :</h5>
                                                     <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                                          <input type="checkbox" class="btn-check" id="size-xs1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xs1">XS</label>

                                                          <input type="checkbox" class="btn-check" id="size-s1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-s1">S</label>

                                                          <input type="checkbox" class="btn-check" id="size-m1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-m1">M</label>

                                                          <input type="checkbox" class="btn-check" id="size-xl1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xl1">Xl</label>

                                                          <input type="checkbox" class="btn-check" id="size-xxl1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xxl1">XXL</label>
                                                          <input type="checkbox" class="btn-check" id="size-3xl1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-3xl1">3XL</label>

                                                     </div>
                                                </div>
                                           </div>
                                           <div class="col-lg-5">
                                                <div class="mt-3">
                                                     <h5 class="text-dark fw-medium">Colors :</h5>
                                                     <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                                          <input type="checkbox" class="btn-check" id="color-dark1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-dark1"> <i class="bx bxs-circle fs-18 text-dark"></i></label>

                                                          <input type="checkbox" class="btn-check" id="color-yellow1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-yellow1"> <i class="bx bxs-circle fs-18 text-warning"></i></label>

                                                          <input type="checkbox" class="btn-check" id="color-white1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-white1"> <i class="bx bxs-circle fs-18 text-white"></i></label>

                                                          <input type="checkbox" class="btn-check" id="color-red1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-red1"> <i class="bx bxs-circle fs-18 text-primary"></i></label>

                                                          <input type="checkbox" class="btn-check" id="color-green1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-green1"> <i class="bx bxs-circle fs-18 text-success"></i></label>

                                                          <input type="checkbox" class="btn-check" id="color-blue1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-blue1"> <i class="bx bxs-circle fs-18 text-danger"></i></label>

                                                          <input type="checkbox" class="btn-check" id="color-sky1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-sky1"> <i class="bx bxs-circle fs-18 text-info"></i></label>

                                                          <input type="checkbox" class="btn-check" id="color-gray1">
                                                          <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-gray1"> <i class="bx bxs-circle fs-18 text-secondary"></i></label>

                                                     </div>
                                                </div>
                                           </div>
                                      </div>
                                      <div class="row">
                                           <div class="col-lg-12">
                                                <div class="mb-3">
                                                     <label for="description" class="form-label">Description</label>
                                                     <textarea class="form-control bg-light-subtle" id="description" rows="7" placeholder="Short description about the product"></textarea>
                                                </div>
                                           </div>
                                      </div>
                                      <div class="row">
                                           <div class="col-lg-4">
                                                <form>
                                                     <div class="mb-3">
                                                          <label for="product-id" class="form-label">Tag Number</label>
                                                          <input type="number" id="product-id" class="form-control" placeholder="#******">
                                                     </div>

                                                </form>
                                           </div>
                                           <div class="col-lg-4">
                                                <form>
                                                     <div class="mb-3">
                                                          <label for="product-stock" class="form-label">Stock</label>
                                                          <input type="number" id="product-stock" class="form-control" placeholder="Quantity">
                                                     </div>

                                                </form>
                                           </div>
                                           <div class="col-lg-4">
                                                <label for="product-stock" class="form-label">Tag</label>
                                                <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                                     <option value="Fashion" selected>Fashion</option>
                                                     <option value="Electronics">Electronics</option>
                                                     <option value="Watches">Watches</option>
                                                     <option value="Headphones">Headphones</option>
                                                </select>
                                           </div>
                                      </div>
                                 </div>
                            </div>
                            <div class="card">
                                 <div class="card-header">
                                      <h4 class="card-title">Pricing Details</h4>
                                 </div>
                                 <div class="card-body">
                                      <div class="row">
                                           <div class="col-lg-4">
                                                <form>
                                                     <label for="product-price" class="form-label">Price</label>
                                                     <div class="input-group mb-3">
                                                          <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                                          <input type="number" id="product-price" class="form-control" placeholder="000">
                                                     </div>
                                                </form>
                                           </div>
                                           <div class="col-lg-4">
                                                <form>
                                                     <label for="product-discount" class="form-label">Discount</label>
                                                     <div class="input-group mb-3">
                                                          <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                                          <input type="number" id="product-discount" class="form-control" placeholder="000">
                                                     </div>
                                                </form>
                                           </div>
                                           <div class="col-lg-4">
                                                <form>
                                                     <label for="product-tex" class="form-label">Tex</label>
                                                     <div class="input-group mb-3">
                                                          <span class="input-group-text fs-20"><i class='bx bxs-file-txt'></i></span>
                                                          <input type="number" id="product-tex" class="form-control" placeholder="000">
                                                     </div>
                                                </form>
                                           </div>
                                      </div>
                                 </div>
                            </div>
                            <div class="p-3 bg-light mb-3 rounded">
                                 <div class="row justify-content-end g-2">
                                      <div class="col-lg-2">
                                           <a href="#!" class="btn btn-outline-secondary w-100">Create Product</a>
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