@extends('layouts.index')


@section('content')
    <div class="products-page">
        <section class="main" style="background-image: url('https://rankbmx.com/storage/eskiz/AASASS.jpg')">
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
        <section class="contact shop">
            <div id="map"></div>
            <div class="container">
                <form class="contact__form" action="">
                    <div class="contact__logo card-flex justify-content-center mb-4">
                        <img src="assets/img/logo.png" alt="logo">
                    </div>
                    <div class="contact__form-content">
                        <h2 class="contact__form-title mb-4">İLETİŞİM FORMU</h2>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control py-3" placeholder="Adınız" name="Adınız">
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control py-3" placeholder="Adınız" name="Adınız">
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control py-3" placeholder="Adınız" name="Adınız">
                            </div>
                            <div class="col-12 mb-5 form-group">
                                <textarea class="form-control py-3" placeholder="Adınız" name="Adınız" rows="4"></textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <div class="container__button form-email__shop shop__more d-flex justify-content-center align-items-center">
                                    <a href="#" class="shop__more-link d-flex justify-content-center align-items-center">
                                        Formu Yolla
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

