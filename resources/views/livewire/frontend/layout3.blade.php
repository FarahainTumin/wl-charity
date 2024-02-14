<!DOCTYPE HTML>
<html lang="en">

{{--@livewire('image-grid')--}}

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
            width: 10px;
            height: 10px;
            background-color: #3498db;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .bullet.active {
            background-color: #fff; /* Change color for active bullet */
        }
    </style>
</head>
<body>
<div class="floating-button-amount">
    RM1049
</div>
@yield('header')
<div class="header">
    <div class="slider">
        <div class="slide"><img src="images/fulls/11.png" alt="Image 1"></div>
        <div class="slide"><img src="images/fulls/03.jpeg" alt="Image 2"></div>
        <div class="slide"><img src="images/fulls/14.jpg" alt="Image 3"></div>
        <!-- Add more slides as needed -->
    </div>
    <div class="bullets"></div>
</div>
<div style="display: flex; flex-wrap: wrap;">
    <div style="display: flex; flex-wrap: wrap; flex-direction: column">
        <a href="#"><img src="images/fulls/06.jpeg" style="width: 100%; max-width: 230px; height: auto; border-radius: 25px; margin: 10px 10px 0px 10px;" alt="Description of the image" /></a>
        <a href="#"><img src="images/fulls/09.jpg" style="width: 100%; max-width: 230px; height: auto; border-radius: 25px; margin: 0px 10px 10px 10px;" alt="Description of the image" /></a>
    </div>
    <div >
        <a href="#"><img src="images/fulls/08.jpg" style="width: 100%; max-width: 450px; height: auto; border-radius: 25px; margin: 10px;" alt="Description of the image" /></a>
    </div>
</div>
<button class="floating-button"><i class="fas fa-phone"></i></button>

@yield('footer')

<script>
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

{{--<body class="is-preload-0 is-preload-1 is-preload-2" style="background-color: white;">--}}
{{--<!-- Main -->--}}
{{--<div id="">--}}
{{--    <div class="floating-button-amount">--}}
{{--        RM1049--}}
{{--    </div>--}}
    <!-- Header -->
{{--    <header id="header">--}}
{{--        <h1>Charity</h1>--}}
{{--        <p style="font-size: 13px">Majlis Agama Islam Wilayah Persekutuan</p>--}}
{{--        <ul class="icons">--}}
{{--            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>--}}
{{--            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>--}}
{{--            <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>--}}
{{--            <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>--}}
{{--        </ul>--}}
{{--    </header>--}}
{{--    <!-- Youtube -->--}}
{{--    <section id="youtube-video" style="margin: 20px;">--}}
{{--        <iframe width="681" height="383" src="https://www.youtube.com/embed/phjcOeF62Gk" title="ZIARAH ASNAF Siri 2 Bersama Menteri Di Jabatan Perdana Menteri (Hal Ehwal Agama) Jilid 2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--}}
{{--        <a class="thumbnail" href="https://www.youtube.com/watch?v=phjcOeF62Gk" data-position="left center">--}}
{{--            <img src="images/thumbs/01.jpg" alt="" />--}}
{{--        </a>--}}
{{--        <h2>ZIARAH ASNAF Siri 2 Bersama Menteri Di Jabatan Perdana Menteri (Hal Ehwal Agama) Jilid 2</h2>--}}
{{--        <p>Description of your YouTube video. Click the image to watch the video on YouTube.</p>--}}
{{--    </section>--}}

{{--    <section id="youtube-slider">--}}
{{--        <div class="slider">--}}
{{--            <div>--}}
{{--                <a class="thumbnail" href="https://www.youtube.com/embed/phjcOeF62Gk" data-position="left center">--}}
{{--                    <img src="images/thumbs/01.jpg" alt="Video Thumbnail" />--}}
{{--                </a>--}}
{{--                <h2>ZIARAH ASNAF Siri 2 Bersama Menteri Di Jabatan Perdana Menteri (Hal Ehwal Agama) Jilid 2</h2>--}}
{{--                <p>Description of your YouTube video.</p>--}}
{{--            </div>--}}
{{--            <!-- Add more slides if needed -->--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <x-image-grid />--}}

{{--    <!-- Thumbnails -->--}}
{{--    <div style="display: flex; flex-wrap: wrap;">--}}
{{--        <div style="display: flex; flex-wrap: wrap; flex-direction: column">--}}
{{--            <a href="#"><img src="images/fulls/06.jpeg" style="width: 100%; max-width: 230px; height: auto; border-radius: 25px; margin: 10px 10px 0px 10px;" alt="Description of the image" /></a>--}}
{{--            <a href="#"><img src="images/fulls/09.jpg" style="width: 100%; max-width: 230px; height: auto; border-radius: 25px; margin: 0px 10px 10px 10px;" alt="Description of the image" /></a>--}}
{{--        </div>--}}
{{--        <div >--}}
{{--            <a href="#"><img src="images/fulls/08.jpg" style="width: 100%; max-width: 450px; height: auto; border-radius: 25px; margin: 10px;" alt="Description of the image" /></a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <button class="floating-button"><i class="fas fa-phone"></i></button>--}}




{{--</div>--}}
{{--@yield('footer')--}}
{{--<!-- Scripts -->--}}
{{--<script src="assets/js/jquery.min.js"></script>--}}
{{--<script src="assets/js/browser.min.js"></script>--}}
{{--<script src="assets/js/breakpoints.min.js"></script>--}}
{{--<script src="assets/js/main.js"></script>--}}
{{--@livewireScripts--}}

{{--</body>--}}

</html>
