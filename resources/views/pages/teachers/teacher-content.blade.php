<x-private-layout>
    <!-- Navbar -->
    <x-navbar role="{{ auth()->user()->role->name }}">
        <div class="nav">
            <a class="nav-link" href="/teacher/dashboard">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <x-nav-link idNumber="1" link_name="Students" icon_class="fa-solid fa-user-graduate">
                <x-sub-nav-link href="/teacher/students/add">Add</x-sub-nav-link>
                <x-sub-nav-link href="/teacher/students/show">View</x-sub-nav-link>
            </x-nav-link>

            <x-nav-link idNumber="2" link_name="Announcements" icon_class="fa-solid fa-bullhorn">
                <x-sub-nav-link href="/teacher/announcements/create">Post</x-sub-nav-link>
                <x-sub-nav-link href="/teacher/announcements/show">View</x-sub-nav-link>
            </x-nav-link>

            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="/teacher/profile">
                <div class="sb-nav-link-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                Profile
            </a>
            <a class="nav-link getPopup" href="/teacher/settings">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                Settings
            </a>
            <a class="nav-link getPopup" href="/logout">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>
                Logout
            </a>
        </div>
    </x-navbar>
    
    <x-nav-top></x-nav-top>

    <!-- Main content section -->
    <div id="layoutSidenav_content">
        <div class="container-fluid">
            <!-- Slotted content -->
            @yield('content')
            <!--  -->
        </div>
    </div>
</x-private-layout>

<!-- Additional Styling for Background Image -->
<style>
    /* Apply background image to the body */
    body {
        background-image: url('{{ asset('images/bg.png') }}'); /* Path to the background image */
        background-size: cover; /* Ensures the image covers the entire screen */
        background-position: center; /* Keeps the image centered */
        background-attachment: fixed; /* Makes the background fixed during scroll */
        min-height: 100vh; /* Ensures the background covers the full height of the viewport */
    }

    /* Optional: Container styling for content */
    .container-fluid {
        background-color: rgba(255, 255, 255, 0.8); /* Optional: semi-transparent background for content */
        padding: 20px;
        border-radius: 10px;
    }

    /* Optional: Styling for headings */
    h2 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }
</style>
