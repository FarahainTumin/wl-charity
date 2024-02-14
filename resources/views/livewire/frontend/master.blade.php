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
            bottom: 123px;
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
            top: 145px;
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

        .header {
            position: relative;
            overflow: hidden;
            height: 450px; /* Adjust the height as needed */
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            position: relative;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
        }

        .slider img {
            width: 100%;
            height: auto;
        }

        .bullets {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2;
        }

        .bullet {
            width: 20px;
            height: 20px;
            background-color: black;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .bullet.active {
            background-color: #fff; /* Change color for active bullet */
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>

</head>

<body class="is-preload-0 is-preload-1 is-preload-2" style="background-color: white;">
<!-- Main -->
<div>
{{--    <div class="floating-button-amount">--}}
{{--        RM1049 collected--}}
{{--    </div>--}}

    @yield('header')

    <div id="layout1">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="display: flex; flex-wrap: wrap; flex-direction: column">
                <a href="/qr"><img src="images/fulls/07.jpg" style="width: 100%; max-width: 371px; height: auto; border-radius: 25px; margin: 10px 10px 0px 10px;" alt="Description of the image" /></a>
                <a href="/qr"><img src="images/fulls/14.jpg" style="width: 100%; max-width: 371px; height: 230px; border-radius: 25px; margin: 0px 10px 0px 10px;" alt="Description of the image" /></a>
            </div>
            <div >
                <a href="/qr"><img src="images/fulls/12.jpg" style="width: 100%; max-width: 318px; height: 470px; border-radius: 25px; margin: 10px 10px 0px 0px;" alt="Description of the image" /></a>
            </div>
            <div >
                <a href="/qr"><img src="images/fulls/13.jpeg" style="width: 700px; max-width: 700px; height: 405px; border-radius: 25px; margin: 0px 10px 10px 10px;" alt="Description of the image" /></a>
            </div>
        </div>
    </div>

    <div id="layout2" style="display:none; padding: 10px">
{{--        <section id="youtube-video">--}}
{{--            <iframe width="700" height="443" src="https://www.youtube.com/embed/phjcOeF62Gk" title="ZIARAH ASNAF Siri 2 Bersama Menteri Di Jabatan Perdana Menteri (Hal Ehwal Agama) Jilid 2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--}}
{{--            <a class="thumbnail" href="https://www.youtube.com/watch?v=phjcOeF62Gk" data-position="left center">--}}
{{--            </a>--}}
{{--        </section>--}}
        <div >
            <a href="/qr"><img src="images/fulls/16.jpeg" style="width: 100%; max-width: 700px; height: auto; border-radius: 25px;" alt="Description of the image" /></a>
        </div>
        <div style="display: flex; flex-wrap: wrap;">
            <div>
                <a href="/qr"><img src="images/fulls/08.jpg" style="width: 100%; max-width: 445px; height: 435px; border-radius: 25px; margin: 0px;" alt="Description of the image" /></a>
            </div>
            <div style="display: flex; flex-wrap: wrap; flex-direction: column">
                <a href="/qr"><img src="images/fulls/06.jpeg" style="width: 100%; max-width: 255px; height: auto; border-radius: 25px; margin: 0px 0px 0px 10px;" alt="Description of the image" /></a>
                <a href="/qr"><img src="images/fulls/09.jpg" style="width: 100%; max-width: 255px; height: 200px; border-radius: 25px; margin: 0px 0px 0px 10px;" alt="Description of the image" /></a>
            </div>
        </div>
    </div>

    <div id="layout3" style="display:none;">
        <div class="header">
            <div class="slider">
                <div class="slide"><a href="/qr"><img src="images/fulls/11.png" alt="Image 1"></a></div>
                <div class="slide"><a href="/qr"><img src="images/fulls/03.jpeg" alt="Image 2"></a></div>
                <div class="slide"><a href="/qr"><img src="images/fulls/03.jpeg" alt="Image 2"></a></div>
                <div class="slide"><a href="/qr"><img src="images/fulls/03.jpeg" alt="Image 2"></a></div>
{{--                <div class="slide"><img src="images/fulls/14.jpg" alt="Image 3"></div>--}}
                <!-- Add more slides as needed -->
            </div>
            <div class="bullets"></div>
        </div>
        <div style="display: flex; flex-wrap: wrap;">
            <div style="display: flex; flex-wrap: wrap; flex-direction: column">
                <a href="/qr"><img src="images/fulls/06.jpeg" style="width: 100%; max-width: 230px; height: auto; border-radius: 25px; margin: 10px 0px 0px 10px;" alt="Description of the image" /></a>
                <a href="/qr"><img src="images/fulls/09.jpg" style="width: 100%; max-width: 230px; height: 219px; border-radius: 25px; margin: 0px 0px 10px 10px;" alt="Description of the image" /></a>
            </div>
            <div >
                <a href="/qr"><img src="images/fulls/08.jpg" style="width: 700px; max-width: 460px; height: 434px; border-radius: 25px; margin: 10px;" alt="Description of the image" /></a>
            </div>
        </div>
    </div>



    <button class="floating-button" onclick="showPopup()"><i class="fas fa-phone"></i></button>

    <div class="popup" id="contactPopup">
        <p>Contact information goes here...</p>
        <button onclick="closePopup()">Close</button>
    </div>



</div>
@yield('footer')
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
{{--<script src="assets/js/main.js"></script>--}}
@livewireScripts
<script>
    function showPopup() {
        document.getElementById('contactPopup').style.display = 'block';
        setTimeout(function() {
            closePopup();
        }, 10000);
    }

    function closePopup() {
        document.getElementById('contactPopup').style.display = 'none';
    }

    let currentLayout = 1;

    // Function to switch between layouts
    function switchLayout() {
        // Hide all layouts
        document.getElementById('layout1').style.display = 'none';
        document.getElementById('layout2').style.display = 'none';
        document.getElementById('layout3').style.display = 'none';

        // Toggle current layout and update currentLayout variable
        currentLayout = (currentLayout % 3) + 1;
        document.getElementById('layout' + currentLayout).style.display = 'block';
    }

    // Set a timer to switch layouts after 5 seconds
    let timer = setInterval(switchLayout, 3000);

    // Reset the timer on any interaction
    function resetTimer() {
        clearInterval(timer);
        timer = setInterval(switchLayout, 3000); // Reset the timer to switch layouts after 5 seconds
    }

    // Attach the resetTimer function to various events (e.g., mousemove, keydown, etc.)
    document.addEventListener('mousemove', resetTimer);
    document.addEventListener('keydown', resetTimer);

    let currentIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const bulletsContainer = document.querySelector('.bullets');

    function showSlide(index) {
        if (index < 0) {
            currentIndex = slides.length - 1;
        } else if (index >= slides.length) {
            currentIndex = 0;
        } else {
            currentIndex = index;
        }

        const transformValue = -100 * currentIndex + '%';
        document.querySelector('.slider').style.transform = 'translateX(' + transformValue + ')';
        updateBullets();
    }

    function prevSlide() {
        showSlide(currentIndex - 1);
    }

    function nextSlide() {
        showSlide(currentIndex + 1);
    }

    function createBullet(index) {
        const bullet = document.createElement('div');
        bullet.classList.add('bullet');
        bullet.addEventListener('click', () => showSlide(index));
        return bullet;
    }

    function updateBullets() {
        const bullets = document.querySelectorAll('.bullet');
        bullets.forEach((bullet, index) => {
            bullet.classList.remove('active');
            if (index === currentIndex) {
                bullet.classList.add('active');
            }
        });
    }

    slides.forEach((slide, index) => {
        const bullet = createBullet(index);
        bulletsContainer.appendChild(bullet);
    });

    setInterval(nextSlide, 3000); // Auto slide every 3 seconds

</script>

</body>

</html>
