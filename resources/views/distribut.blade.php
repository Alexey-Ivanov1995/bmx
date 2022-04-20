@extends('layouts.index')


@section('content')
    <div class="products-page">
        <section class="main" style="background-image: url('assets/img/main-page.jpg')">
            <div class="container">
                <div class="main__container">
                    <h1 class="main__title">Rank 25T Dişli</h1>
                    <div class="main__nav d-flex justify-content-end">
                        <ul class="main__nav-list d-flex flex-wrap">
                            <li class="main__list-item"><a class="main__list-link" href="#">Ana Sayfa</a></li>
                            <li class="main__list-item"><a class="main__list-link" href="#">Ürünlerimiz</a></li>
                            <li class="main__list-item"><a class="main__list-link main__list-link--active" href="#">Rank 25T Dişli</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="distributorler product-detail pb-4 mb-5">
            <div class="container">
                <ul class="product-detail__list">
                    <li class="product-detail__list-item border-bottom pb-5 mb-5">
                        <div class="product-detail__list-info">
                            <ul class="product-detail__info-list">
                                <li class="product-detail__info-list-item mb-2">
                                    <img class="product-detail__info-list-item-img" src="https://rankbmx.com/storage/yenilogo.png" alt="">
                                </li>
                                <li class="product-detail__info-list-item"><span class="">Demo Firması</span></li>
                                <li class="product-detail__info-list-item"><span class="">Adres, istanbul..</span></li>
                                <li class="product-detail__info-list-item"><span class="">email@mail.com</span></li>
                                <li class="product-detail__info-list-item"><span class="">0212 221 12 21</span></li>
                                <li class="product-detail__info-list-item">
                      <span class="">
                        <svg width="15px" height="15px" class="svg-inline--fa fa-globe fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="globe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path></svg>
                      </span>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="product-detail__list-item border-bottom pb-5 mb-5">
                        <div class="product-detail__list-info">
                            <ul class="product-detail__info-list">
                                <li class="product-detail__info-list-item mb-2">
                                    <img class="product-detail__info-list-item-img" src="https://rankbmx.com/storage/hkk.png" alt="">
                                </li>
                                <li class="product-detail__info-list-item"><span class="">Demo Firması</span></li>
                                <li class="product-detail__info-list-item"><span class="">Adres, istanbul..</span></li>
                                <li class="product-detail__info-list-item"><span class="">email@mail.com</span></li>
                                <li class="product-detail__info-list-item"><span class="">0212 221 12 21</span></li>
                                <li class="product-detail__info-list-item">
                      <span class="">
                        <svg width="15px" height="15px" class="svg-inline--fa fa-globe fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="globe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path></svg>
                      </span>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="email" style="background-image: url('https://rankbmx.com/assets/img/bg/subscribe.jpg')">
            <div class="container">
                <div class="email__container row d-flex align-items-center">
                    <div class="email__left col-lg-6 col-12 mb-lg-0 mb-4">
                        <span class="email__subtitle">Güncel kalmak için e-posta adresinizi paylaşın</span>
                        <h2 class="email__title">Haber bülteni</h2>
                    </div>
                    <div class="email__right shop col-lg-6  col-12">
                        <form class="form-email d-flex" action="">
                            <input class="form-email__input" type="text" placeholder="E-posta">
                            <div class="form-email__shop shop__more d-flex justify-content-center align-items-center">
                                <button type="submit" class="shop__more-link d-flex justify-content-center align-items-center" style="background:#e63619;">
                                    Kaydol
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

