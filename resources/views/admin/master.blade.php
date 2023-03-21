
<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('adminAsset')}}/assets/images/top-logo22.png" type="image/png" />
    <!--plugins-->
    <link href="{{asset('adminAsset')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('adminAsset')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

    <!-- loader-->
    <link href="{{asset('adminAsset')}}/assets/css/pace.min.css" rel="stylesheet" />

    <!-- for manage teacher table-->
    <link href="{{asset('adminAsset')}}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!--Theme Styles-->
    <link href="{{asset('adminAsset')}}/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/light-theme.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/header-colors.css" rel="stylesheet" />

    <title>@yield('title')</title>
</head>

<body>


<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
  @include('admin.include.header')
    <!--end top header-->

    <!--start sidebar -->
   @include('admin.include.left-sidebar')
    <!--start sidebar -->

    <!--start content-->
    <main class="page-content">

        @yield('content')

    </main>
    <!--end page main-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    @include('admin.include.right-sidebar')
    <!--end switcher-->

</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{asset('adminAsset')}}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('adminAsset')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('adminAsset')}}/assets/js/pace.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('adminAsset')}}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/plugins/select2/js/select2.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/js/form-select2.js"></script>
<!--app-->
<script src="{{asset('adminAsset')}}/assets/js/app.js"></script>
<script src="{{asset('adminAsset')}}/assets/js/index.js"></script>

<!-- for teacher manage table -->
<script src="{{asset('adminAsset')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/js/table-datatable.js"></script>
<script src="{{asset('adminAsset')}}/assets/js/validation.js"></script>
<script src="{{asset('adminAsset')}}/ckeditor/ckeditor.js"></script>
<script src="{{asset('adminAsset')}}/ckeditor/styles.js"></script>

<script>
   // // console.write('ruhul');
   //  new PerfectScrollbar(".best-product")
   //  new PerfectScrollbar(".top-sellers-list")

   CKEDITOR.replace('editor1');
   // $('select').selectpicker();
</script>


{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>--}}


</body>
</html>
