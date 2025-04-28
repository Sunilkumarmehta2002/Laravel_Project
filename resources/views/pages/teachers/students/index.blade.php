@extends('pages.teachers.teacher-content')

@section('content')

<!-- Popup messages -->
@if (session('success'))
    <x-popup-message type="success" :message="session('success')" />
@endif

@if (session('warning'))
    <x-popup-message type="warning" :message="session('warning')" />
@endif

@if (session('error'))
    <x-popup-message type="error" :message="session('error')" />
@endif
<!--  -->

<!-- Slotted content -->
<h2>Class Students</h2>

<table class="table table-responsive">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = ($students->currentpage() - 1) * $students->perpage() + 1;
        @endphp

        @foreach ($students as $student)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
            <td>
                <a href="/teacher/students/{{ $student->id }}" class="btn btn-primary btn-sm">View</a>
                <a href="/teacher/students/{{ $student->id }}/assign" class="btn btn-info btn-sm">Assign</a>
                <a href="/teacher/students/{{ $student->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        @php
        $i++;
        @endphp
        @endforeach

    </tbody>
</table>

<div class="container">
    {{ $students->links() }}
</div>
<!--  -->

<script>
    $(document).ready(function() {
        // set page title
        $(document).prop('title', 'All Students | Student Management System');
    });
</script>

@endsection

<!-- Additional Styling for Background Image -->
<style>
    body {
        background-image: url('{{ asset('images/bg.png') }}'); /* Path to your background image */
        background-size: cover; /* Ensures the image covers the entire screen */
        background-position: center; /* Keeps the image centered */
        background-attachment: fixed; /* Makes the background fixed during scroll */
        min-height: 100vh; /* Ensures the background covers the full height of the viewport */
        font-family: 'Arial', sans-serif; /* Optional: set a nice font */
    }

    /* You can target the specific container if needed */
    .container {
        background-color: rgba(255, 255, 255, 0.7); /* Optional: add a semi-transparent white background to content */
        padding: 20px;
        border-radius: 10px;
    }

    h2 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .table {
        margin-top: 20px;
    }

    .btn {
        margin-right: 5px;
    }
</style>
