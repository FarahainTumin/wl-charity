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
        .ytplayer {pointer-events: none;}
    </style>
</head>

<body class="g-sidenav-show bg-white" style="width: 720px; height: 1280px; margin: 0 auto;" >

<header id="header" style="background-color: #e7e7e7">
    <div class="row" style="margin: 0px;">
        <div class="col-sm-4" style="width:30%; padding: 10px 20px; text-align: center;">
            <img src="assets/img/charity/logo-maiwp-2020.png" style="width: 50%; max-width: 70px; height: auto; border-radius: 25px; margin: 10px; margin-bottom: 0px" alt="" />
        </div>
        <div class="col-sm-8" style="width:70%;text-align: justify;padding-top: 10px;padding-left: 0px; font-family: Cambria;justify-content: center;display: flex;flex-direction: column;">
            <?php
                date_default_timezone_set('Asia/Kuala_Lumpur');
                $current_datetime = date("Y-m-d H:i:s");
            ?>
            <div style="font-style: italic; color: grey; font-size: 30px; padding-top: 5px;" ><?php echo $current_datetime; ?></div>
        </div>
    </div>
</header>

<div style="width: 100%; height: 1075px;" onclick="window.location='/doa';">
{{--    <iframe width="315" height="560"--}}
{{--            src="https://youtube.com/embed/3PVtUYw-N9g?si=K8ONk0HkRuvwQxzv"--}}
{{--            title="YouTube video player"--}}
{{--            frameborder="0"--}}
{{--            allow="accelerometer; autoplay; loop; mute; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"--}}
{{--            allowfullscreen></iframe>--}}
{{--    <iframe style="width: inherit; height: inherit;" class="ytplayer" src="https://youtube.com/embed/3PVtUYw-N9g?loop=1&autoplay=1&controls=0&mute=0" frameborder="0" allowfullscreen></iframe>--}}
    <iframe width="100%" height="100%"  src="https://www.youtube.com/embed/3PVtUYw-N9g?autoplay=1&loop=1&playlist=3PVtUYw-N9g&mute=0&controls=0" frameborder="0" allowfullscreen></iframe>
    <div style="flex-direction: column; display: flex; align-items: center; justify-content: center; margin-top: -200px;">
        <div style="text-align: center; font-size: 25px; padding: 10px 20px; font-family: Cambria,serif;" class="rounded text-xxl-center text-uppercase text-white bg-gray-900"> Sentuh untuk mula </div>
    </div>
</div>

<footer>
    <div class="position-fixed bottom-0" style="width: 720px; z-index: 100" id="footer">
{{--        <a class="btn btn-icon btn-lg btn-3" style="position: absolute; right: 30px; bottom: 70px;" onclick="window.location='/doa';">--}}
{{--            Sentuh--}}
{{--            <i class="fas fa-arrow-right" style="font-size: xxx-large; color: white"></i>--}}
{{--        </a>--}}
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

</body>

</html>
