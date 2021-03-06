<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        @include('mobile/layouts/__head')
    </head>

    <body>
        <!-- Page content -->
        <div id="page">
            <!-- Main content -->
            <div class="content-wrapper">
                @include('frontend/layouts/__header')
                @yield('content')
                <!-- Footer -->
                @include('mobile/layouts/__footer')
                <!-- /footer -->
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->
    </body>
    @yield('script')   
</html>

