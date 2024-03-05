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

    <style>
        @media (max-height: 1080px) {
            .heightForQrBg {
                min-height: 150vh !important;
            }
            .fontSizeHeader {
                font-size: 35px;
            }
            /* Add your styles for larger screens here */
        }
        @media (min-height: 1081px) {
            .heightForQrBg {
                min-height: 80vh !important;
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
            <img src="http://wl-charity.test:8081/assets/img/charity/logo-maiwp-2020.png" style="width: 100%; max-width: 130px; height: auto; border-radius: 25px; margin: 10px; margin-bottom: 0px" alt="" />
        </div>
        <div class="col-sm-8" style="text-align: justify;padding-top: 10px;padding-left: 0px; font-family: Cambria;">
            <div style="font-style: italic; color: grey; font-size: 22px;" >
                <b>Past Program</b> : [P101 - Infaq Al-Quran] &nbsp;
                <i class="fas fa-qrcode" id="btnQr"></i>
                <div id="popupQr" style="display: none;">
                    Sila scan : <br>
                    <img src="../../../../public/images/fulls/qr.webp" style="width: 100%; max-width: 130px; height: auto; border-radius: 25px; margin: 10px; margin-bottom: 0px" alt="" />
                    <button type="button" class="btn bg-gradient-primary" id="closeBtn">Close</button>
                </div>
            </div>
            <div style="font-style: italic; color: grey; font-size: 22px;" >
                <i class="fas fa-globe"></i>
                <a href="http://wl-charity.test:8081/program">www.maiwp.gov.my/program</a>
            </div>
            <h6 class="fontSizeHeader" style="margin: 0px; padding: 0px; line-height: 50px;">P107 : <br><div>Wakaf Masjid</div></h6>
            <?php
            $current_datetime = date("Y-m-d H:i:s");
            ?>
            <div style="font-style: italic; color: grey; font-size: 22px; padding-top: 5px;" ><?php echo $current_datetime; ?></div>
        </div>
    </div>
</header>
{{--<div style="display: flex; flex-wrap: wrap;">--}}
{{--    <div >--}}
{{--        <a href="#"><img src="images/fulls/12.jpg" style="width: 150%; max-width: 700px; height: 908px;" alt="Description of the image" /></a>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="heightForQrBg page-header align-items-start" style="background-image: url('http://wl-charity.test:8081/images/fulls/masjid2.jpg');">
    <span class="mask bg-gradient-dark"></span>
    <div class="container" style="padding-left: 10px; padding-right: 10px; ">
        <div class="row" style="margin: 0px;">
            <div class="my-auto text-end">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom pt-6" style="font-size: xx-large; line-height: 50px">Dana Terkumpul : <br> RM280.31</h4>
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom pt-6" style="font-size: xx-large; line-height: 50px">Sasaran Dana : <br> RM800.00</h4>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom pt-6" style="font-size: xx-large">22 Jan - 15 Feb (20 baki hari)</p>
                <button class="btn btn-icon btn-lg btn-3 btn-primary" style="bottom:-250px; left:0px; font-size: x-large" type="button">
                    <span class="btn-inner--text">Imbas Kod QR (Sumbangan)</span>&nbsp;
                    <span class="btn-inner--icon" style="font-size: xx-large"><i class="fas fa-qrcode" id="btnQr"></i></span>
                </button>
                <a href="#"><img src="images/fulls/qr.webp" style="width: 100%; max-width: 150px; position: relative; bottom: -250px; z-index: 0" alt="Description of the image" /></a>
            </div>
        </div>
    </div>
</div>
{{--<div style="display: flex; ">--}}
{{--    <a href="#" class="yellow-button" style="font-size: 25px; position: absolute; left: 230px; bottom: 110px; z-index: 100">--}}
{{--        RM 1--}}
{{--    </a>--}}
{{--    <div >--}}

{{--    </div>--}}
{{--</div>--}}

{{--<button class="floating-button"><i class="fas fa-phone"></i></button>--}}
<footer>
    <div class="position-fixed bottom-0 z-index-2" style="width:720px" id="footer">
        <button class="btn btn-icon btn-lg btn-3" onclick="window.location.href='http://wl-charity.test:8081/home';" type="button">
            <i class="fas fa-house-user" style="font-size: xxx-large; color: white"></i>
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


<script>

</script>
</body>

</html>
