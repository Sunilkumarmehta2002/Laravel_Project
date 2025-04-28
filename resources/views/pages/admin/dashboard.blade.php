@extends('pages.admin.admin-content')

@section('content')

    @if (session('greeting'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "{{session('greeting')}}"
            });
        </script>
    @endif


    <div class="row mt-4">
        <!-- Student Card -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-primary rounded-lg">
                <div class="card-body text-center">
                    <h5 class="card-title text-primary" id="student_count">{{$counts->students_count}}</h5>
                    <p class="card-text text-muted">Students</p>
                </div>
            </div>
        </div>

        <!-- Teacher Card -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-info rounded-lg">
                <div class="card-body text-center">
                    <h5 class="card-title text-info">{{$counts->teachers_count}}</h5>
                    <p class="card-text text-muted">Teachers</p>
                </div>
            </div>
        </div>

        <!-- Subject Card -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-warning rounded-lg">
                <div class="card-body text-center">
                    <h5 class="card-title text-warning" id="subject_count">{{$counts->subjects_count}}</h5>
                    <p class="card-text text-muted">Subjects</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Set page title
            $(document).prop('title', 'Admin Dashboard | Student Management System');
        });
    </script>

@endsection

@section('styles')
    <style>
        /* Global Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f9fc;
        }

        h2 {
            font-size: 2rem;
            font-weight: 600;
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 2rem;
        }

        .card-title {
            font-size: 2rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
        }

        /* Adding spacing */
        .row.mt-4 {
            margin-top: 2rem;
        }
    </style>
@endsection
