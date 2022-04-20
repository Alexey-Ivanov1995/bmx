@extends('layouts.index')


@section('content')
    <!-- Slider main container -->
    <div class="main swiper-header">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <section class="main__wrap d-flex justify-content-center align-items-center" style="background-image: url('assets/img/main-page.jpg')">
                    <div class="main__container">
                        <h1 class="main__title">RankBMX</h1>
                        <div class="main__subtitle-container">
                            <span class="main__budge">RANK BMX</span>
                            <h2 class="main__subtitle">RANKBMX</h2>
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="main__wrap d-flex justify-content-center align-items-center" style="background-image: url('assets/img/main-page.jpg')">
                    <div class="main__container">
                        <h1 class="main__title">RankBMX</h1>
                        <div class="main__subtitle-container">
                            <span class="main__budge">RANK BMX</span>
                            <h2 class="main__subtitle">RANKBMX</h2>
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="main__wrap d-flex justify-content-center align-items-center" style="background-image: url('assets/img/main-page.jpg')">
                    <div class="main__container">
                        <h1 class="main__title">RankBMX</h1>
                        <div class="main__subtitle-container">
                            <span class="main__budge">RANK BMX</span>
                            <h2 class="main__subtitle">RANKBMX</h2>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="control-swiper swiper-button-prev">
            <svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-previous"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline></svg>
        </div>
        <div class="control-swiper swiper-button-next">
            <svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-next"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline></svg>
        </div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    <section class="shop">
        <div class="container">
            <div class="shop__header d-flex flex-column align-items-center">
                <a href="#" class="shop__header-link">HTTPS://RANKBMX.COM</a>
                <h2 class="shop__header-title">BAŞLICA ÜRÜNLERİMİZ</h2>
                <p class="shop__header-subtitle">Üretimini yapmakta olduğumuz ve satışını yapmakta olduğumuz ürünlerimize göz atabilirsiniz.</p>
            </div>
            <div class="shop__content row mb-4">
                <div class="col-md-6 col-12 p-3">
                    <div class="card p-0 border-0">
                        <div class="card__list p-0">
                            <div class="card-header card-flex justify-content-between p-lg-4 p-3">
                                <div class="card-flex flex-column">
                                    <a class="card__header-link" href="/detail">Rank Kadro Göbeği Seti-Spanish</a>
                                    <span class="card__header-subtitle">
                    Kategori:Yedek Parça
                  </span>
                                </div>
                                <div class="card__header-right-subtitle">
                                    Yedek Parça
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <a class="cad__link" href="/detail">
                                    <img class="img" src="./assets/img/card-1.jpg" alt="card-1">
                                    <span class="card__badge" style="background:#61c00d ">Yeni Ürün</span>
                                </a>
                            </div>
                            <div class="card-footer">
                                <div class="card__section-description d-flex justify-content-center align-items-center">
                                    <div class="px-3 py-2 card__description-control card__description-left d-flex flex-column">
                                        <span class="card__description-title">Üretim Yılı</span>
                                        <span class="card__description-subtitle">2022</span>
                                    </div>
                                    <div class="px-3 py-2 card__description-control card__description-right d-flex flex-column">
                                        <span class="card__description-title">Üretim Yılı</span>
                                        <span class="card__description-subtitle">2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 p-3">
                    <div class="card p-0 border-0">
                        <div class="card__list p-0">
                            <div class="card-header card-flex justify-content-between p-lg-4 p-3">
                                <div class="card-flex flex-column">
                                    <a class="card__header-link" href="/detail">Rank Kadro Göbeği Seti-Spanish</a>
                                    <span class="card__header-subtitle">
                    Kategori:Yedek Parça
                  </span>
                                </div>
                                <div class="card__header-right-subtitle">
                                    Yedek Parça
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <a class="cad__link" href="/detail">
                                    <img class="img" src="./assets/img/card-1.jpg" alt="card-1">
                                    <span class="card__badge" style="background:#61c00d ">Yeni Ürün</span>
                                </a>
                            </div>
                            <div class="card-footer">
                                <div class="card__section-description d-flex justify-content-center align-items-center">
                                    <div class="px-3 py-2 card__description-control card__description-left d-flex flex-column">
                                        <span class="card__description-title">Üretim Yılı</span>
                                        <span class="card__description-subtitle">2022</span>
                                    </div>
                                    <div class="px-3 py-2 card__description-control card__description-right d-flex flex-column">
                                        <span class="card__description-title">Üretim Yılı</span>
                                        <span class="card__description-subtitle">2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 p-3">
                    <div class="card p-0 border-0">
                        <div class="card__list p-0">
                            <div class="card-header card-flex justify-content-between p-lg-4 p-3">
                                <div class="card-flex flex-column">
                                    <a class="card__header-link" href="/detail">Rank Kadro Göbeği Seti-Spanish</a>
                                    <span class="card__header-subtitle">
                    Kategori:Yedek Parça
                  </span>
                                </div>
                                <div class="card__header-right-subtitle">
                                    Yedek Parça
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <a class="cad__link" href="/detail">
                                    <img class="img" src="./assets/img/card-1.jpg" alt="card-1">
                                    <span class="card__badge" style="background:#61c00d ">Yeni Ürün</span>
                                </a>
                            </div>
                            <div class="card-footer">
                                <div class="card__section-description d-flex justify-content-center align-items-center">
                                    <div class="px-3 py-2 card__description-control card__description-left d-flex flex-column">
                                        <span class="card__description-title">Üretim Yılı</span>
                                        <span class="card__description-subtitle">2022</span>
                                    </div>
                                    <div class="px-3 py-2 card__description-control card__description-right d-flex flex-column">
                                        <span class="card__description-title">Üretim Yılı</span>
                                        <span class="card__description-subtitle">2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 p-3">
                    <div class="card p-0 border-0">
                        <div class="card__list p-0">
                            <div class="card-header card-flex justify-content-between p-lg-4 p-3">
                                <div class="card-flex flex-column">
                                    <a class="card__header-link" href="/detail">Rank Kadro Göbeği Seti-Spanish</a>
                                    <span class="card__header-subtitle">
                    Kategori:Yedek Parça
                  </span>
                                </div>
                                <div class="card__header-right-subtitle">
                                    Yedek Parça
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <a class="cad__link" href="/detail">
                                    <img class="img" src="./assets/img/card-1.jpg" alt="card-1">
                                    <span class="card__badge" style="background:#61c00d ">Yeni Ürün</span>
                                </a>
                            </div>
                            <div class="card-footer">
                                <div class="card__section-description d-flex justify-content-center align-items-center">
                                    <div class="px-3 py-2 card__description-control card__description-left d-flex flex-column">
                                        <span class="card__description-title">Üretim Yılı</span>
                                        <span class="card__description-subtitle">2022</span>
                                    </div>
                                    <div class="px-3 py-2 card__description-control card__description-right d-flex flex-column">
                                        <span class="card__description-title">Üretim Yılı</span>
                                        <span class="card__description-subtitle">2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop__more d-flex justify-content-center align-items-center mb-4">
                <a href="#" class="shop__more-link d-flex justify-content-center align-items-center" style="background:#e63619;">
                    Tüm Ürünlere Göz At
                </a>
            </div>
        </div>
    </section>
    <section class="products mb-5">
        <div class="container">
            <ul class="row products__list">
                <li class="col-lg-3 col-sm-6 col-12 products__item p-3">
                    <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" data-index="1" alt="rankbmx">
                </li>
                <li class="col-lg-3 col-sm-6 col-12 products__item p-3">
                    <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" data-index="2" alt="rankbmx">
                </li>
                <li class="col-lg-3 col-sm-6 col-12 products__item p-3">
                    <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" data-index="3" alt="rankbmx">
                </li>
                <li class="col-lg-3 col-sm-6 col-12 products__item p-3">
                    <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" data-index="4"  alt="rankbmx">
                </li>
                <li class="col-lg-3 col-sm-6 col-12 products__item p-3">
                    <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" data-index="5"  alt="rankbmx">
                </li>
                <li class="col-lg-3 col-sm-6 col-12 products__item p-3">
                    <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" data-index="6"  alt="rankbmx">
                </li>
                <li class="col-lg-3 col-sm-6 col-12 products__item p-3">
                    <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" data-index="7"  alt="rankbmx">
                </li>
                <li class="col-lg-3 col-sm-6 col-12 products__item p-3">
                    <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" data-index="8"  alt="rankbmx">
                </li>
            </ul>
        </div>
    </section>
    <!-- Slider main container -->
    <div class="swiper-footer d-none">
        <!-- Additional required wrapper -->
        <div class="close-swiper">
            <button class="swiper-close">
            </button>
        </div>
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide d-flex justify-content-center align-items-center" >
                <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" alt="rankbmx">
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
                <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" alt="rankbmx">
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
                <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" alt="rankbmx">
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
                <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" alt="rankbmx">
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
                <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" alt="rankbmx">
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
                <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" alt="rankbmx">
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
                <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" alt="rankbmx">
            </div>
            <div class="swiper-slide d-flex justify-content-center align-items-center">
                <img class="products__img" src="https://rankbmx.com/storage/Untitled-2png.png" alt="rankbmx">
            </div>
        </div>
        <div class="control-swiper swiper-button-prev">
            <svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-previous"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline></svg>
        </div>
        <div class="control-swiper swiper-button-next">
            <svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-next"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline></svg>
        </div>
    </div>
@endsection

