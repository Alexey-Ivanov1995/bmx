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
        <section class="info pb-4 mb-5">
            <div class="container">
                <div class="inf0__logo card-flex justify-content-center align-items-center mb-3">
                    <img src="assets/img/logo.png" alt="logo">
                </div>
                <div class="info__content">
                    <ul class="info__list">
                        <li class="info__list-item">
                            <h2 class="info__list-title">HAKKIMIZDA</h2>
                            <div class="info__list-description">
                                <p class="color-text">
                                    RANK BMX 2012 yılında Kerem TAVUKÇU ve Gökay DEMİR dostluğunda kurulan bir oluşumdur.
                                    BMX 'e olan ilgimizden dolayı geçen 15 yıllık süreçte ülkemizde BMX sporunun daha iyi yerlere gelebilmesi için hep birlikte çaba sarf ettik.
                                    2021 yılından itibaren resmi olarak dünyaya hizmet vermekten gurur duyuyoruz.
                                    RANK BMX Markasının amacı, dünyanın her yerinde ki BMX sürücülerine yüksek kaliteli güvenilir ve yenilikçi parçalar sağlamaktır.
                                    Tüm tasarımlarımız, TÜRKİYE de üretimi yapılarak profesyonel ekibimiz ile test edilip denetlendikten sonra satışa sunulur.
                                </p>
                            </div>
                        </li>
                        <li class="info__list-item">
                            <h2 class="info__list-title">HAKKIMIZDA</h2>
                            <div class="info__list-description">
                                <ul class="info__description-list">
                                    <li class="info__description-list-item">
                                        <p> Türkiye içi teslimatlar satın alınan tarihten itibaren 1-3 iş günüdür. </p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="info__list-item">
                            <h2 class="info__list-title">HAKKIMIZDA</h2>
                            <div class="info__list-description">
                                <ul class="info__description-list">
                                    <li class="info__description-list-item">
                                        <p> Türkiye içi teslimatlar satın alınan tarihten itibaren 1-3 iş günüdür. </p>
                                    </li>
                                    <li class="info__description-list-item">
                                        <p> Türkiye içi teslimatlar satın alınan tarihten itibaren 1-3 iş günüdür. </p>
                                    </li>
                                    <li class="info__description-list-item">
                                        <p> Türkiye içi teslimatlar satın alınan tarihten itibaren 1-3 iş günüdür. </p>
                                    </li>
                                    <li class="info__description-list-item">
                                        <p> Türkiye içi teslimatlar satın alınan tarihten itibaren 1-3 iş günüdür. </p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <p class="color-text">Tüm talepleriniz, öneri ve şikayetleriniz için bizimle <a href="" target="_blank" style="">buradan </a>iletişime geçebilirsiniz.</p>
                </div>
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

