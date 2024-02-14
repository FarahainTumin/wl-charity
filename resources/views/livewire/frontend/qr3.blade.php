<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>Charity</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    @livewireStyles
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <style>
        /* Add your custom CSS for the layout here */
        #thumbnails {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Adjust the sizes as needed */
            gap: 20px; /* Adjust the gap between items */
        }

        article {
            width: 100%;
        }

        @media screen and (min-width: 600px) {
            article {
                width: calc(50% - 20px);
            }
        }

        @media screen and (min-width: 900px) {
            article {
                width: calc(33.33% - 20px);
            }
        }
        body{
            background-color: white;
            height: 1280px;
        }
        .floating-button {
            position: fixed;
            bottom: 100px;
            right: 20px;
            background-color: #376724;
            color: #fff;
            border: none;
            padding: 23px 20px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 30px;
            border-radius: 50px;
            transform: rotate(95deg);
        }
        .floating-button-amount {
            position: fixed;
            top: 85px;
            right: -38px;
            background-color: #376724;
            color: #fff;
            border: none;
            padding: 13px 60px 13px 43px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 30px;
            border-radius: 50px;
        }

        .yellow-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #f1c40f; /* Yellow color */
            color: #fff; /* White text */
            border: none;
            border-radius: 10px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .yellow-button:hover {
            background-color: #d4ac0d; /* Darker yellow on hover */
        }

        /* Optional: Style for the Font Awesome icon */
        .icon {
            margin-right: 8px;
        }
    </style>
</head>
<body>
<div class="floating-button-amount">
    RM1049
</div>
<!-- Header -->
<header id="header" style="display: flex; flex-direction: row; padding: 1.5em 2.25em 1.5em 2.25em">
    <div style="padding: 0px 25px;">
        <a href="#"><img src="images/fulls/logo-maiwp-2020.png" style="width: 100%; max-width: 100px; height: auto; border-radius: 25px; margin: 10px;" alt="Description of the image" /></a>
    </div>
    <div style="text-align: justify; align-content: center; display: grid;">
        <h1>Charity</h1>
        <p style="font-size: 13px">Majlis Agama Islam Wilayah Persekutuan</p>
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
            <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
        </ul>
    </div>
</header>
<div>

</div>
<div style="display: flex; flex-wrap: wrap;">
    <div >
        <a href="#"><img src="images/fulls/08.jpg" style="width: 100%; max-width: 700px; height: auto; border-radius: 25px; margin: 10px;" alt="Description of the image" /></a>
    </div>
</div>
<div class="floating-button-amount">RM1049</div>
<div style="display: flex; ">
    <a href="#" class="yellow-button" style="font-size: 25px; position: absolute; right: 222px;">
        RM 1
    </a>
    <div >
        <div>
            <a href="#"><img src="images/fulls/qr.webp" style="right: 0px; width: 100%; max-width: 200px; border-radius: 25px; margin: 10px; position: absolute; bottom: 238px;" alt="Description of the image" /></a>
        </div>
    </div>
</div>

<button class="floating-button"><i class="fas fa-phone"></i></button>

<footer style="position:fixed; bottom: 0; width: 100%; background-color: black">
    <div id="footer">
        <div class="container fix">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p style="color: white">Copyright 2023 <a href="#">Maiwp</a>. All Rights Reserved. <br>
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
