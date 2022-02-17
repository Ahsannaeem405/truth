<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head id="Head1" runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="">

    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/vendors/css/extensions/tether.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/dashboard/app-assets/dropify/css/dropify.min.css') }}">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/dashboard/app-assets/vendors/css/forms/select/select2.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/dashboard/app-assets/vendors/css/forms/select/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userSite/dashboard/app-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles">
    <link rel="stylesheet" type="text/css" href="{{asset('admin//app-assets/css/plugins/forms/wizard.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" type="text/css" href="{{asset('userSite/dashboard/app-assets/css/plugins/extensions/noui-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/dashboard/app-assets/css/core/colors/palette-noui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('userSite/dashboard/app-assets/css/pages/data-list-view.css')}}">



    @yield('css')

</head>

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Navbar-->
@include('layouts.navbar')
<!--End: Navbar-->

<!-- BEGIN: Sidebar-->
@include('layouts.sidebar')
<!-- END: Sidebar-->


<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<script src="{{ asset('userSite/dashboard/app-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/vendors/js/charts/apexcharts.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/js/scripts/datatables/datatable.js') }}"></script>




<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/dataTables.select.min.js') }}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>



<script src="{{ asset('userSite/dashboard/app-assets/vendors/js/extensions/tether.min.js') }}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/js/core/app.js') }}"></script>
{{--    <script src="{{ asset('admin/vendors/js/forms/select/select2.full.min.js')}}"></script>--}}
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('userSite/dashboard/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/vendors/js/ui/jquery.sticky.js')}}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/js/scripts/components.js') }}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/js/scripts/ui/data-list-view.js') }}"></script>
<script src="{{ asset('userSite/dashboard/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
{{--    <script src="{{ asset('admin/js/scripts/forms/select/form-select2.js')}}"></script>--}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script><!-- javascript -->



<script src="{{asset('userSite/dashboard/app-assets/vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('userSite/dashboard/app-assets/js/scripts/forms/wizard-steps.js')}}"></script>
<script src="{{asset('userSite/dashboard/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<script src="{{asset('userSite/dashboard/app-assets/js/scripts/extensions/sweet-alerts.js')}}"></script>
<script src="{{asset('userSite/dashboard/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>







<script>

    @if(session('success'))
    toastr.success("{{ session('success') }}");
    @elseif(session('error'))
    toastr.error("{{ session('error') }}");
    @endif
    $('.dropify').dropify();
</script>



@yield('js')

</body>
<!-- END: Body-->

</html>
