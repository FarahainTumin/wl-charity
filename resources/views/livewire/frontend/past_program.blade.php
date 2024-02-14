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
        ul {
            list-style-type: decimal;
        }

        @media (max-height: 1080px) {
            .fontSizeHeader {
                font-size: 35px;
            }
            /* Add your styles for larger screens here */
        }
        @media (min-height: 1081px) {
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
                <b>Past Program</b> : [P104 - Maiwp Run] &nbsp;
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
            <h6 class="fontSizeHeader" style="margin: 0px; padding: 0px; line-height: 50px;">P104 : <br><div>MAIWP RUN</div></h6>
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
<div style="padding: 20px 50px; font-size: 20px; margin-top: 50px">
    <div class="">
        <div class="">
            <b>Nama Program : P104 - MAIWP RUN</b>
        </div>
        <div class="">
            <b>Jangka Masa : 15 Jan 2024 - 31 Jan 2024</b>
        </div>
        <div class="">Penganjur : MAIWP Malaysia</div>
    </div>
    <div style="margin-top: 20px">
        <h4 style="">Dana</h4>
        <div class="">Sasaran : RM250,000.00</div>
        <div class="">Jumlah Dana : RM175,231.00</div>
        <div class="">Jumlah Peserta : 192,241 Peserta</div>
        <div class="">Peratusan Dana :<span style="color: green">75%</span></div>
    </div>
    <div style="margin-top: 20px">
        <h4 style="">Progress</h4>
        <div class="">Cukai / Perbelanjaan : RM2,350.40</div>
        <div class="">Jumlah Amaun Dana : RM172,781.00</div>
        <div class="">Penerima Manfaat : MAIWP Malaysia</div>
        <div class="">Status :
            <span style="color: green">
                Tamat
            </span>
        </div>
    </div>
    <div style="margin-top: 20px">
        <h4 style="">Muat Turun Laporan</h4>
        <div class="">
            <a href="#"><img src="images/fulls/qr.webp" style="width: 100%; max-width: 150px; position: relative;" alt="Description of the image" /></a>
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


<script>

</script>
</body>

</html>
