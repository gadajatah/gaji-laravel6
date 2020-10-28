<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials._head')
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('partials._sidebar')
        <!-- Sidebar -->


        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @include('partials._topbar')
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('title-2')</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title-3')</li>
                        </ol>
                    </div>

                    <div class="row mb-3">
                        {{-- content --}}
                        @yield('content')

                    </div>
                    <!-- Modal Logout -->
                    @include('partials._modal')

                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            @include('partials._footer')
            <!-- Footer -->
        </div>
    </div>
    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- scripts -->
    @include('partials._scripts')
</body>

</html>
