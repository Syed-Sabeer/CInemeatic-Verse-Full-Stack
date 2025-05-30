@extends('frontend.layouts.main')
@section('main-container')


<div class="iq-banner-thumb-slider">
    <div class="slider">
      <div class="position-relative slider-bg d-flex justify-content-end">
        <div class="position-relative my-auto">
          <div class="horizontal_thumb_slider" data-swiper="slider-thumbs-ott">
            <div class="banner-thumb-slider-nav">
              <div class="swiper-container " data-swiper="slider-thumbs-inner-ott">
                <div class="swiper-wrapper">
                  <div class="swiper-slide swiper-bg">
                    <div class="block-images position-relative ">
                      <div class="img-box">
                        <img src="assets/images/movies/ott1.html" class="img-fluid" alt="" loading="lazy">
                        <div class="block-description ps-3">
                          <h6 class="iq-title fw-500 mb-0">The Hunter</h6>
                          <span class="fs-12">2 hr 6 minute</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide swiper-bg">
                    <div class="block-images position-relative ">
                      <div class="img-box">
                        <img src="assets/images/movies/ott2.html" class="img-fluid" alt="" loading="lazy">
                        <div class="block-description">
                          <h6 class="iq-title fw-500 mb-0">The Mandalorian</h6>
                          <span class="fs-12">2 hr 14 minute</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide swiper-bg">
                    <div class="block-images position-relative ">
                      <div class="img-box">
                        <img src="assets/images/movies/ott3.html" class="img-fluid" alt="" loading="lazy">
                        <div class="block-description">
                          <h6 class="iq-title fw-500 mb-0">Better call saul</h6>
                          <span class="fs-12">2 hr 55 minute</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slider-prev swiper-button">
                <i class="iconly-Arrow-Left-2 icli"></i>
              </div>
              <div class="slider-next swiper-button">
                <i class="iconly-Arrow-Right-2 icli"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-images" data-swiper="slider-images-ott">
          <div class="swiper-container" data-swiper="slider-images-inner-ott">
            <div class="swiper-wrapper m-0">
              <div class="swiper-slide p-0">
                <div class="slider--image block-images">
                  <img src="assets/images/movies/ott1.html" loading="lazy" alt="banner" />
                </div>
                <div class="description">
                  <div class="row align-items-center h-100">
                    <div class="col-lg-6 col-md-12">
                      <div class="slider-content">
                        <div class="d-flex align-items-center RightAnimate mb-3">
                          <span class="badge rounded-0 text-dark text-uppercase px-3 py-2 me-3 bg-white mr-3">Pg</span>
                          <ul class="p-0 mb-0 list-inline d-flex flex-wrap align-items-center movie-tag">
                            <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                              <a href="view-all-movie.html" class="text-decoration-none">Adventure</a>
                            </li>
                            <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                              <a href="view-all-movie.html" class="text-decoration-none">Thriller</a>
                            </li>
                            <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                              <a href="view-all-movie.html" class="text-decoration-none">Drama</a>
                            </li>
                          </ul>
                        </div>
                        <h1 class="texture-text big-font letter-spacing-1 line-count-1 text-capitalize RightAnimate-two"> The Hunter </h1>
                        <p class="line-count-3 RightAnimate-two">After the death of their father, two siblings fight for the throne, thereby causing a civil war known as the Dance of the Dragons. Rhaenyra tries to hold the realm together as the tension rises following a tragic loss. Meanwhile, Daemon prepares for war.</p>
                        <div class="d-flex flex-wrap align-items-center gap-3 RightAnimate-three">
                          <div class="slider-ratting d-flex align-items-center">
                            <ul class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                              <li>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                            </ul>
                            <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                            <span class="ms-2">
                              <img src="assets/images/movies/imdb-logo.svg" alt="imdb logo" class="img-fluid">
                            </span>
                          </div>
                          <span class="font-size-14 fw-500">2 Hr : 6 Mins</span>
                          <div class="text-primary font-size-14 fw-500 text-capitalize">genres: <a href="view-all-movie.html" class="text-decoration-none ms-1">Drama</a>
                          </div>
                          <div class="text-primary font-size-14 fw-500 text-capitalize">Starting: <a href="person-detail.html" class="text-decoration-none ms-1">Jeffrey Silver</a>
                          </div>
                        </div>
                      </div>
                      <div class="RightAnimate-four">
                        <div class="iq-button">
                            <a href="movie-detail.html" class="btn text-uppercase position-relative">
                                <span class="button-text">stream now</span>
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide p-0">
                <div class="slider--image block-images">
                  <img src="assets/images/movies/ott2.html" loading="lazy" alt="" />
                </div>
                <div class="description">
                  <div class="row align-items-center h-100">
                    <div class="col-lg-6 col-md-12">
                      <div class="slider-content">
                        <div class="d-flex align-items-center RightAnimate mb-3">
                          <span class="badge rounded-0 text-dark text-uppercase px-3 py-2 me-3 bg-white mr-3">NC-17</span>
                          <ul class="p-0 mb-0 list-inline d-flex flex-wrap align-items-center movie-tag">
                            <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                              <a href="view-all-movie.html" class="text-decoration-none">Animation</a>
                            </li>
                            <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                              <a href="view-all-movie.html" class="text-decoration-none">Sci-Fi</a>
                            </li>
                            <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                              <a href="view-all-movie.html" class="text-decoration-none">Action</a>
                            </li>
                          </ul>
                        </div>
                        <h1 class="texture-text big-font letter-spacing-1 line-count-1 text-capitalize RightAnimate-two"> The Mandalorian </h1>
                        <p class="line-count-3 RightAnimate-two">After the fall of the Galactic Empire, a lone gunfighter makes his way through the outer reaches of the lawless galaxy he show follows the adventures of a lone Mandalorian bounty hunter, Din Djarin, as he navigates the outer reaches of the galaxy, far from the authority of the New Republic.</p>
                        <div class="d-flex flex-wrap align-items-center gap-3 RightAnimate-three">
                          <div class="slider-ratting d-flex align-items-center">
                            <ul class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                              <li>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                            </ul>
                            <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                          </div>
                          <span class="font-size-14 fw-500">2 Hr : 14 Mins</span>
                          <div class="text-primary font-size-14 fw-500 text-capitalize">genres: <a href="view-all-movie.html" class="text-decoration-none ms-1">Sci-Fi</a>
                          </div>
                          <div class="text-primary font-size-14 fw-500 text-capitalize">Starting:
                            <a href="person-detail.html" class="text-decoration-none ms-1">James Chinlund</a>
                          </div>
                        </div>
                      </div>
                      <div class="RightAnimate-four">
                        <div class="iq-button">
                            <a href="movie-detail.html" class="btn text-uppercase position-relative">
                                <span class="button-text">stream now</span>
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide p-0">
                <div class="slider--image block-images">
                  <img src="assets/images/movies/ott3.html" loading="lazy" alt="" />
                </div>
                <div class="description">
                  <div class="row align-items-center h-100">
                    <div class="col-lg-6 col-md-12">
                      <div class="slider-content">
                        <div class="d-flex align-items-center RightAnimate mb-3">
                          <span class="badge rounded-0 text-dark text-uppercase px-3 py-2 me-3 bg-white mr-3">G</span>
                          <ul class="p-0 mb-0 list-inline d-flex flex-wrap align-items-center movie-tag">
                            <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                              <a href="view-all-movie.html" class="text-decoration-none">History</a>
                            </li>
                            <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                              <a href="view-all-movie.html" class="text-decoration-none">Action</a>
                            </li>
                          </ul>
                        </div>
                        <h1 class="texture-text big-font letter-spacing-1 line-count-1 text-capitalize RightAnimate-two"> Better call saul </h1>
                        <p class="line-count-3 RightAnimate-two">Ex-con artist Jimmy McGill turns into a small-time attorney and goes through a series of trials and tragedies, as he transforms into his alter ego Saul Goodman, a morally challenged criminal lawyer.</p>
                        <div class="d-flex flex-wrap align-items-center gap-3 RightAnimate-three">
                          <div class="slider-ratting d-flex align-items-center">
                            <ul class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                              <li>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </li>
                            </ul>
                          </div>
                          <span class="font-size-14 fw-500">2 Hr : 55 Mins</span>
                          <div class="text-primary font-size-14 fw-500 text-capitalize">genres: <a href="view-all-movie.html" class="text-decoration-none ms-1">horror</a>
                          </div>
                          <div class="text-primary font-size-14 fw-500 text-capitalize">Starting: <a href="#" class="text-decoration-none ms-1">Brenda Chapman</a>
                            <span class="text-body">,</span>
                            <a href="person-detail.html" class="text-decoration-none ms-1">Caleb Deschannelr</a>
                          </div>
                        </div>
                      </div>
                      <div class="RightAnimate-four">
                        <div class="iq-button">
                            <a href="movie-detail.html" class="btn text-uppercase position-relative">
                                <span class="button-text">stream now</span>
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="continue-watching-block section-padding-top">
    <div class="container-fluid">
      <div class="overflow-hidden">
        <div class="d-flex align-items-center justify-content-between px-md-3 px-1 mb-4">
        <h5 class="main-title text-capitalize mb-0">continue watching</h5>
        </div>
        <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3" data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
          <ul class="p-0 swiper-wrapper m-0  list-inline">
            <li class="swiper-slide">
              <div class="iq-watching-block">
                  <div class="block-images position-relative">
                      <div class="iq-image-box overly-images">
                          <a href="movie-detail.html" class="d-block">
                              <img src="assets/images/continue-watch/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                          </a>
                      </div>
                      <div class="iq-preogress">
                          <span class="data-left-timing font-size-14 fw-500 text-lowercase">70 of 230 m</span>
                          <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                              <div class="progress-bar" style="width: 50%"></div>
                          </div>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-watching-block">
                  <div class="block-images position-relative">
                      <div class="iq-image-box overly-images">
                          <a href="movie-detail.html" class="d-block">
                              <img src="assets/images/continue-watch/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                          </a>
                      </div>
                      <div class="iq-preogress">
                          <span class="data-left-timing font-size-14 fw-500 text-lowercase">120 of 130 m</span>
                          <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                              <div class="progress-bar" style="width: 30%"></div>
                          </div>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-watching-block">
                  <div class="block-images position-relative">
                      <div class="iq-image-box overly-images">
                          <a href="movie-detail.html" class="d-block">
                              <img src="assets/images/continue-watch/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                          </a>
                      </div>
                      <div class="iq-preogress">
                          <span class="data-left-timing font-size-14 fw-500 text-lowercase">60 of 134 m</span>
                          <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                              <div class="progress-bar" style="width: 90%"></div>
                          </div>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-watching-block">
                  <div class="block-images position-relative">
                      <div class="iq-image-box overly-images">
                          <a href="movie-detail.html" class="d-block">
                              <img src="assets/images/continue-watch/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                          </a>
                      </div>
                      <div class="iq-preogress">
                          <span class="data-left-timing font-size-14 fw-500 text-lowercase">60 of 134 m</span>
                          <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                              <div class="progress-bar" style="width: 20%"></div>
                          </div>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-watching-block">
                  <div class="block-images position-relative">
                      <div class="iq-image-box overly-images">
                          <a href="movie-detail.html" class="d-block">
                              <img src="assets/images/continue-watch/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                          </a>
                      </div>
                      <div class="iq-preogress">
                          <span class="data-left-timing font-size-14 fw-500 text-lowercase">45 of 157 m</span>
                          <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                              <div class="progress-bar" style="width: 100%"></div>
                          </div>
                      </div>
                  </div>
              </div>          </li>
             <li class="swiper-slide">
              <div class="iq-watching-block">
                  <div class="block-images position-relative">
                      <div class="iq-image-box overly-images">
                          <a href="movie-detail.html" class="d-block">
                              <img src="assets/images/continue-watch/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                          </a>
                      </div>
                      <div class="iq-preogress">
                          <span class="data-left-timing font-size-14 fw-500 text-lowercase">70 of 230 m</span>
                          <div class="progress" role="progressbar" aria-label="Example 2px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                              <div class="progress-bar" style="width: 100%"></div>
                          </div>
                      </div>
                  </div>
              </div>          </li>
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </section>

  <div class="top-ten-block">
    <div class="container-fluid">
      <section class="overflow-hidden">
        <div class="d-flex align-items-center justify-content-between px-md-3 px-1 mb-4">
        <h5 class="main-title text-capitalize mb-0">top ten movies to watch</h5>
        <a href="view-all-movie.html" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
        </div>
        <div class="position-relative swiper swiper-card iq-top-ten-block-slider" data-slide="6" data-laptop="6" data-tab="3" data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
          <ul class="p-0 swiper-wrapper mb-5 list-inline">
            <li class="swiper-slide">
              <div class="iq-top-ten-block">
                  <div class="block-image position-relative">
                      <div class="img-box">
                          <a class="overly-images" href="movie-detail.html">
                              <img src="assets/images/top-ten-number/01.html" alt="movie-card" class="img-fluid object-cover">
                          </a>
                          <span class="top-ten-numbers texture-text">1</span>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-top-ten-block">
                  <div class="block-image position-relative">
                      <div class="img-box">
                          <a class="overly-images" href="movie-detail.html">
                              <img src="assets/images/top-ten-number/02.html" alt="movie-card" class="img-fluid object-cover">
                          </a>
                          <span class="top-ten-numbers texture-text">2</span>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-top-ten-block">
                  <div class="block-image position-relative">
                      <div class="img-box">
                          <a class="overly-images" href="movie-detail.html">
                              <img src="assets/images/top-ten-number/03.html" alt="movie-card" class="img-fluid object-cover">
                          </a>
                          <span class="top-ten-numbers texture-text">3</span>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-top-ten-block">
                  <div class="block-image position-relative">
                      <div class="img-box">
                          <a class="overly-images" href="movie-detail.html">
                              <img src="assets/images/top-ten-number/04.html" alt="movie-card" class="img-fluid object-cover">
                          </a>
                          <span class="top-ten-numbers texture-text">4</span>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-top-ten-block">
                  <div class="block-image position-relative">
                      <div class="img-box">
                          <a class="overly-images" href="movie-detail.html">
                              <img src="assets/images/top-ten-number/05.html" alt="movie-card" class="img-fluid object-cover">
                          </a>
                          <span class="top-ten-numbers texture-text">5</span>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-top-ten-block">
                  <div class="block-image position-relative">
                      <div class="img-box">
                          <a class="overly-images" href="movie-detail.html">
                              <img src="assets/images/top-ten-number/06.html" alt="movie-card" class="img-fluid object-cover">
                          </a>
                          <span class="top-ten-numbers texture-text">6</span>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-top-ten-block">
                  <div class="block-image position-relative">
                      <div class="img-box">
                          <a class="overly-images" href="movie-detail.html">
                              <img src="assets/images/top-ten-number/07.html" alt="movie-card" class="img-fluid object-cover">
                          </a>
                          <span class="top-ten-numbers texture-text">7</span>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-top-ten-block">
                  <div class="block-image position-relative">
                      <div class="img-box">
                          <a class="overly-images" href="movie-detail.html">
                              <img src="assets/images/top-ten-number/08.html" alt="movie-card" class="img-fluid object-cover">
                          </a>
                          <span class="top-ten-numbers texture-text">8</span>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-top-ten-block">
                  <div class="block-image position-relative">
                      <div class="img-box">
                          <a class="overly-images" href="movie-detail.html">
                              <img src="assets/images/top-ten-number/09.html" alt="movie-card" class="img-fluid object-cover">
                          </a>
                          <span class="top-ten-numbers texture-text">9</span>
                      </div>
                  </div>
              </div>          </li>
            <li class="swiper-slide">
              <div class="iq-top-ten-block">
                  <div class="block-image position-relative">
                      <div class="img-box">
                          <a class="overly-images" href="movie-detail.html">
                              <img src="assets/images/top-ten-number/10.html" alt="movie-card" class="img-fluid object-cover">
                          </a>
                          <span class="top-ten-numbers texture-text">10</span>
                      </div>
                  </div>
              </div>          </li>
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
        </div>
      </section>
    </div>
  </div>

  <div class="streamit-block">
    <div class="container-fluid">
      <div class="overflow-hidden">
        <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
        <h5 class="main-title text-capitalize mb-0">Only on Streamit</h5>
        <a href="view-all-movie.html" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
        </div>
        <div class="card-style-slider">
          <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3" data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
            <ul class="p-0 swiper-wrapper m-0  list-inline">
              <li class="swiper-slide">
                  <div class="iq-card card-hover">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">giikre</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">2hr : 12mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
              <li class="swiper-slide">
                  <div class="iq-card card-hover">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">YoShi</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">1hr : 22mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
              <li class="swiper-slide">
                  <div class="iq-card card-hover">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">We Gare</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">1hr : 30mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
              <li class="swiper-slide">
                  <div class="iq-card card-hover">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">Avengers</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">1hr : 45mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
              <li class="swiper-slide">
                  <div class="iq-card card-hover">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">Chosfies</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">1hr : 30mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
              <li class="swiper-slide">
                  <div class="iq-card card-hover">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">Tf Oaler</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">1hr : 30mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
              <li class="swiper-slide">
                  <div class="iq-card card-hover">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">Another Danger</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">1hr : 30mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
            </ul>
            <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="streamit-card-height-block d-none">
    <div class="container-fluid">
      <div class="overflow-hidden">
        <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
        <h5 class="main-title text-capitalize mb-0">Only on Streamit</h5>
        <a href="view-all-movie.html" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
        </div>
        <div class="card-style-slider">
          <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3" data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
            <ul class="p-0 swiper-wrapper m-0  list-inline">
              <li class="swiper-slide">
                  <div class="iq-card card-hover iq-card-style-2">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">giikre</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">2hr : 12mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
              <li class="swiper-slide">
                  <div class="iq-card card-hover iq-card-style-2">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">YoShi</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">1hr : 22mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
              <li class="swiper-slide">
                  <div class="iq-card card-hover iq-card-style-2">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">We Gare</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">1hr : 30mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
              <li class="swiper-slide">
                  <div class="iq-card card-hover iq-card-style-2">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">Avengers</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">2hr : 38mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
              <li class="swiper-slide">
                  <div class="iq-card card-hover iq-card-style-2">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">Chosfies</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">2hr : 10mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
              <li class="swiper-slide">
                  <div class="iq-card card-hover iq-card-style-2">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">Tf Oaler</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">1hr : 40mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
              <li class="swiper-slide">
                  <div class="iq-card card-hover iq-card-style-2">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/related/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">Another Danger</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">1hr : 40mins</span>
                            </div>
                          </div>
                          <div class="watchlist">
                            <a class="watch-list-not" href="playlist.html">
                              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span class="watchlist-label"> Watchlist </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="block-social-info align-items-center">
                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fas fa-share-alt"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                  </a>
                                  <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                  <a href="#">
                                    <i class="fas fa-link"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="share position-relative d-flex align-items-center text-center mb-0">
                            <span class="w-100 h-100 d-inline-block bg-transparent">
                              <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="share-wrapper">
                              <div class="share-boxs d-inline-block">
                                <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                </svg>
                                <div class=" overflow-hidden">
                                  <span>+51</span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                            <i class="fa-solid fa-play ms-0"></i>
                          </a>
                      </div>
                      </div>
                    </div>
                  </div>


              </li>
            </ul>
            <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="verticle-slider section-padding-bottom">
     <div class="slider">
        <div class="slider-flex position-relative">
           <div class="slider--col position-relative">
              <div class="vertical-slider-prev swiper-button"><i class="iconly-Arrow-Up-2 icli"></i></div>
              <div class="slider-thumbs" data-swiper="slider-thumbs">
                 <div class="swiper-container " data-swiper="slider-thumbs-inner">
                    <div class="swiper-wrapper top-ten-slider-nav">
                       <div class="swiper-slide swiper-bg">
                          <div class="block-images position-relative ">
                             <div class="img-box slider--image">
                                <img src="assets/images/top-10/01.html" class="img-fluid" alt=""
                                   loading="lazy">
                             </div>
                             <div class="block-description">
                                <h6 class="iq-title"><a href="tv-show-detail.html">lostti n sacee</a></h6>
                                <div class="movie-time d-flex align-items-center my-2">
                                   <span class="text-body">2 hr 30 minute</span>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="swiper-slide swiper-bg">
                          <div class="block-images position-relative ">
                             <div class="img-box slider--image">
                                <img src="assets/images/top-10/02.html" class="img-fluid" alt=""
                                   loading="lazy">
                             </div>
                             <div class="block-description">
                                <h6 class="iq-title"><a href="tv-show-detail.html">Ret Seap</a></h6>
                                <div class="movie-time d-flex align-items-center my-2">
                                   <span class="text-body">3 hr 0 minute</span>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="swiper-slide swiper-bg">
                          <div class="block-images position-relative">
                             <div class="img-box slider--image">
                                <img src="assets/images/top-10/03.html" class="img-fluid" alt=""
                                   loading="lazy">
                             </div>
                             <div class="block-description">
                                <h6 class="iq-title"><a href="tv-show-detail.html">X-Men</a></h6>
                                <div class="movie-time d-flex align-items-center my-2">
                                   <span class="text-body">1hr : 45mins</span>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="swiper-slide swiper-bg">
                          <div class="block-images position-relative">
                             <div class="img-box slider--image">
                                <img src="assets/images/top-10/04.html" class="img-fluid" alt=""
                                   loading="lazy">
                             </div>
                             <div class="block-description">
                                <h6 class="iq-title"><a href="tv-show-detail.html">Logan</a></h6>
                                <div class="movie-time d-flex align-items-center my-2">
                                   <span class="text-body">1hr : 22mins</span>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="swiper-slide swiper-bg">
                          <div class="block-images position-relative">
                             <div class="img-box slider--image">
                                <img src="assets/images/top-10/05.html" class="img-fluid" alt=""
                                   loading="lazy">
                             </div>
                             <div class="block-description">
                                <h6 class="iq-title"><a href="tv-show-detail.html">Black Queen</a></h6>
                                <div class="movie-time d-flex align-items-center my-2">
                                   <span class="text-body">1h 45mins</span>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="vertical-slider-next swiper-button"><i class="iconly-Arrow-Down-2 icli"></i></div>
           </div>
           <div class="slider-images" data-swiper="slider-images">
              <div class="swiper-container " data-swiper="slider-images-inner">
                 <div class="swiper-wrapper ">
                    <div class="swiper-slide">
                       <div class="slider--image block-images"><img src="assets/images/top-10/01.html"
                          loading="lazy" alt="" /></div>
                       <div class="description">
                          <div class="block-description">
                             <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Comedy</a>
                                </li>
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Romance</a>
                                </li>
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Action</a>
                                </li>
                             </ul>
                             <h2 class="iq-title mb-3"><a href="tv-show-detail.html">lostti n sacee</a></h2>
                             <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="slider-ratting d-flex align-items-center">
                                   <ul class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                      <li>
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                   </ul>
                                   <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                </div>
                                <span class="text-body">2hr : 30mins</span>
                             </div>
                             <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                             <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative">
                                     <span class="button-text">play now</span>
                                     <i class="fa-solid fa-play"></i>
                                 </a>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="swiper-slide">
                       <div class="slider--image block-images"><img src="assets/images/top-10/02.html"
                          loading="lazy" alt="" /></div>
                       <div class="description">
                          <div class="block-description">
                             <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Comedy</a>
                                </li>
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Romance</a>
                                </li>
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Action</a>
                                </li>
                             </ul>
                             <h2 class="iq-title mb-3"><a href="tv-show-detail.html">Ret Seap</a></h2>
                             <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="slider-ratting d-flex align-items-center">
                                   <ul class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                      <li>
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                   </ul>
                                   <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                </div>
                                <span class="text-body">3hr : 0mins</span>
                             </div>
                             <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                             <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative">
                                     <span class="button-text">play now</span>
                                     <i class="fa-solid fa-play"></i>
                                 </a>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="swiper-slide">
                       <div class="slider--image block-images"><img src="assets/images/top-10/03.html"
                          loading="lazy" alt="" /></div>
                       <div class="description">
                          <div class="block-description">
                             <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Comedy</a>
                                </li>
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Romance</a>
                                </li>
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Action</a>
                                </li>
                             </ul>
                             <h2 class="iq-title mb-3"><a href="tv-show-detail.html">X Men</a></h2>
                             <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="slider-ratting d-flex align-items-center">
                                   <ul class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                      <li>
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                   </ul>
                                   <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                </div>
                                <span class="text-body">1hr : 45mins</span>
                             </div>
                             <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                             <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative">
                                     <span class="button-text">play now</span>
                                     <i class="fa-solid fa-play"></i>
                                 </a>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="swiper-slide">
                       <div class="slider--image block-images"><img src="assets/images/top-10/04.html"
                          loading="lazy" alt="" /></div>
                       <div class="description">
                          <div class="block-description">
                             <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Comedy</a>
                                </li>
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Romance</a>
                                </li>
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Action</a>
                                </li>
                             </ul>
                             <h2 class="iq-title mb-3"><a href="tv-show-detail.html">Logan</a></h2>
                             <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="slider-ratting d-flex align-items-center">
                                   <ul class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                      <li>
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                   </ul>
                                   <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                </div>
                                <span class="text-body">1hr : 22mins</span>
                             </div>
                             <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                             <div class="iq-button">
                                 <a href="#" class="btn text-uppercase position-relative">
                                     <span class="button-text">play now</span>
                                     <i class="fa-solid fa-play"></i>
                                 </a>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="swiper-slide">
                       <div class="slider--image block-images"><img src="assets/images/top-10/05.html"
                          loading="lazy" alt="" /></div>
                       <div class="description">
                          <div class="block-description">
                             <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Comedy</a>
                                </li>
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Romance</a>
                                </li>
                                <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                   <a href="view-all-movie.html" class="text-white text-decoration-none">Action</a>
                                </li>
                             </ul>
                             <h2 class="iq-title mb-3"><a href="tv-show-detail.html">Black Queen</a></h2>
                             <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="slider-ratting d-flex align-items-center">
                                   <ul class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                      <li>
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                      </li>
                                   </ul>
                                   <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                </div>
                                <span class="text-body">1hr : 45mins</span>
                             </div>
                             <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                             <div class="iq-button">
                                 <a href="video-detail.html" class="btn text-uppercase position-relative">
                                     <span class="button-text">play now</span>
                                     <i class="fa-solid fa-play"></i>
                                 </a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>

  <div class="favourite-person-block">
     <div class="container-fluid">
        <section class="overflow-hidden">
           <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
              <h5 class="main-title text-capitalize mb-0">your favourite personality</h5>
              <a href="all-personality.html" class="text-primary iq-view-all text-decoration-none">View All</a>
           </div>
           <div class="position-relative swiper swiper-card" data-slide="11" data-laptop="11" data-tab="4" data-mobile="2"
              data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
              <ul class="p-0 swiper-wrapper m-0  list-inline personality-card">
                 <li class="swiper-slide">
                    <img src="assets/images/cast/01.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                    <div class="text-center">
                        <h6 class="mb-0">
                            <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">john Abraham</a>
                        </h6>
                        <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actor</a>
                    </div>               </li>
                 <li class="swiper-slide">
                    <img src="assets/images/cast/02.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                    <div class="text-center">
                        <h6 class="mb-0">
                            <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Leena burton</a>
                        </h6>
                        <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                    </div>               </li>
                 <li class="swiper-slide">
                    <img src="assets/images/cast/03.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                    <div class="text-center">
                        <h6 class="mb-0">
                            <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Lorina williams </a>
                        </h6>
                        <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                    </div>               </li>
                 <li class="swiper-slide">
                    <img src="assets/images/cast/04.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                    <div class="text-center">
                        <h6 class="mb-0">
                            <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Davina decorous</a>
                        </h6>
                        <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                    </div>               </li>
                 <li class="swiper-slide">
                    <img src="assets/images/cast/05.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                    <div class="text-center">
                        <h6 class="mb-0">
                            <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Thomas bailey</a>
                        </h6>
                        <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">producer</a>
                    </div>               </li>
                 <li class="swiper-slide">
                    <img src="assets/images/cast/06.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                    <div class="text-center">
                        <h6 class="mb-0">
                            <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Kelly Reilly</a>
                        </h6>
                        <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                    </div>               </li>
                 <li class="swiper-slide">
                    <img src="assets/images/cast/07.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                    <div class="text-center">
                        <h6 class="mb-0">
                            <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">smith Jonas</a>
                        </h6>
                        <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">director</a>
                    </div>               </li>
                 <li class="swiper-slide">
                    <img src="assets/images/cast/08.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                    <div class="text-center">
                        <h6 class="mb-0">
                            <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">angel louis</a>
                        </h6>
                        <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">producer</a>
                    </div>               </li>
                 <li class="swiper-slide">
                    <img src="assets/images/cast/09.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                    <div class="text-center">
                        <h6 class="mb-0">
                            <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Millar joseph</a>
                        </h6>
                        <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actor</a>
                    </div>               </li>
                 <li class="swiper-slide">
                    <img src="assets/images/cast/10.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                    <div class="text-center">
                        <h6 class="mb-0">
                            <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">mark wilson</a>
                        </h6>
                        <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actor</a>
                    </div>               </li>
                 <li class="swiper-slide">
                    <img src="assets/images/cast/11.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                    <div class="text-center">
                        <h6 class="mb-0">
                            <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Kelley walker</a>
                        </h6>
                        <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">director</a>
                    </div>               </li>
                 <li class="swiper-slide">
                    <img src="assets/images/cast/12.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                    <div class="text-center">
                        <h6 class="mb-0">
                            <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Amy Sedaris</a>
                        </h6>
                        <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                    </div>               </li>
              </ul>
              <div class="swiper-button swiper-button-next"></div>
              <div class="swiper-button swiper-button-prev"></div>
           </div>
        </section>
     </div>
  </div>

  <div class="popular-movies-block">
     <div class="container-fluid">
        <section class="overflow-hidden">
           <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
              <h5 class="main-title text-capitalize mb-0">popular movies</h5>
              <a href="view-all-movie.html" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
           </div>
           <div class="card-style-slider">
              <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3" data-mobile="2"
                 data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
                 <ul class="p-0 swiper-wrapper m-0  list-inline">
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/popular/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">CRW</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">2hr : 12mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/popular/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Batte Wiire</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr : 22mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/popular/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Goal</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">2hr : 30mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/popular/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Dandacg</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr : 30mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/popular/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">mexcan</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr : 30mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/popular/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">oit moleld</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr : 30mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/popular/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Dragon Fire</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr : 30mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                 </ul>
                 <div class="swiper-button swiper-button-next"></div>
                 <div class="swiper-button swiper-button-prev"></div>
              </div>
           </div>
        </section>
     </div>
  </div>

  <section class="tranding-tab-slider section-padding">
    <div class="container-fluid">
       <div class="row m-0 p-0">
          <div id="iq-trending" class="s-margin iq-tvshow-tabs iq-trending-tabs overflow-hidden">
             <div class="d-flex align-items-center justify-content-between px-0 px-md-3">
                <h5 class="main-title text-capitalize mb-0">Trending</h5>
             </div>
             <div class="trending-contens position-relative ">
                <div id="gallery-top" class="swiper gallery-thumbs" data-swiper="gallery-top">
                   <ul class="swiper-wrapper list-inline p-0 m-0 trending-slider-nav align-items-center ">
                      <li class="swiper-slide">
                         <a href="javascript:void(0);">
                            <div class="movie-swiper position-relative">
                               <img src="assets/images/movies/ott1.html" alt="" />
                            </div>
                         </a>
                      </li>
                      <li class="swiper-slide">
                         <a href="javascript:void(0);">
                            <div class="movie-swiper position-relative">
                               <img src="assets/images/movies/ott2.html" alt="" />
                            </div>
                         </a>
                      </li>
                      <li class="swiper-slide">
                         <a href="javascript:void(0);">
                            <div class="movie-swiper position-relative">
                               <img src="assets/images/movies/ott3.html" alt="" />
                            </div>
                         </a>
                      </li>
                      <li class="swiper-slide">
                         <a href="javascript:void(0);">
                            <div class="movie-swiper position-relative">
                               <img src="assets/images/movies/banner1.html" alt="" />
                            </div>
                         </a>
                      </li>
                      <li class="swiper-slide">
                         <a href="javascript:void(0);" tabindex="0">
                            <div class="movie-swiper position-relative">
                               <img src="assets/images/movies/banner2.html" alt="" />
                            </div>
                         </a>
                      </li>
                      <li class="swiper-slide">
                         <a href="javascript:void(0);" tabindex="0">
                            <div class="movie-swiper position-relative">
                               <img src="assets/images/movies/banner3.html" alt="" />
                            </div>
                         </a>
                      </li>
                   </ul>
                </div>
                <div id="gallery-bottom" class="swiper trending-tab-slider" data-swiper="gallery-bottom">
                   <ul class="swiper-wrapper list-inline p-0 m-0 d-flex align-items-center trending-slider">
                      <li class="swiper-slide slider-big-img-1 p-0">
                         <div class="trending-tab-slider-image">
                            <img src="assets/images/movies/ott1.html" alt="trending-tab-slider-image">
                         </div>
                         <div class="tranding-block position-relative">
                            <div class="trending-custom-tab">
                               <div class="tab-title-info position-relative">
                                  <ul class="trending-pills iq-custom-tab d-flex nav nav-pills justify-content-center align-items-center text-center list-inline" id="trending-tab-1"
                                     role="tablist">
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="trending-data-tab-1" data-bs-toggle="pill" data-bs-target="#trending-data-1"
                                          aria-controls="trending-data-1" role="tab" aria-selected="true">Overview</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-2" data-bs-toggle="pill" data-bs-target="#trending-data-2"
                                           aria-controls="trending-data-2" role="tab" aria-selected="false">Episodes</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-3" data-bs-toggle="pill" data-bs-target="#trending-data-3"
                                           aria-controls="trending-data-3" role="tab" aria-selected="false">Trailers</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-4" data-bs-toggle="pill" data-bs-target="#trending-data-4"
                                           aria-controls="trending-data-4" role="tab" aria-selected="false">Similar Like This</a>
                                     </li>
                                  </ul>
                               </div>
                               <div class="tab-content trending-content" id="trending-tab-1-content">
                                  <div id="trending-data-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="trending-data-tab-1" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                        <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                        </h1>
                                        <div class="d-flex align-items-center text-white text-detail flex-wrap">
                                           <span>3 Seasons</span>
                                           <span class="trending-year">2023</span>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap series mb-4 gap-3">
                                           <a href="javascript:void(0);"><img
                                                 src="assets/images/movies/trending-label.html" class="img-fluid"
                                                 alt=""></a>
                                           <span class="text-gold">#2 in Series Today</span>
                                        </div>
                                        <p class="trending-dec line-count-3">The point of using Lorem Ipsum is that it
                                           has a more-or-less normal distribution of letters, as opposed to using
                                           'Content here.</p>
                                        <div class="p-btns">
                                           <div class="iq-button">
                                              <a href="tv-show-detail.html"
                                                 class="btn text-uppercase position-relative">
                                                 <span class="button-text">Play Now</span>
                                                 <i class="fa-solid fa-play"></i>
                                              </a>
                                           </div>
                                        </div>
                                        <div class="trending-list mt-4">
                                           <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                 Moura, Boyd Holbrook, Joanna</span>
                                           </div>
                                           <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                 Action, Thriller, Biography</span>
                                           </div>
                                           <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                 Forceful</span>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-2" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-2" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                        <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                        </h1>
                                        <div class="d-flex align-items-center text-white text-detail flex-wrap mb-4">
                                           <span class="season_date ms-2">
                                              2 Seasons
                                           </span>
                                           <span class="trending-year">Feb 2019</span>
                                        </div>
                                        <div class="iq-custom-select d-inline-block sea-epi mb-4">
                                           <select name="cars" class="form-control select2-basic-single js-states season-select">
                                              <option value="season1">Season 1</option>
                                              <option value="season2">Season 2</option>
                                              <option value="season3">Season 3</option>
                                           </select>
                                        </div>
                                        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                           data-tab="2" data-mobile="2" data-mobile-sm="1" data-autoplay="false"
                                           data-loop="false" data-navigation="true" data-pagination="true">
                                           <ul class="p-0 swiper-wrapper m-0  list-inline">
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/episodes/01.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E01</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 1, 2022</span>
                                                             <span class="text-primary run-time">45min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 1 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/episodes/02.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E02</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 8, 2022</span>
                                                             <span class="text-primary run-time">35min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 2 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/episodes/03.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E03</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 15, 2022</span>
                                                             <span class="text-primary run-time">36min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 3 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/episodes/04.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E04</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 4 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/episodes/05.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E05</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 5 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                           </ul>
                                           <div class="swiper-button swiper-button-next"></div>
                                           <div class="swiper-button swiper-button-prev"></div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-3" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-3" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction text-center">
                                        <h3 class="trending-text big-title text-uppercase texture-text mt-2">Watch
                                           Trailer</h3>
                                        <div class="episodes-contens mt-5">
                                           <div
                                              class="tab-watch-trailer-container d-inline-block rounded-3 overflow-hidden">
                                              <div class="tab-watch-trailer position-relative rounded-3 overflow-hidden">
                                                 <img src="assets/images/tv-show/season/01.html"
                                                    class="trailer-image" alt="trailer-image">
                                                 <a href="assets/images/video/trailer.mp4"
                                                    class="video-open playbtn text-decoration-none" tabindex="0">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                       xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                       width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                       enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                       <polygon class="triangle" fill="none" stroke-width="7"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10"
                                                          points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                       <circle class="circle" fill="none" stroke-width="7"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                       </circle>
                                                    </svg>
                                                    <span class="w-trailor text-uppercase"> Watch Trailer </span>
                                                 </a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-4" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-4" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                        <h3 class="trending-text big-title text-uppercase texture-text mb-5">Recommended
                                           For You</h3>
                                        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                           data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="false"
                                           data-loop="false" data-navigation="true" data-pagination="true">
                                           <ul class="p-0 swiper-wrapper m-0  list-inline">
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/02.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-2</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 1, 2022</span>
                                                             <span class="text-primary run-time">45min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 1 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/03.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-3</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 8, 2022</span>
                                                             <span class="text-primary run-time">35min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 2 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/04.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-4</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 15, 2022</span>
                                                             <span class="text-primary run-time">36min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 3 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/05.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-5</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 4 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/06.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-6</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 5 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                           </ul>
                                           <div class="swiper-button swiper-button-next"></div>
                                           <div class="swiper-button swiper-button-prev"></div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                      <li class="swiper-slide slider-big-img-2">
                         <div class="trending-tab-slider-image">
                            <img src="assets/images/movies/ott2.html" alt="trending-tab-slider-image">
                         </div>
                         <div class="tranding-block position-relative">
                            <div class="trending-custom-tab">
                               <div class="tab-title-info position-relative">
                                  <ul class="trending-pills iq-custom-tab d-flex nav nav-pills justify-content-center align-items-center text-center list-inline" id="trending-tab-2"
                                     role="tablist">
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="trending-data-tab-5" data-bs-toggle="pill" data-bs-target="#trending-data-5"
                                          aria-controls="trending-data-5" role="tab" aria-selected="true">Overview</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-6" data-bs-toggle="pill" data-bs-target="#trending-data-6"
                                           aria-controls="trending-data-6" role="tab" aria-selected="false">Episodes</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-7" data-bs-toggle="pill" data-bs-target="#trending-data-7"
                                           aria-controls="trending-data-7" role="tab" aria-selected="false">Trailers</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-8" data-bs-toggle="pill" data-bs-target="#trending-data-8"
                                           aria-controls="trending-data-8" role="tab" aria-selected="false">Similar Like This</a>
                                     </li>
                                  </ul>
                               </div>
                               <div class="tab-content trending-content" id="trending-tab-2-content">
                                  <div id="trending-data-5" class="tab-pane fade show active" role="tabpanel" aria-labelledby="trending-data-tab-5" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                        <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                        </h1>
                                        <div class="d-flex align-items-center text-white text-detail flex-wrap">
                                           <span>3 Seasons</span>
                                           <span class="trending-year">2023</span>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap series mb-4 gap-3">
                                           <a href="javascript:void(0);"><img
                                                 src="assets/images/movies/trending-label.html" class="img-fluid"
                                                 alt=""></a>
                                           <span class="text-gold">#2 in Series Today</span>
                                        </div>
                                        <p class="trending-dec line-count-3">The point of using Lorem Ipsum is that it
                                           has a more-or-less normal distribution of letters, as opposed to using
                                           'Content here.</p>
                                        <div class="p-btns">
                                           <div class="iq-button">
                                              <a href="tv-show-detail.html"
                                                 class="btn text-uppercase position-relative">
                                                 <span class="button-text">Play Now</span>
                                                 <i class="fa-solid fa-play"></i>
                                              </a>
                                           </div>
                                        </div>
                                        <div class="trending-list mt-4">
                                           <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                 Moura, Boyd Holbrook, Joanna</span>
                                           </div>
                                           <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                 Action, Thriller, Biography</span>
                                           </div>
                                           <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                 Forceful</span>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-6" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-6" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                        <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                        </h1>
                                        <div class="d-flex align-items-center text-white text-detail flex-wrap mb-4">
                                           <span class="season_date ms-2">
                                              2 Seasons
                                           </span>
                                           <span class="trending-year">Feb 2019</span>
                                        </div>
                                        <div class="iq-custom-select d-inline-block sea-epi mb-4">
                                           <select name="cars" class="form-control season-select select2-basic-single js-states">
                                              <option value="season1">Season 1</option>
                                              <option value="season2">Season 2</option>
                                              <option value="season3">Season 3</option>
                                           </select>
                                        </div>
                                        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                           data-tab="2" data-mobile="2" data-mobile-sm="1" data-autoplay="false"
                                           data-loop="false" data-navigation="true" data-pagination="true">
                                           <ul class="p-0 swiper-wrapper m-0  list-inline">
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/01.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E01</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 1, 2022</span>
                                                             <span class="text-primary run-time">45min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 1 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/02.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E02</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 8, 2022</span>
                                                             <span class="text-primary run-time">35min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 2 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/03.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E03</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 15, 2022</span>
                                                             <span class="text-primary run-time">36min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 3 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/04.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E04</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 4 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/05.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E05</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 5 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                           </ul>
                                           <div class="swiper-button swiper-button-next"></div>
                                           <div class="swiper-button swiper-button-prev"></div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-7" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-7" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction text-center">
                                        <h3 class="trending-text big-title text-uppercase texture-text mt-2">Watch
                                           Trailer</h3>
                                        <div class="episodes-contens mt-5">
                                           <div
                                              class="tab-watch-trailer-container d-inline-block rounded-3 overflow-hidden">
                                              <div class="tab-watch-trailer position-relative rounded-3 overflow-hidden">
                                                 <img src="assets/images/tv-show/episodes/01.html"
                                                    class="trailer-image" alt="trailer-image">
                                                 <a href="assets/images/video/trailer.mp4"
                                                    class="video-open playbtn text-decoration-none" tabindex="0">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                       xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                       width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                       enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                       <polygon class="triangle" fill="none" stroke-width="7"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10"
                                                          points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                       <circle class="circle" fill="none" stroke-width="7"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                       </circle>
                                                    </svg>
                                                    <span class="w-trailor text-uppercase"> Watch Trailer </span>
                                                 </a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-8" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-8" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                        <h3 class="trending-text big-title text-uppercase texture-text mb-5">Recommended
                                           For You</h3>
                                        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                           data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="false"
                                           data-loop="false" data-navigation="true" data-pagination="true">
                                           <ul class="p-0 swiper-wrapper m-0  list-inline">
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/ott2.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-2</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 1, 2022</span>
                                                             <span class="text-primary run-time">45min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 1 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/ott3.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-3</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 8, 2022</span>
                                                             <span class="text-primary run-time">35min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 2 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/banner1.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-4</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 15, 2022</span>
                                                             <span class="text-primary run-time">36min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 3 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/banner2.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-5</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 4 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/banner3.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-6</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 5 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                           </ul>
                                           <div class="swiper-button swiper-button-next"></div>
                                           <div class="swiper-button swiper-button-prev"></div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                      <li class="swiper-slide slider-big-img-3">
                         <div class="trending-tab-slider-image">
                            <img src="assets/images/movies/ott3.html" alt="trending-tab-slider-image">
                         </div>
                         <div class="tranding-block position-relative">
                            <div class="trending-custom-tab">
                               <div class="tab-title-info position-relative">
                                  <ul class="trending-pills iq-custom-tab d-flex nav nav-pills justify-content-center align-items-center text-center list-inline" id="trending-tab-3"
                                     role="tablist">
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="trending-data-tab-9" data-bs-toggle="pill" data-bs-target="#trending-data-9"
                                          aria-controls="trending-data-9" role="tab" aria-selected="true">Overview</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-10" data-bs-toggle="pill" data-bs-target="#trending-data-10"
                                           aria-controls="trending-data-10" role="tab" aria-selected="false">Episodes</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-11" data-bs-toggle="pill" data-bs-target="#trending-data-11"
                                           aria-controls="trending-data-11" role="tab" aria-selected="false">Trailers</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-12" data-bs-toggle="pill" data-bs-target="#trending-data-12"
                                           aria-controls="trending-data-12" role="tab" aria-selected="false">Similar Like This</a>
                                     </li>
                                  </ul>
                               </div>
                               <div class="tab-content trending-content" id="trending-tab-3-content">
                                  <div id="trending-data-9" class="tab-pane fade show active" role="tabpanel" aria-labelledby="trending-data-tab-9" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                        <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                        </h1>
                                        <div class="d-flex align-items-center text-white text-detail flex-wrap">
                                           <span>3 Seasons</span>
                                           <span class="trending-year">2023</span>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap series mb-4 gap-3">
                                           <a href="javascript:void(0);"><img
                                                 src="assets/images/movies/trending-label.html" class="img-fluid"
                                                 alt=""></a>
                                           <span class="text-gold">#2 in Series Today</span>
                                        </div>
                                        <p class="trending-dec line-count-3">The point of using Lorem Ipsum is that it
                                           has a more-or-less normal distribution of letters, as opposed to using
                                           'Content here.</p>
                                        <div class="p-btns">
                                           <div class="iq-button">
                                              <a href="tv-show-detail.html"
                                                 class="btn text-uppercase position-relative">
                                                 <span class="button-text">Play Now</span>
                                                 <i class="fa-solid fa-play"></i>
                                              </a>
                                           </div>
                                        </div>
                                        <div class="trending-list mt-4">
                                           <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                 Moura, Boyd Holbrook, Joanna</span>
                                           </div>
                                           <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                 Action, Thriller, Biography</span>
                                           </div>
                                           <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                 Forceful</span>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-10" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-10" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                        <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                        </h1>
                                        <div class="d-flex align-items-center text-white text-detail flex-wrap mb-4">
                                           <span class="season_date ms-2">
                                              2 Seasons
                                           </span>
                                           <span class="trending-year">Feb 2019</span>
                                        </div>
                                        <div class="iq-custom-select d-inline-block sea-epi mb-4">
                                           <select name="cars" class="form-control season-select select2-basic-single js-states">
                                              <option value="season1">Season 1</option>
                                              <option value="season2">Season 2</option>
                                              <option value="season3">Season 3</option>
                                           </select>
                                        </div>
                                        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                           data-tab="2" data-mobile="2" data-mobile-sm="1" data-autoplay="false"
                                           data-loop="false" data-navigation="true" data-pagination="true">
                                           <ul class="p-0 swiper-wrapper m-0  list-inline">
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/25.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E01</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 1, 2022</span>
                                                             <span class="text-primary run-time">45min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 1 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/26.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E02</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 8, 2022</span>
                                                             <span class="text-primary run-time">35min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 2 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/27.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E03</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 15, 2022</span>
                                                             <span class="text-primary run-time">36min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 3 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/28.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E04</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 4 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/29.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E05</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 5 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                           </ul>
                                           <div class="swiper-button swiper-button-next"></div>
                                           <div class="swiper-button swiper-button-prev"></div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-11" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-11" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction text-center">
                                        <h3 class="trending-text big-title text-uppercase texture-text mt-2">Watch
                                           Trailer</h3>
                                        <div class="episodes-contens mt-5">
                                           <div
                                              class="tab-watch-trailer-container d-inline-block rounded-3 overflow-hidden">
                                              <div class="tab-watch-trailer position-relative rounded-3 overflow-hidden">
                                                 <img src="assets/images/tv-show/season/35.html"
                                                    class="trailer-image" alt="trailer-image">
                                                 <a href="assets/images/video/trailer.mp4"
                                                    class="video-open playbtn text-decoration-none" tabindex="0">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                       xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                       width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                       enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                       <polygon class="triangle" fill="none" stroke-width="7"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10"
                                                          points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                       <circle class="circle" fill="none" stroke-width="7"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                       </circle>
                                                    </svg>
                                                    <span class="w-trailor text-uppercase"> Watch Trailer </span>
                                                 </a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-12" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-12" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                        <h3 class="trending-text big-title text-uppercase texture-text mb-5">Recommended
                                           For You</h3>
                                        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                           data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="false"
                                           data-loop="false" data-navigation="true" data-pagination="true">
                                           <ul class="p-0 swiper-wrapper m-0  list-inline">
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/30.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-2</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 1, 2022</span>
                                                             <span class="text-primary run-time">45min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 1 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/31.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-3</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 8, 2022</span>
                                                             <span class="text-primary run-time">35min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 2 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/32.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-4</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 15, 2022</span>
                                                             <span class="text-primary run-time">36min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 3 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/33.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-5</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 4 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/34.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-6</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 5 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                           </ul>
                                           <div class="swiper-button swiper-button-next"></div>
                                           <div class="swiper-button swiper-button-prev"></div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                      <li class="swiper-slide slider-big-img-4">
                         <div class="trending-tab-slider-image">
                            <img src="assets/images/movies/banner1.html" alt="trending-tab-slider-image">
                         </div>
                         <div class="tranding-block position-relative">
                            <div class="trending-custom-tab">
                               <div class="tab-title-info position-relative">
                                  <ul class="trending-pills iq-custom-tab d-flex nav nav-pills justify-content-center align-items-center text-center list-inline" id="trending-tab-4"
                                     role="tablist">
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="trending-data-tab-13" data-bs-toggle="pill" data-bs-target="#trending-data-13"
                                          aria-controls="trending-data-13" role="tab" aria-selected="true">Overview</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-14" data-bs-toggle="pill" data-bs-target="#trending-data-14"
                                           aria-controls="trending-data-14" role="tab" aria-selected="false">Episodes</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-15" data-bs-toggle="pill" data-bs-target="#trending-data-15"
                                           aria-controls="trending-data-15" role="tab" aria-selected="false">Trailers</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-16" data-bs-toggle="pill" data-bs-target="#trending-data-16"
                                           aria-controls="trending-data-16" role="tab" aria-selected="false">Similar Like This</a>
                                     </li>
                                  </ul>
                               </div>
                               <div class="tab-content trending-content" id="trending-tab-4-content">
                                  <div id="trending-data-13" class="tab-pane fade show active" role="tabpanel" aria-labelledby="trending-data-tab-13" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                        <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                        </h1>
                                        <div class="d-flex align-items-center text-white text-detail flex-wrap">
                                           <span>3 Seasons</span>
                                           <span class="trending-year">2023</span>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap series mb-4 gap-3">
                                           <a href="javascript:void(0);"><img
                                                 src="assets/images/movies/trending-label.html" class="img-fluid"
                                                 alt=""></a>
                                           <span class="text-gold">#2 in Series Today</span>
                                        </div>
                                        <p class="trending-dec line-count-3">The point of using Lorem Ipsum is that it
                                           has a more-or-less normal distribution of letters, as opposed to using
                                           'Content here.</p>
                                        <div class="p-btns">
                                           <div class="iq-button">
                                              <a href="tv-show-detail.html"
                                                 class="btn text-uppercase position-relative">
                                                 <span class="button-text">Play Now</span>
                                                 <i class="fa-solid fa-play"></i>
                                              </a>
                                           </div>
                                        </div>
                                        <div class="trending-list mt-4">
                                           <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                 Moura, Boyd Holbrook, Joanna</span>
                                           </div>
                                           <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                 Action, Thriller, Biography</span>
                                           </div>
                                           <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                 Forceful</span>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-14" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-14" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                        <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                        </h1>
                                        <div class="d-flex align-items-center text-white text-detail flex-wrap mb-4">
                                           <span class="season_date ms-2">
                                              2 Seasons
                                           </span>
                                           <span class="trending-year">Feb 2019</span>
                                        </div>
                                        <div class="iq-custom-select d-inline-block sea-epi mb-4">
                                           <select name="cars" class="form-control season-select select2-basic-single js-states">
                                              <option value="season1">Season 1</option>
                                              <option value="season2">Season 2</option>
                                              <option value="season3">Season 3</option>
                                           </select>
                                        </div>
                                        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                           data-tab="2" data-mobile="2" data-mobile-sm="1" data-autoplay="false"
                                           data-loop="false" data-navigation="true" data-pagination="true">
                                           <ul class="p-0 swiper-wrapper m-0  list-inline">
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/11.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E01</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 1, 2022</span>
                                                             <span class="text-primary run-time">45min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 1 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/12.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E02</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 8, 2022</span>
                                                             <span class="text-primary run-time">35min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 2 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/13.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E03</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 15, 2022</span>
                                                             <span class="text-primary run-time">36min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 3 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/14.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E04</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 4 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/15.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E05</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 5 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                           </ul>
                                           <div class="swiper-button swiper-button-next"></div>
                                           <div class="swiper-button swiper-button-prev"></div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-11" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-15" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction text-center">
                                        <h3 class="trending-text big-title text-uppercase texture-text mt-2">Watch
                                           Trailer</h3>
                                        <div class="episodes-contens mt-5">
                                           <div
                                              class="tab-watch-trailer-container d-inline-block rounded-3 overflow-hidden">
                                              <div class="tab-watch-trailer position-relative rounded-3 overflow-hidden">
                                                 <img src="assets/images/tv-show/episodes/01.html"
                                                    class="trailer-image" alt="trailer-image">
                                                 <a href="assets/images/video/trailer.mp4"
                                                    class="video-open playbtn text-decoration-none" tabindex="0">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                       xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                       width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                       enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                       <polygon class="triangle" fill="none" stroke-width="7"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10"
                                                          points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                       <circle class="circle" fill="none" stroke-width="7"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                       </circle>
                                                    </svg>
                                                    <span class="w-trailor text-uppercase"> Watch Trailer </span>
                                                 </a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-16" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-16" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                        <h3 class="trending-text big-title text-uppercase texture-text mb-5">Recommended
                                           For You</h3>
                                        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                           data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="false"
                                           data-loop="false" data-navigation="true" data-pagination="true">
                                           <ul class="p-0 swiper-wrapper m-0  list-inline">
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/ott2.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-2</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 1, 2022</span>
                                                             <span class="text-primary run-time">45min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 1 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/ott3.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-3</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 8, 2022</span>
                                                             <span class="text-primary run-time">35min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 2 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/banner1.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-4</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 15, 2022</span>
                                                             <span class="text-primary run-time">36min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 3 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/banner2.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-5</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 4 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/banner3.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-6</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 5 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                           </ul>
                                           <div class="swiper-button swiper-button-next"></div>
                                           <div class="swiper-button swiper-button-prev"></div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                      <li class="swiper-slide slider-big-img-5">
                         <div class="trending-tab-slider-image">
                            <img src="assets/images/movies/banner2.html" alt="trending-tab-slider-image">
                         </div>
                         <div class="tranding-block position-relative">
                            <div class="trending-custom-tab">
                               <div class="tab-title-info position-relative">
                                  <ul class="trending-pills iq-custom-tab d-flex nav nav-pills justify-content-center align-items-center text-center list-inline" id="trending-tab-5"
                                     role="tablist">
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="trending-data-tab-17" data-bs-toggle="pill" data-bs-target="#trending-data-17"
                                          aria-controls="trending-data-17" role="tab" aria-selected="true">Overview</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-18" data-bs-toggle="pill" data-bs-target="#trending-data-18"
                                           aria-controls="trending-data-18" role="tab" aria-selected="false">Episodes</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-19" data-bs-toggle="pill" data-bs-target="#trending-data-19"
                                           aria-controls="trending-data-19" role="tab" aria-selected="false">Trailers</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-20" data-bs-toggle="pill" data-bs-target="#trending-data-20"
                                           aria-controls="trending-data-20" role="tab" aria-selected="false">Similar Like This</a>
                                     </li>
                                  </ul>
                               </div>
                               <div class="tab-content trending-content" id="trending-tab-5-content">
                                  <div id="trending-data-17" class="tab-pane fade show active" role="tabpanel" aria-labelledby="trending-data-tab-17" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                        <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                        </h1>
                                        <div class="d-flex align-items-center text-white text-detail flex-wrap">
                                           <span>3 Seasons</span>
                                           <span class="trending-year">2023</span>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap series mb-4 gap-3">
                                           <a href="javascript:void(0);"><img
                                                 src="assets/images/movies/trending-label.html" class="img-fluid"
                                                 alt=""></a>
                                           <span class="text-gold">#2 in Series Today</span>
                                        </div>
                                        <p class="trending-dec line-count-3">The point of using Lorem Ipsum is that it
                                           has a more-or-less normal distribution of letters, as opposed to using
                                           'Content here.</p>
                                        <div class="p-btns">
                                           <div class="iq-button">
                                              <a href="tv-show-detail.html"
                                                 class="btn text-uppercase position-relative">
                                                 <span class="button-text">Play Now</span>
                                                 <i class="fa-solid fa-play"></i>
                                              </a>
                                           </div>
                                        </div>
                                        <div class="trending-list mt-4">
                                           <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                 Moura, Boyd Holbrook, Joanna</span>
                                           </div>
                                           <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                 Action, Thriller, Biography</span>
                                           </div>
                                           <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                 Forceful</span>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-18" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-18" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                        <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                        </h1>
                                        <div class="d-flex align-items-center text-white text-detail flex-wrap mb-4">
                                           <span class="season_date ms-2">
                                              2 Seasons
                                           </span>
                                           <span class="trending-year">Feb 2019</span>
                                        </div>
                                        <div class="iq-custom-select d-inline-block sea-epi mb-4">
                                           <select name="cars" class="form-control season-select select2-basic-single js-states">
                                              <option value="season1">Season 1</option>
                                              <option value="season2">Season 2</option>
                                              <option value="season3">Season 3</option>
                                           </select>
                                        </div>
                                        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                           data-tab="2" data-mobile="2" data-mobile-sm="1" data-autoplay="false"
                                           data-loop="false" data-navigation="true" data-pagination="true">
                                           <ul class="p-0 swiper-wrapper m-0  list-inline">
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/16.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E01</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 1, 2022</span>
                                                             <span class="text-primary run-time">45min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 1 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/17.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E02</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 8, 2022</span>
                                                             <span class="text-primary run-time">35min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 2 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/18.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E03</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 15, 2022</span>
                                                             <span class="text-primary run-time">36min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 3 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/19.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E04</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 4 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/20.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E05</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 5 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                           </ul>
                                           <div class="swiper-button swiper-button-next"></div>
                                           <div class="swiper-button swiper-button-prev"></div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-19" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-19" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction text-center">
                                        <h3 class="trending-text big-title text-uppercase texture-text mt-2">Watch
                                           Trailer</h3>
                                        <div class="episodes-contens mt-5">
                                           <div
                                              class="tab-watch-trailer-container d-inline-block rounded-3 overflow-hidden">
                                              <div class="tab-watch-trailer position-relative rounded-3 overflow-hidden">
                                                 <img src="assets/images/tv-show/episodes/01.html"
                                                    class="trailer-image" alt="trailer-image">
                                                 <a href="assets/images/video/trailer.mp4"
                                                    class="video-open playbtn text-decoration-none" tabindex="0">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                       xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                       width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                       enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                       <polygon class="triangle" fill="none" stroke-width="7"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10"
                                                          points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                       <circle class="circle" fill="none" stroke-width="7"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                       </circle>
                                                    </svg>
                                                    <span class="w-trailor text-uppercase"> Watch Trailer </span>
                                                 </a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-20" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-20" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                        <h3 class="trending-text big-title text-uppercase texture-text mb-5">Recommended
                                           For You</h3>
                                        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                           data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="false"
                                           data-loop="false" data-navigation="true" data-pagination="true">
                                           <ul class="p-0 swiper-wrapper m-0  list-inline">
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/ott2.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-2</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 1, 2022</span>
                                                             <span class="text-primary run-time">45min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 1 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/ott3.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-3</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 8, 2022</span>
                                                             <span class="text-primary run-time">35min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 2 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/banner1.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-4</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 15, 2022</span>
                                                             <span class="text-primary run-time">36min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 3 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/banner2.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-5</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 4 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/banner3.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-6</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 5 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                           </ul>
                                           <div class="swiper-button swiper-button-next"></div>
                                           <div class="swiper-button swiper-button-prev"></div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                      <li class="swiper-slide slider-big-img-6">
                         <div class="trending-tab-slider-image">
                            <img src="assets/images/movies/banner3.html" alt="trending-tab-slider-image">
                         </div>
                         <div class="tranding-block position-relative">
                            <div class="trending-custom-tab">
                               <div class="tab-title-info position-relative">
                                  <ul class="trending-pills iq-custom-tab d-flex nav nav-pills justify-content-center align-items-center text-center list-inline" id="trending-tab-5"
                                     role="tablist">
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="trending-data-tab-21" data-bs-toggle="pill" data-bs-target="#trending-data-21"
                                          aria-controls="trending-data-21" role="tab" aria-selected="true">Overview</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-22" data-bs-toggle="pill" data-bs-target="#trending-data-22"
                                           aria-controls="trending-data-22" role="tab" aria-selected="false">Episodes</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-23" data-bs-toggle="pill" data-bs-target="#trending-data-23"
                                           aria-controls="trending-data-23" role="tab" aria-selected="false">Trailers</a>
                                     </li>
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="trending-data-tab-24" data-bs-toggle="pill" data-bs-target="#trending-data-24"
                                           aria-controls="trending-data-24" role="tab" aria-selected="false">Similar Like This</a>
                                     </li>
                                  </ul>
                               </div>
                               <div class="tab-content trending-content" id="trending-tab-5-content">
                                  <div id="trending-data-21" class="tab-pane fade show active" role="tabpanel" aria-labelledby="trending-data-tab-21" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                        <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                        </h1>
                                        <div class="d-flex align-items-center text-white text-detail flex-wrap">
                                           <span>3 Seasons</span>
                                           <span class="trending-year">2023</span>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap series mb-4 gap-3">
                                           <a href="javascript:void(0);"><img
                                                 src="assets/images/movies/trending-label.html" class="img-fluid"
                                                 alt=""></a>
                                           <span class="text-gold">#2 in Series Today</span>
                                        </div>
                                        <p class="trending-dec line-count-3">The point of using Lorem Ipsum is that it
                                           has a more-or-less normal distribution of letters, as opposed to using
                                           'Content here.</p>
                                        <div class="p-btns">
                                           <div class="iq-button">
                                              <a href="tv-show-detail.html"
                                                 class="btn text-uppercase position-relative">
                                                 <span class="button-text">Play Now</span>
                                                 <i class="fa-solid fa-play"></i>
                                              </a>
                                           </div>
                                        </div>
                                        <div class="trending-list mt-4">
                                           <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                 Moura, Boyd Holbrook, Joanna</span>
                                           </div>
                                           <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                 Action, Thriller, Biography</span>
                                           </div>
                                           <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                 Forceful</span>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-22" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-22" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">

                                        <h1 class="trending-text big-title text-uppercase texture-text">the hero camp
                                        </h1>
                                        <div class="d-flex align-items-center text-white text-detail flex-wrap mb-4">
                                           <span class="season_date ms-2">
                                              2 Seasons
                                           </span>
                                           <span class="trending-year">Feb 2019</span>
                                        </div>
                                        <div class="iq-custom-select d-inline-block sea-epi mb-4">
                                           <select name="cars" class="form-control season-select select2-basic-single js-states">
                                              <option value="season1">Season 1</option>
                                              <option value="season2">Season 2</option>
                                              <option value="season3">Season 3</option>
                                           </select>
                                        </div>
                                        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                           data-tab="2" data-mobile="2" data-mobile-sm="1" data-autoplay="false"
                                           data-loop="false" data-navigation="true" data-pagination="true">
                                           <ul class="p-0 swiper-wrapper m-0  list-inline">
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/21.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E01</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 1, 2022</span>
                                                             <span class="text-primary run-time">45min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 1 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/22.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E02</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 8, 2022</span>
                                                             <span class="text-primary run-time">35min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 2 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/23.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E03</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 15, 2022</span>
                                                             <span class="text-primary run-time">36min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 3 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/24.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E04</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 4 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/tv-show/season/25.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">S01E05</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 5 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                           </ul>
                                           <div class="swiper-button swiper-button-next"></div>
                                           <div class="swiper-button swiper-button-prev"></div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-23" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-23" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction text-center">
                                        <h3 class="trending-text big-title text-uppercase texture-text mt-2">Watch
                                           Trailer</h3>
                                        <div class="episodes-contens mt-5">
                                           <div
                                              class="tab-watch-trailer-container d-inline-block rounded-3 overflow-hidden">
                                              <div class="tab-watch-trailer position-relative rounded-3 overflow-hidden">
                                                 <img src="assets/images/tv-show/episodes/01.html"
                                                    class="trailer-image" alt="trailer-image">
                                                 <a href="assets/images/video/trailer.mp4"
                                                    class="video-open playbtn text-decoration-none" tabindex="0">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                       xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                       width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                       enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                       <polygon class="triangle" fill="none" stroke-width="7"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10"
                                                          points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                       <circle class="circle" fill="none" stroke-width="7"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                       </circle>
                                                    </svg>
                                                    <span class="w-trailor text-uppercase"> Watch Trailer </span>
                                                 </a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="trending-data-24" class="tab-pane fade" role="tabpanel" aria-labelledby="trending-data-tab-24" tabindex="0">
                                     <div
                                        class=" trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                        <h3 class="trending-text big-title text-uppercase texture-text mb-5">Recommended
                                           For You</h3>
                                        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="3"
                                           data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="false"
                                           data-loop="false" data-navigation="true" data-pagination="true">
                                           <ul class="p-0 swiper-wrapper m-0  list-inline">
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/ott2.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-2</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 1, 2022</span>
                                                             <span class="text-primary run-time">45min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 1 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/ott3.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-3</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 8, 2022</span>
                                                             <span class="text-primary run-time">35min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 2 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/banner1.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-4</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 15, 2022</span>
                                                             <span class="text-primary run-time">36min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 3 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/banner2.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-5</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 4 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                              <li class="swiper-slide">
                                                 <div class="episode-block">
                                                     <div class="block-image position-relative">
                                                         <a href="episode.html">
                                                             <img src="assets/images/movies/banner3.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
                                                         </a>
                                                         <div class="episode-number">Seasons 1-6</div>
                                                         <div class="episode-play">
                                                             <a href="episode.html" tabindex="0"><i class="fa-solid fa-play"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="epi-desc p-3">
                                                         <div class="d-flex align-items-center justify-content-between mb-3">
                                                             <span class="border-gredient-left text-white rel-date">October 22, 2022</span>
                                                             <span class="text-primary run-time">41min</span>
                                                         </div>
                                                         <a href="episode.html">
                                                             <h5 class="epi-name text-white mb-0"> Episode 5 </h5>
                                                         </a>
                                                     </div>
                                                 </div>
                                              </li>
                                           </ul>
                                           <div class="swiper-button swiper-button-next"></div>
                                           <div class="swiper-button swiper-button-prev"></div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                   </ul>
                   <div class="swiper-arrow swiper-button-next">
                      <i class="fa-solid fa-chevron-right"></i>
                   </div>
                   <div class="swiper-arrow swiper-button-prev">
                      <i class="fa-solid fa-chevron-left"></i>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
  </section>

  <div class="movie-geners-block">
    <div class="container-fluid">
      <div class="overflow-hidden">
        <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
        <h5 class="main-title text-capitalize mb-0">movie geners</h5>
        <a href="all-geners.html" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
        </div>
        <div class="card-style-slider">
          <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3" data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
            <ul class="p-0 swiper-wrapper m-0  list-inline geners-card">
              <li class="swiper-slide">
              <div class="iq-card-geners card-hover-style-two">
                  <div class="block-images position-relative w-100">
                      <div class="img-box rounded position-relative">
                          <img src="assets/images/genre/01.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                          <div class="blog-description">
                              <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">action</a></h6>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
            <li class="swiper-slide">
              <div class="iq-card-geners card-hover-style-two">
                  <div class="block-images position-relative w-100">
                      <div class="img-box rounded position-relative">
                          <img src="assets/images/genre/02.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                          <div class="blog-description">
                              <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">adventure</a></h6>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
            <li class="swiper-slide">
              <div class="iq-card-geners card-hover-style-two">
                  <div class="block-images position-relative w-100">
                      <div class="img-box rounded position-relative">
                          <img src="assets/images/genre/03.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                          <div class="blog-description">
                              <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">animation</a></h6>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
            <li class="swiper-slide">
              <div class="iq-card-geners card-hover-style-two">
                  <div class="block-images position-relative w-100">
                      <div class="img-box rounded position-relative">
                          <img src="assets/images/genre/04.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                          <div class="blog-description">
                              <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Crime</a></h6>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
            <li class="swiper-slide">
              <div class="iq-card-geners card-hover-style-two">
                  <div class="block-images position-relative w-100">
                      <div class="img-box rounded position-relative">
                          <img src="assets/images/genre/05.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                          <div class="blog-description">
                              <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">horror</a></h6>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
            <li class="swiper-slide">
              <div class="iq-card-geners card-hover-style-two">
                  <div class="block-images position-relative w-100">
                      <div class="img-box rounded position-relative">
                          <img src="assets/images/genre/06.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                          <div class="blog-description">
                              <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">mystery</a></h6>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
            <li class="swiper-slide">
              <div class="iq-card-geners card-hover-style-two">
                  <div class="block-images position-relative w-100">
                      <div class="img-box rounded position-relative">
                          <img src="assets/images/genre/07.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                          <div class="blog-description">
                              <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">romance</a></h6>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
            </ul>
            <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="recommended-block">
     <div class="container-fluid">
        <section class="overflow-hidden">
           <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
              <h5 class="main-title text-capitalize mb-0">recommended for you</h5>
              <a href="view-all-movie.html" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
           </div>
           <div class="card-style-slider">
              <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3" data-mobile="2"
                 data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
                 <ul class="p-0 swiper-wrapper m-0  list-inline">
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/recommended/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Giikre</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">2hr : 12mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/recommended/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Arrival</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr : 22mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/recommended/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Pricess</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr : 30mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/recommended/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Soull Meate</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">2hr : 30mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/recommended/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Dangacg</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr : 45mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/recommended/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">crcikeft</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">2hr : 25mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/recommended/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Avengrs</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr : 45mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                 </ul>
                 <div class="swiper-button swiper-button-next"></div>
                 <div class="swiper-button swiper-button-prev"></div>
              </div>
           </div>
        </section>
     </div>
  </div>

  <div class="top-pics-block">
     <div class="container-fluid">
        <section class="overflow-hidden">
           <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
              <h5 class="main-title text-capitalize mb-0">Top pics for you</h5>
              <a href="view-all-movie.html" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
           </div>
           <div class="card-style-slider">
              <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3" data-mobile="2"
                 data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
                 <ul class="p-0 swiper-wrapper m-0  list-inline">
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/top-picks/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Frzzen</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">2hr :
                                            12mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/top-picks/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">The Crew</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr :
                                            22mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/top-picks/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Cromeus</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr :
                                            30mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/top-picks/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">Reodg</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr :
                                            30mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/top-picks/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">guiility</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr :
                                            30mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/top-picks/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">syyvcihonic</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr :
                                            30mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                    <li class="swiper-slide">
                         <div class="iq-card card-hover">
                           <div class="block-images position-relative w-100">
                             <div class="img-box w-100">
                               <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                               <img src="assets/images/movies/top-picks/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                             </div>
                             <div class="card-description with-transition">
                               <div class="cart-content">
                                 <div class="content-left">
                                   <h5 class="iq-title text-capitalize">
                                     <a href="movie-detail.html">tittanc</a>
                                   </h5>
                                   <div class="movie-time d-flex align-items-center my-2">
                                     <span class="movie-time-text font-normal">1hr :
                                            30mins</span>
                                   </div>
                                 </div>
                                 <div class="watchlist">
                                   <a class="watch-list-not" href="playlist.html">
                                     <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                       <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <span class="watchlist-label"> Watchlist </span>
                                   </a>
                                 </div>
                               </div>
                             </div>
                             <div class="block-social-info align-items-center">
                               <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fas fa-share-alt"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <a href="#" target="_blank">
                                           <i class="fab fa-facebook-f"></i>
                                         </a>
                                         <a href="#" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                         </a>
                                         <a href="#">
                                           <i class="fas fa-link"></i>
                                         </a>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li class="share position-relative d-flex align-items-center text-center mb-0">
                                   <span class="w-100 h-100 d-inline-block bg-transparent">
                                     <i class="fa-regular fa-heart"></i>
                                   </span>
                                   <div class="share-wrapper">
                                     <div class="share-boxs d-inline-block">
                                       <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                       </svg>
                                       <div class=" overflow-hidden">
                                         <span>+51</span>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                               </ul>
                               <div class="iq-button">
                                 <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                                   <i class="fa-solid fa-play ms-0"></i>
                                 </a>
                             </div>
                             </div>
                           </div>
                         </div>


                    </li>
                 </ul>
                 <div class="swiper-button swiper-button-next"></div>
                 <div class="swiper-button swiper-button-prev"></div>
              </div>
           </div>
        </section>
     </div>
  </div>

    </main>

    @endsection