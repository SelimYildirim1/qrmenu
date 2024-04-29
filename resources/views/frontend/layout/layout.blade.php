<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/delici/all-demo/Delici-Defoult/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 13:17:36 GMT -->

<head>
    <meta charset="utf-8">
    <title>Delici - Restaurants HTML Template - Home 01</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- JavaScript -->


</head>

<body>
    <div class="page-wrapper">

        

        @include('frontend.Inc.header')

        @yield('content')

        @include('frontend.Inc.footer')

        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Başarılı!',
                    text: '{{ session('success') }}',
                });
            </script>
        @endif

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/custom-script.js"></script>

</body>

<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/delici/all-demo/Delici-Defoult/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 13:18:59 GMT -->

</html>
