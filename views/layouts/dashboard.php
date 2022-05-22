<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{title}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/default/img/favicon.png" rel="icon">
    <link href="/assets/default/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/user/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets/user/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets/user/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/user/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/user/css/style.css" rel="stylesheet">




</head>


<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{primary-url}}/user" class="logo d-flex align-items-center">
                <img src="{{primary-url}}/assets/default/img/logo.png" alt="" />
                <span class="d-none d-lg-block">{{site-name}}</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                {{user-signed-in}}
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->


    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{page-title}}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{primary-url}}/user">Home</a>
                    </li>
                    <li class="breadcrumb-item active">{{page-title}}</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        {{section}}
    </main>
    <!-- End #main -->





    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/user/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/user/vendor/chart.js/chart.min.js"></script>
    <script src="/assets/user/vendor/echarts/echarts.min.js"></script>
    <script src="/assets/user/vendor/quill/quill.min.js"></script>
    <script src="/assets/user/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/user/vendor/tinymce/tinymce.min.js"></script>
    <script src="/assets/user/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/user/js/main.js"></script>

</body>

</html>