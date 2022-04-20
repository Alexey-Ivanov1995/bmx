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
        <section class="goods mb-5">
            <div class="container">
                <div class="goods__filter">
                    <div class="sorting row">
                        <div class="sorting-left col-lg-6 col-12 mb-0 mb-4">
                            <div class="result-count">Toplam gösterilen ürün: <span>6</span></div>
                        </div>
                        <div class="sorting-right col-lg-3 col-12">
                            <select class="uk-select">
                                <option value="https://rankbmx.com/urunler" selected="">Sondan Başa</option>
                                <option value="?sortBy=artan-tarih">Baştan Sona</option>
                                <option value="?sortBy=artan-alfabetik">Alfabetik A-Z</option>
                                <option value="?sortBy=azalan-alfabetik">Alfabetik Z-A</option>
                            </select>
                            <button class="d-md-flex d-none sorting-btn btn-list justify-content-center align-items-center" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class=" uk-svg" data-svg="/assets/img/icons/list.svg"><path fill="#222" d="M17.11 5.78H2.89A2.894 2.894 0 010 2.89 2.894 2.894 0 012.89-.002h14.22A2.894 2.894 0 0120 2.889a2.894 2.894 0 01-2.89 2.892zM2.89 1.563a1.33 1.33 0 000 2.656h14.22a1.33 1.33 0 000-2.656zM17.11 12.89H2.89A2.894 2.894 0 010 10a2.894 2.894 0 012.89-2.892h14.22A2.894 2.894 0 0120 9.999a2.894 2.894 0 01-2.89 2.891zM2.89 8.671A1.33 1.33 0 001.563 10a1.33 1.33 0 001.329 1.328H17.11A1.33 1.33 0 0018.438 10a1.33 1.33 0 00-1.328-1.328zM17.11 20a.781.781 0 110-1.563 1.33 1.33 0 001.327-1.327 1.33 1.33 0 00-1.328-1.329H2.891a1.33 1.33 0 00-1.329 1.329 1.33 1.33 0 001.329 1.327h10.312a.782.782 0 010 1.563H2.891A2.894 2.894 0 010 17.11a2.893 2.893 0 012.89-2.89h14.22A2.893 2.893 0 0120 17.11 2.894 2.894 0 0117.11 20z"></path></svg>
                            </button>
                            <button class="d-md-flex d-none sorting-btn btn-grid is-active justify-content-center align-items-center" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class=" uk-svg" data-svg="/assets/img/icons/grid.svg"><path fill="#fff" d="M16.875 9.218h-2.969a3.128 3.128 0 01-3.125-3.125V3.124A3.129 3.129 0 0113.906 0h2.969A3.129 3.129 0 0120 3.124v2.969a3.128 3.128 0 01-3.125 3.125zm-2.969-7.656c-.861 0-1.562.7-1.562 1.562v2.969c0 .861.7 1.562 1.562 1.562h2.969c.861 0 1.562-.7 1.562-1.562V3.124c0-.861-.7-1.562-1.562-1.562zM6.094 9.218H3.125A3.128 3.128 0 010 6.093V3.124A3.129 3.129 0 013.125 0h2.969a3.129 3.129 0 013.125 3.125v2.969a3.128 3.128 0 01-3.125 3.125zM3.125 1.562c-.862 0-1.563.7-1.563 1.562v2.969c0 .861.701 1.562 1.563 1.562h2.969c.861 0 1.562-.7 1.562-1.562V3.124c0-.861-.7-1.562-1.562-1.562zm2.969 18.437H3.125A3.129 3.129 0 010 16.874v-2.969a3.128 3.128 0 013.125-3.125h2.969a3.128 3.128 0 013.125 3.125v2.969a3.129 3.129 0 01-3.125 3.125zm-2.969-7.656c-.862 0-1.563.7-1.563 1.562v2.969c0 .861.701 1.562 1.563 1.562h2.969c.861 0 1.562-.7 1.562-1.562v-2.969c0-.861-.7-1.562-1.562-1.562zm13.75 7.656h-2.969a3.129 3.129 0 01-3.125-3.125v-2.969a3.128 3.128 0 013.125-3.125h2.969c1.242 0 2.366.736 2.864 1.874a.781.781 0 01-1.431.626 1.563 1.563 0 00-1.433-.937h-2.969c-.861 0-1.562.7-1.562 1.562v2.969c0 .861.7 1.562 1.562 1.562h2.969c.861 0 1.562-.7 1.562-1.562a.781.781 0 011.563 0 3.129 3.129 0 01-3.125 3.125z"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="row card-control">
                    <li class="col-md-6 col-12 p-3">
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
                    </li>
                    <li class="col-md-6 col-12 p-3">
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
                    </li>
                    <li class="col-md-6 col-12 p-3">
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
                    </li>
                    <li class="col-md-6 col-12 p-3">
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
                    </li>
                    <li class="col-md-6 col-12 p-3">
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

