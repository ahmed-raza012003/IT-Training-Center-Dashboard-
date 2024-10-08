
<div class="main-nav">
    {{-- <div class="logo-box">
        <a href="{{ url('/') }}" class="logo-dark">
            <img src="{{ asset('assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
            <img src="{{ asset('assets/images/logo-dark.png') }}" class="logo-lg" alt="logo dark">
        </a>
        <h1 class="sidebar-title">IT Work Center</h1> <!-- Styled heading -->
        <a href="{{ url('/') }}" class="logo-light">
            <img src="{{ asset('assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
            <img src="{{ asset('assets/images/logo-light.png') }}" class="logo-lg" alt="logo light">
        </a>
    </div>
     --}}
    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>
    <div class="scrollbar" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <ul class="navbar-nav" id="navbar-nav">

                                <li class="menu-title">Menu</li>

                                <li class="nav-item active">
                                    <a class="nav-link active" href="{{ route('dashboard') }}">
                                        <span class="nav-icon">
                                            <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                                        </span>
                                        <span class="nav-text"> Dashboard </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" href="#sidebarBranches" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="sidebarBranches">
                                        <span class="nav-icon">
                                            <iconify-icon icon="feather:map-pin"></iconify-icon>
                                        </span>
                                        <span class="nav-text">Branches</span>
                                    </a>
                                    <div class="collapse" id="sidebarBranches">
                                        <ul class="nav sub-navbar-nav">
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('branches.create') }}">Create</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('branches.index') }}">List</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('branches.index') }}">Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" href="#sidebarBatches" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="sidebarBatches">
                                        <span class="nav-icon">
                                            <iconify-icon icon="feather:layers"></iconify-icon>
                                        </span>
                                        <span class="nav-text">Batches</span>
                                    </a>
                                    <div class="collapse" id="sidebarBatches">
                                        <ul class="nav sub-navbar-nav">
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('batches.create') }}">Create</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('batches.index') }}">List</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('batches.index') }}">Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" href="#sidebarCourses" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="sidebarCourses">
                                        <span class="nav-icon">
                                            <iconify-icon icon="feather:book"></iconify-icon>
                                        </span>
                                        <span class="nav-text">Courses</span>
                                    </a>
                                    <div class="collapse" id="sidebarCourses">
                                        <ul class="nav sub-navbar-nav">
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link"
                                                    href="{{ route('courses.create') }}">Create</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('courses.index') }}">List</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('courses.index') }}">Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" href="#sidebarTimings" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="sidebarTimings">
                                        <span class="nav-icon">
                                            <iconify-icon icon="feather:clock"></iconify-icon>
                                        </span>
                                        <span class="nav-text">Timings</span>
                                    </a>
                                    <div class="collapse" id="sidebarTimings">
                                        <ul class="nav sub-navbar-nav">
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link"
                                                    href="{{ route('timings.create') }}">Create</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('timings.index') }}">List</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('timings.index') }}">Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" href="#sidebarFees" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="sidebarFees">
                                        <span class="nav-icon">
                                            <iconify-icon icon="feather:dollar-sign"></iconify-icon>
                                        </span>
                                        <span class="nav-text">Fees</span>
                                    </a>
                                    <div class="collapse" id="sidebarFees">
                                        <ul class="nav sub-navbar-nav">
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('fees.create') }}">Create
                                                    Fee</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('fees.index') }}">List Fee</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('fees.index') }}">Edit Fee</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" href="#sidebarStaff" data-bs-toggle="collapse"
                                       role="button" aria-expanded="false" aria-controls="sidebarStaff">
                                        <span class="nav-icon">
                                            <iconify-icon icon="feather:users"></iconify-icon>
                                        </span>
                                        <span class="nav-text">Human Resources</span>
                                    </a>
                                    <div class="collapse" id="sidebarStaff">
                                        <ul class="nav sub-navbar-nav">
                                            <li class="sub-nav-item"> 
                                                <a class="sub-nav-link" href="{{ route('attendance.index') }}">Attendance</a>
                                            </li>
                                            
                                          
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('staff.create') }}">Create Staff Member</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('staff.index') }}">List Staff Members</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('staff.index') }}">Edit Staff Members</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" href="#sidebarInstructors" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="sidebarInstructors">
                                        <span class="nav-icon">
                                            <iconify-icon icon="feather:user"></iconify-icon>
                                        </span>
                                        <span class="nav-text">Instructors</span>
                                    </a>
                                    <div class="collapse" id="sidebarInstructors">
                                        <ul class="nav sub-navbar-nav">
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('instructors.create') }}">Create</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('instructors.index') }}">List</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('instructors.index') }}">Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" href="#sidebarStudents" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="sidebarStudents">
                                        <span class="nav-icon">
                                            <iconify-icon icon="feather:user"></iconify-icon>
                                        </span>
                                        <span class="nav-text">Students</span>
                                    </a>
                                    <div class="collapse" id="sidebarStudents">
                                        <ul class="nav sub-navbar-nav">
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link"
                                                    href="{{ route('students.create') }}">Create</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('students.index') }}">List</a>
                                            </li>
                                            <li class="sub-nav-item">
                                                <a class="sub-nav-link" href="{{ route('students.index') }}">Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>


                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 1661px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 25px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.nav-item').forEach(function (item) {
    item.addEventListener('mouseenter', function () {
        const submenu = item.querySelector('.collapse');
        if (submenu) {
            submenu.classList.add('show');
        }
    });

    item.addEventListener('mouseleave', function () {
        const submenu = item.querySelector('.collapse');
        if (submenu) {
            submenu.classList.remove('show');
        }
    });
});

</script>
<style>
    .collapse {
    transition: height 0.3s ease, opacity 0.3s ease;
}

    /* Sidebar container styling */
   
    .sidebar-title {
        color: #f8f9fa;
        font-size: 1.5rem;
        margin-top: 10px;
    }

   

</style>