@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container"> 
                <div class="container mt-5">
                    <h1 class="mb-4 text-center font-weight-bold">Dashboard</h1>

                    <!-- Cards Overview -->
                    <div class="row mb-4">
                        <!-- Student Count Card -->
                        <div class="col-md-3 mb-3">
                            <div class="card text-center shadow-lg bg-light rounded hover-card h-100" onclick="location.href='{{ route('students.index') }}'">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <i class="fas fa-user-graduate fa-4x text-primary mb-2"></i>
                                    <h5 class="card-title">Total Students</h5>
                                    <h2 class="text-primary mt-1 counter" data-target="{{ $studentCount }}">0</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Courses Count Card -->
                        <div class="col-md-3 mb-3">
                            <div class="card text-center shadow-lg bg-light rounded hover-card h-100" onclick="location.href='{{ route('courses.index') }}'">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <i class="fas fa-book fa-4x text-success mb-2"></i>
                                    <h5 class="card-title">Total Courses</h5>
                                    <h2 class="text-success mt-1 counter" data-target="{{ $courseCount }}">0</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Staff Members Count Card -->
                        <div class="col-md-3 mb-3">
                            <div class="card text-center shadow-lg bg-light rounded hover-card h-100" onclick="location.href='{{ route('staff.index') }}'">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <i class="fas fa-chalkboard-teacher fa-4x text-warning mb-2"></i>
                                    <h5 class="card-title">Total Staff Members</h5>
                                    <h2 class="text-warning mt-1 counter" data-target="{{ $staffCount }}">0</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Instructors Count Card -->
                        <div class="col-md-3 mb-3">
                            <div class="card text-center shadow-lg bg-light rounded hover-card h-100" onclick="location.href='{{ route('instructors.index') }}'">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <i class="fas fa-users fa-4x text-danger mb-2"></i>
                                    <h5 class="card-title">Total Instructors</h5>
                                    <h2 class="text-danger mt-1 counter" data-target="{{ $instructorCount }}">0</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Enrollment Progress -->
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="card bg-light shadow-sm p-4 rounded">
                                <h2 class="text-center mb-4">Student Enrollment Progress</h2>
                                <div class="progress" style="height: 40px; border-radius: 20px; background-color: #e9ecef;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" 
                                         style="width: {{ $studentCount > 1 ? 40 : $studentCount }}%; border-radius: 20px;" 
                                         aria-valuenow="{{ $studentCount }}" aria-valuemin="0" aria-valuemax="100">
                                        <span class="font-weight-bold text-dark">{{ $studentCount }} Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Registration Graph and Top Courses Section -->
                    <div class="row mb-5">
                        <div class="col-md-6 d-flex flex-column mb-3">
                            <div class="card bg-light shadow-sm p-4 flex-fill">
                                <h2 class="text-center mb-4">Student Registrations Over Time</h2>
                                <canvas id="studentsChart"></canvas>
                            </div>

                            <!-- Top Courses by Enrollment -->
                            <div class="card bg-light shadow-sm p-4 flex-fill mt-3">
                                <h2 class="text-center mb-4">Top Courses by Enrollment</h2>
                                <div class="row">
                                    @foreach ($topCourses as $course)
                                        <div class="col-md-6 mb-3">
                                            <div class="card text-center bg-light shadow border border-primary rounded">
                                                <div class="card-body">
                                                    <i class="fas fa-book-open fa-3x text-primary mb-3"></i>
                                                    <h5 class="card-title font-weight-bold">{{ $course->name }}</h5>
                                                    <p class="card-text font-weight-bold">Enrolled Students: <span class="text-success">{{ $course->students_count }}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex flex-column mb-3">
                            <div class="card bg-light shadow-sm p-4 flex-fill">
                                <h2 class="text-center mb-4">Student Registrations in the Last 6 Months</h2>
                                <canvas id="registrationsDonutChart"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
            </main> 
        </div>
    </div>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('studentsChart').getContext('2d');
    const studentsChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($dates) !!},
            datasets: [{
                label: 'Students Registered',
                data: {!! json_encode($studentsPerDate) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Number of Students'
                    },
                    ticks: {
                        color: '#343a40'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Date'
                    },
                    ticks: {
                        color: '#343a40'
                    }
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: '#343a40',
                    }
                }
            }
        }
    });

    const registrationsCtx = document.getElementById('registrationsDonutChart').getContext('2d');
    const registrationsDonutChart = new Chart(registrationsCtx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($months) !!},
            datasets: [{
                data: {!! json_encode($registrationsPerMonth) !!},
                backgroundColor: [
                    '#FF6384',
                    '#36A2EB',
                    '#FFCE56',
                    '#4BC0C0',
                    '#9966FF',
                    '#FF9F40'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        color: '#343a40',
                    }
                },
                tooltip: {
                    callbacks: {
                        label: (tooltipItem) => {
                            const label = tooltipItem.label || '';
                            const value = tooltipItem.raw || 0;
                            return `${label}: ${value} Students`;
                        }
                    }
                }
            }
        }
    });

    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = Math.ceil(target / 100);
            if (count < target) {
                counter.innerText = count + increment;
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
    .card {
        border-radius: 15px;
        transition: all 0.3s ease;
        height: 100%;
    }

    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .card-body {
        padding: 20px;
    }

    h1, h2 {
        color: #343a40;
    }

    .card-title {
        font-weight: bold;
        font-size: 1.2rem;
    }

    h2 {
        font-size: 2rem;
        font-weight: bold;
    }

    .progress {
        height: 40px;
        border-radius: 25px;
    }

    .progress-bar {
        font-size: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: width 0.5s ease;
        border-radius: 25px;
    }
</style>
@endsection
