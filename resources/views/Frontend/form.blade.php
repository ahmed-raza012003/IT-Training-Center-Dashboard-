<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('form.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Admission Form</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .bg-color {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .main-img img {
            border-radius: 10px;
        }

        h3 {
            font-weight: bold;
            color: #343a40;
        }

        h4 {
            font-weight: 600;
            color: #6c757d;
        }

        .btn-primary {
            background-color: #EF7A15;
            border: none;
        }

        .btn-primary:hover {
            background-color: #d67e3e;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #EF7A15;
        }

        .invalid-feedback {
            font-size: 0.875em;
        }
    </style>
</head>

<body>
    <section class="container-fluid bg-color py-4">
        <section class="container">
            <div class="row justify-content-center my-row">
                <div class="col-12 bg-white text-center col-md-8 col-lg-8">
                    <div class="row py-4 align-content-center border">
                        <div class="col-10 col-md-8 col-lg-6">
                            <div class="main-img">
                                <img src="{{ asset('assets/images/IT-work-Center.6404ff5c0a4e38.39326514.png') }}"
                                    alt="IT Work Center" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-6">
                            <h3>Admission Form</h3>
                            <h4>Office Admission Form</h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-8 bg-white text-center">
                    <div class="row py-4 align-content-center border pb-4">
                        <div class="col-12 pb-5 p-4">
                            <!-- Display validation errors -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Start of form -->
                            <form action="{{ route('admission.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf <!-- for Laravel CSRF protection -->

                                <!-- First Row: Branch, Batch, Course, Timing -->
                                <div class="form-row pb-5">
                                    <div class="form-group col-md-6 col-lg-3 col-12">
                                        <label for="branch_id">Branch <span class="text-danger">*</span></label>
                                        <select id="branch_id" name="branch_id"
                                            class="form-control @error('branch_id') is-invalid @enderror" required>
                                            <option value="">Please select</option>
                                            @foreach ($branches as $branch)
                                                <option value="{{ $branch->id }}"
                                                    {{ old('branch_id') == $branch->id ? 'selected' : '' }}>
                                                    {{ $branch->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('branch_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 col-lg-3 col-12">
                                        <label for="batch_id">Batch <span class="text-danger">*</span></label>
                                        <select id="batch_id" name="batch_id"
                                            class="form-control @error('batch_id') is-invalid @enderror" required>
                                            <option value="">Please select</option>
                                            @foreach ($batches as $batch)
                                                <option value="{{ $batch->id }}"
                                                    {{ old('batch_id') == $batch->id ? 'selected' : '' }}>
                                                    {{ $batch->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('batch_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 col-lg-3 col-12">
                                        <label for="course_id">Course <span class="text-danger">*</span></label>
                                        <select id="course_id" name="course_id"
                                            class="form-control @error('course_id') is-invalid @enderror" required>
                                            <option value="">Please select</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}"
                                                    {{ old('course_id') == $course->id ? 'selected' : '' }}>
                                                    {{ $course->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('course_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 col-lg-3 col-12">
                                        <label for="timing_id">Timing <span class="text-danger">*</span></label>
                                        <select id="timing_id" name="timing_id"
                                            class="form-control @error('timing_id') is-invalid @enderror" required>
                                            <option value="">Please select</option>
                                            @foreach ($timings as $timing)
                                                <option value="{{ $timing->id }}"
                                                    {{ old('timing_id') == $timing->id ? 'selected' : '' }}>
                                                    {{ $timing->time }}</option>
                                            @endforeach
                                        </select>
                                        @error('timing_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Other form fields remain unchanged -->
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="prefix">Prefix <span class="text-danger">*</span></label>
                                        <select id="prefix" name="prefix"
                                            class="form-control @error('prefix') is-invalid @enderror" required>
                                            <option value="">Please select</option>
                                            <option value="Mr." {{ old('prefix') == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                                            <option value="Miss." {{ old('prefix') == 'Miss.' ? 'selected' : '' }}>Miss.</option>
                                            <option value="Mrs." {{ old('prefix') == 'Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                        </select>
                                        @error('prefix')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="first_name">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                            id="first_name" name="first_name" value="{{ old('first_name') }}"
                                            required>
                                        @error('first_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="middle_name">Middle Name</label>
                                        <input type="text" class="form-control @error('middle_name') is-invalid @enderror"
                                            id="middle_name" name="middle_name" value="{{ old('middle_name') }}">
                                        @error('middle_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                            id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                                        @error('last_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Third Row: Date of Birth, Mobile Number, Email -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="dob">Date of Birth <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                            id="dob" name="dob" value="{{ old('dob') }}" required>
                                        @error('dob')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="mobile">Mobile Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                                            id="mobile" name="mobile" value="{{ old('mobile') }}" required>
                                        @error('mobile')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Fourth Row: Email, Gender, Religion -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Student E-mail <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="gender">Gender <span class="text-danger">*</span></label>
                                        <select id="gender" name="gender"
                                            class="form-control @error('gender') is-invalid @enderror" required>
                                            <option value="">Please select</option>
                                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                                Female</option>
                                        </select>
                                        @error('gender')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="religion">Religion</label>
                                        <input type="text" class="form-control @error('religion') is-invalid @enderror"
                                            id="religion" name="religion" value="{{ old('religion') }}">
                                        @error('religion')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Fifth Row: CNIC, Guardian Mobile, Address -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="cnic">CNIC <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('cnic') is-invalid @enderror"
                                            id="cnic" name="cnic" value="{{ old('cnic') }}" required>
                                        @error('cnic')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="guardian_mobile">Guardian Mobile Number <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('guardian_mobile') is-invalid @enderror"
                                            id="guardian_mobile" name="guardian_mobile" value="{{ old('guardian_mobile') }}"
                                            required>
                                        @error('guardian_mobile')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Sixth Row: Address Information -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="street_address">Street Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('street_address') is-invalid @enderror"
                                            id="street_address" name="street_address" value="{{ old('street_address') }}"
                                            required>
                                        @error('street_address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('city') is-invalid @enderror"
                                            id="city" name="city" value="{{ old('city') }}" required>
                                        @error('city')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="state">State <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('state') is-invalid @enderror"
                                            id="state" name="state" value="{{ old('state') }}" required>
                                        @error('state')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="postal_code">Postal Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('postal_code') is-invalid @enderror"
                                            id="postal_code" name="postal_code" value="{{ old('postal_code') }}" required>
                                        @error('postal_code')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <!-- End of form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9g7AYyo6PEPrIGWJOGtk1n0kM6NBxXhIzDAaW0cVfJ6xjq08f6C" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-8Y4iItm3w7tW6U0VbJ3KbrwAA9aHk5nPBL2Xo0eIURB1zJ1qtAkE5Xw5DJj3m29q" crossorigin="anonymous"></script>
</body>

</html>
