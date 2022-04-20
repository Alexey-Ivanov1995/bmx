<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200;300;400;500;600&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200;300;400;500;600&family=Oxygen:wght@300;400&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <title>Document</title>
</head>
<body class="">

<main class="index">
    <header class="header">
        <div class="header__wrap">
            <div class="row justify-content-between align-items-center p-0 m-0">
                <div class="col-md-2 col-sm-3 col p-0">
                    <div class="header__logo d-flex justify-content-center align-items-center py-2">
                        <a href="/"><img class="header__logo-img logo-size" src="./assets/img/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-xl-6 d-xl-flex d-none p-0 justify-content-center">
                    <nav class="header__nav">
                        <ul class="header__nav-list d-flex justify-content-center mb-0">
                            <li class="header__nav-item  px-4">
                                <a class="header__nav-link" href="/">Ana Sayfa</a>
                            </li>
                            <li class="header__nav-item px-4"><a class="header__nav-link" href="/info">Hakkımızda</a></li>
                            <li class="header__nav-item px-4">
                                <a class="header__nav-link" href="/shop">Ürünlerimiz</a>
                                <ul class="header__sub-nav-list p-2">
                                    <li class="header__sub-nav-item"><a class="header__sub-nav-link" href="#">gthgfhg</a></li>
                                    <li class="header__sub-nav-item"><a class="header__sub-nav-link" href="#">gthgfhg</a></li>
                                    <li class="header__sub-nav-item"><a class="header__sub-nav-link" href="#">gthgfhg</a></li>
                                    <li class="header__sub-nav-item"><a class="header__sub-nav-link" href="#">gthgfhg</a></li>
                                </ul>
                            </li>
                            <li class="header__nav-item px-4"><a class="header__nav-link" href="/distribut">Distribütörler</a></li>
                            <li class="header__nav-item px-4"><a class="header__nav-link" href="/contact">İletişim</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-2 col header__buttons d-flex justify-content-end p-0">
                    <div class="header__button">
                        <button class="header__button-search">
                            <svg width="25" height="25" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="search-icon"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9" cy="9" r="7"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z"></path></svg>
                        </button>
                    </div>
                    <div class="header__button">
                        <button class="header__button-menu d-flex justify-content-center align-items-center">
                            <span class="header__button-menu-line"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer">
        <div class="footer__page">
            <div class="container">
                <div class="footer__container d-flex justify-content-between align-items-center row">
                    <div class="col-md-4 footer__text justify-content-md-start justify-content-center d-flex align-items-center">
                        (c) 2021-2022 rankedbmx.com - Tüm Hakları Saklıdır.
                    </div>
                    <div class="col-md-8 footer__social">
                        <ul class="d-flex justify-content-md-end justify-content-center flex-wrap">
                            <li class="p-3"><a class="footer__icon" href="#"><i class="fa-brands fa-sourcetree"></i></a></li>
                            <li class="p-3"><a class="footer__icon" href="#"><i class="fa-brands fa-sourcetree"></i></a></li>
                            <li class="p-3"><a class="footer__icon" href="#"><i class="fa-brands fa-sourcetree"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
<section class="menu d-flex justify-content-between flex-column">
    <div>
        <button class="menu__button-close"></button>
        <div class="menu__logo mb-4">
            <a href=""><img class="logo-size" src="./assets/img/logo.png" alt="logo"></a>
        </div>
        <nav class="menu__nav">
            <ul class="menu__list">
                <li class="menu__list-item"><a class="menu__list-link" href="#">Ana Sayfa</a></li>
                <li class="menu__list-item"><a class="menu__list-link" href="#">Hakkımızda</a></li>
                <li class="menu__list-item">
                    <a class="menu__list-link" href="#">Ürünlerimiz</a>
                    <ul class="header__sub-nav-list p-2">
                        <li class="header__sub-nav-item"><a class="header__sub-nav-link" href="#">gthgfhg</a></li>
                        <li class="header__sub-nav-item"><a class="header__sub-nav-link" href="#">gthgfhg</a></li>
                        <li class="header__sub-nav-item"><a class="header__sub-nav-link" href="#">gthgfhg</a></li>
                        <li class="header__sub-nav-item"><a class="header__sub-nav-link" href="#">gthgfhg</a></li>
                    </ul>
                </li>
                <li class="menu__list-item"><a class="menu__list-link" href="#">Distribütörler</a></li>
                <li class="menu__list-item"><a class="menu__list-link" href="#">İletişim</a></li>
            </ul>
        </nav>
    </div>
    <div class="menu__info d-flex">
        <div class="menu__info-img mr-3">
            <svg class="svg-inline--fa fa-headset fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headset" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z"></path></svg>
        </div>
        <div class="menu__phone d-flex flex-column">
            <span class="menu__phone-title">Destek için:</span>
            <a class="menu__phone-link" href="#">+90 0533 608 3915</a>
        </div>
    </div>
</section>
<div class="search-window">
    <input class="search-window__input" type="text" placeholder="Aria...">
    <dutton class="search-window__close"></dutton>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossOrigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossOrigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossOrigin="anonymous"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
<script src="./assets/js/js.js"></script>
<script src="{{asset('assets/js/js.js')}}"></script>
<script>
    const swiper = new Swiper('.swiper-footer', {
        // Optional parameters

        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        slidesPerView:1,
        initialSlide:1,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
    const swiper2 = new Swiper('.swiper-header', {
        // Optional parameters

        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        slidesPerView:1,
        initialSlide:1,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    var swiper4 = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var swiper3 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper4,
        },
    });

    $('.tab-content-item').click(function (){
        $(this).toggleClass('tab-content-item--active')
    })

    $('.products__img').click(function (){
        swiper.slideTo(this.dataset.index)
        $('.swiper-footer').removeClass('d-none')
    })
    $('.swiper-footer , .close-swiper > button').click(function (e){
        if($(e.target).is('.swiper-slide,.swiper-close')){
            $('.swiper-footer').addClass('d-none')
        }
    })
    var map = L.map('map').setView([51.505, -0.09], 13);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'your.mapbox.access.token'
    }).addTo(map);
</script>

</body>
</html>
