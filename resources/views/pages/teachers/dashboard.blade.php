@extends('pages.teachers.teacher-content')

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
    <h2>Dashboard</h2>
@endsection

<!-- Additional Styling for Background Image -->
<style>
    .bg-image {
        background-image: url('{{ asset('images/bg.png') }}'); /* Path to your background image */
        background-size: cover; /* Ensures the image covers the entire screen */
        background-position: center; /* Keeps the image centered */
        background-attachment: fixed; /* Makes the background fixed during scroll */
        min-height: 100vh; /* Ensures the background covers the full height of the viewport */
    }

    /* Apply the background image to the body or any desired element */
    body {
        background-image: url('{{ asset('images/bg.png') }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 100vh;
    }
</style>
