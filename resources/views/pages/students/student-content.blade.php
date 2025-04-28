<x-private-layout>
    <!-- Navbar -->
    <x-navbar role="{{ auth()->user()->role->name }}">
        <div class="nav">
            <a class="nav-link" href="/student/dashboard">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="/student/profile">
                <div class="sb-nav-link-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                Profile
            </a>
            <a class="nav-link getPopup" href="/student/settings">
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
    
    <!-- Main Content Area with Background Image -->
    <div id="layoutSidenav_content" class="bg-image">
        <div class="container-fluid">
            <!-- Slotted content -->
            @yield('content')
            <!--  -->
        </div>
    </div>

    <!-- Additional Styling for Background Image -->
    <style>
        .bg-image {
            background-image: url('{{ asset('images/bg.png') }}'); /* Path to your background image */
            background-size: cover; /* Ensures the image covers the entire screen */
            background-position: center; /* Keeps the image centered */
            background-attachment: fixed; /* Makes the background fixed during scroll */
            min-height: 100vh; /* Ensures the background covers the full height of the viewport */
        }
    </style>
</x-private-layout>
