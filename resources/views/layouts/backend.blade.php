

<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('backend.includes.head')

<body>
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('backend.includes.nav')

    @include('backend.includes.sidebar')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
    @yield('content')
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            © 2021 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>


{{--    @include('backend.includes.footer')--}}
</div>



@include('backend.includes.script')
@yield('js')
</body>

</html>

