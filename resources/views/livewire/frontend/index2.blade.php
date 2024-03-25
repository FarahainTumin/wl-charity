<!DOCTYPE html>
<html lang="en" style="background-color: lightgrey">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Charity by MAIWP
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css" rel="stylesheet" />
    <link id="pagestyle" href="../assets/css/material-dashboard.css" rel="stylesheet" />

    <style>

        .small_size {
            width: 300px;
            height: auto;
        }
        /* CSS for the modal */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            border-radius: 5px;
        }

        /* Close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        @media (max-height: 1080px) {
            .heightForSlider {
                min-height: 69vh !important;
            }
            .fontSizeHeader {
                font-size: 35px;
            }
            /* Add your styles for larger screens here */
        }
        @media (min-height: 1081px) {
            .heightForSlider {
                min-height: 36vh !important;
            }
            .fontSizeHeader {
                font-size: 42px;
            }
            /* Add your styles for larger screens here */
        }
    </style>
</head>

<body class="g-sidenav-show bg-white" style="width: 720px; height: 1280px; margin: 0 auto;">

<header id="header" style="background-color: #e7e7e7">
    <div class="row" style="margin: 0px;">
        <div class="col-sm-4" style="padding: 10px 20px; text-align: center;">
            <img src="assets/img/charity/logo-maiwp-2020.png" style="width: 50%; max-width: 70px; height: auto; border-radius: 25px; margin: 10px; margin-bottom: 0px" alt="" />
        </div>
        <div class="col-sm-8" style="text-align: justify;padding-top: 10px;padding-left: 0px; font-family: Cambria;justify-content: center;display: flex;flex-direction: column;">
            <?php
            date_default_timezone_set('Asia/Kuala_Lumpur');
            $current_datetime = date("Y-m-d H:i:s");
            ?>
            <div style="font-style: italic; color: grey; font-size: 30px; padding-top: 5px;" ><?php echo $current_datetime; ?></div>
        </div>
    </div>
</header>

<div style="flex-direction: column; display: flex; height: 90vh; margin: 20px 40px;">
    <div><img style="width: 100%" src="{{ asset('images/fulls/CPK2.jpeg') }}" alt=""></div>
{{--    <div style="text-align: center; font-size: 45px; font-family: Cambria,serif; margin-top: 20px;"><b>Terima Kasih</b></div>--}}
{{--    <div style="text-align: center; font-size: 30px; font-family: Cambria,serif;" class="text-xxl-center">Semoga Amalan Kita Diterima</div>--}}
</div>

<footer>
    <div class="position-fixed bottom-0" style="width: 720px; z-index: 100" id="footer">
        <button id="autoclick-btn" class="btn btn-icon btn-lg btn-3" onclick="window.location='/vid';" type="button">
            <i class="fas fa-house-user" style="font-size: xxx-large; color: black"></i>
        </button>
        <div class="fix">
            <div class="row bg-gray-900" style="margin-right: 0px; margin-left: 0px">
                <div class="col-md-offset-3 text-center pt-3">
                    <p style="color: white; font-size: 23px; text-align: center; font-family: Cambria;">Copyright 2024 Maiwp. All Rights Reserved. <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>

<!-- Plugin for the charts, full documentation here: https://www.chartjs.org/ -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<script src="../assets/js/plugins/Chart.extension.js"></script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.min.js"></script>

{{--<script>--}}
{{--    setTimeout(function() {--}}
{{--        document.getElementById('autoclick-btn').click();--}}
{{--    }, 5000); // 5000 milliseconds = 5 seconds--}}
{{--</script>--}}
</body>

</html>
