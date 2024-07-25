@extends('frontend.layouts.main')
@section('main-container')

<section class="banner-container">
    <div class="movie-banner">
      <div  class="swiper swiper-banner-container iq-rtl-direction" data-swiper="banner-detail-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide tv-show-1 p-0">
              <div class="movie-banner-image">
                <img src="assets/images/tv-show/banner-1.html" alt="movie-banner-image">
              </div>
              <div class="shows-content h-100">
                <div class="row align-items-center h-100">
                  <div class="col-lg-7 col-md-12">
                    <h1 class="texture-text big-font letter-spacing-1 line-count-1 text-uppercase RightAnimate-two"
                      data-animation-in="fadeInLeft" data-delay-in="0.6">
                      vikingr
                    </h1>
                    <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                      style="opacity: 1;">
                      <div class="slider-ratting d-flex align-items-center gap-3">
                        <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                          <li>
                            <i class="fas fa-star" aria-hidden="true"></i>
                          </li>
                          <li>
                            <i class="fas fa-star" aria-hidden="true"></i>
                          </li>
                          <li>
                            <i class="fas fa-star" aria-hidden="true"></i>
                          </li>
                          <li>
                            <i class="fa fa-star-half" aria-hidden="true"></i>
                          </li>
                        </ul>
                        <span class="text-white">
                          3.5(lmdb)
                        </span>
                      </div>
                      <div class="d-flex flex-wrap align-items-center gap-3 movie-banner-time">
                        <span class="badge bg-secondary p-2">
                          <i class="fa fa-eye"></i>
                          PG
                        </span>
                        <span class="font-size-6">
                          <i class="fa-solid fa-circle"></i>
                        </span>
                        <span class="trending-time font-normal">
                          1hr : 44mins
                        </span>
                        <span class="font-size-6">
                          <i class="fa-solid fa-circle"></i>
                        </span>
                        <span class="trending-year font-normal">
                          Feb 2018
                        </span>
                      </div>
                      <p class="movie-banner-text line-count-3" data-animation-in="fadeInUp" data-delay-in="1.2">
                        Dinosaurs are a diverse group of reptiles of the clade Dinosauria. They first appeared during the Triassic period, between 243 and 233.23 million years ago, although the exact origin and timing of the evolution of dinosaurs is the subject of active research.
                      </p>
                    </div>
                    <div class="iq-button" data-animation-in="fadeInUp" data-delay-in="1.2">
                      <a href="tv-show-detail.html" class="btn text-uppercase position-relative">
                        <span class="button-text">Play Now</span>
                        <i class="fa-solid fa-play"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block position-relative">
                    <a data-fslightbox="html5-video" href="assets/images/video/trailer.mp4" class="video-open playbtn text-decoration-none" tabindex="0">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                        y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                        xml:space="preserve">
                        <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                          stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                        <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                          stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                      </svg>
                      <span class="w-trailor text-uppercase"> Watch Trailer </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>            <div class="swiper-slide tv-show-2 p-0">
              <div class="movie-banner-image">
                <img src="assets/images/tv-show/banner-2.html" alt="movie-banner-image">
              </div>
              <div class="shows-content h-100">
                <div class="row align-items-center h-100">
                  <div class="col-lg-7 col-md-12">
                    <h1 class="texture-text big-font letter-spacing-1 line-count-1 text-uppercase RightAnimate-two"
                      data-animation-in="fadeInLeft" data-delay-in="0.6">
                      the boys
                    </h1>
                    <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                      style="opacity: 1;">
                      <div class="slider-ratting d-flex align-items-center gap-3">
                        <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                          <li>
                            <i class="fas fa-star" aria-hidden="true"></i>
                          </li>
                          <li>
                            <i class="fas fa-star" aria-hidden="true"></i>
                          </li>
                          <li>
                            <i class="fas fa-star" aria-hidden="true"></i>
                          </li>
                          <li>
                            <i class="fa fa-star-half" aria-hidden="true"></i>
                          </li>
                        </ul>
                        <span class="text-white">
                          3.5(lmdb)
                        </span>
                      </div>
                      <div class="d-flex flex-wrap align-items-center gap-3 movie-banner-time">
                        <span class="badge bg-secondary p-2">
                          <i class="fa fa-eye"></i>
                          G
                        </span>
                        <span class="font-size-6">
                          <i class="fa-solid fa-circle"></i>
                        </span>
                        <span class="trending-time font-normal">
                          2hr : 42mins
                        </span>
                        <span class="font-size-6">
                          <i class="fa-solid fa-circle"></i>
                        </span>
                        <span class="trending-year font-normal">
                          Nov 2017
                        </span>
                      </div>
                      <p class="movie-banner-text line-count-3" data-animation-in="fadeInUp" data-delay-in="1.2">
                        The most brutal emperor in the history of world.He was the founder of the most contiguous empire of the world i.e. the Mongol empire.He made an army by himself by uniting some nomadic tribes and trained them.
                      </p>
                    </div>
                    <div class="iq-button" data-animation-in="fadeInUp" data-delay-in="1.2">
                      <a href="tv-show-detail.html" class="btn text-uppercase position-relative">
                        <span class="button-text">Play Now</span>
                        <i class="fa-solid fa-play"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block position-relative">
                    <a data-fslightbox="html5-video" href="assets/images/video/trailer.mp4" class="video-open playbtn text-decoration-none" tabindex="0">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                        y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                        xml:space="preserve">
                        <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                          stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                        <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                          stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                      </svg>
                      <span class="w-trailor text-uppercase"> Watch Trailer </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>            <div class="swiper-slide tv-show-3 p-0">
              <div class="movie-banner-image">
                <img src="assets/images/tv-show/banner-3.html" alt="movie-banner-image">
              </div>
              <div class="shows-content h-100">
                <div class="row align-items-center h-100">
                  <div class="col-lg-7 col-md-12">
                    <h1 class="texture-text big-font letter-spacing-1 line-count-1 text-uppercase RightAnimate-two"
                      data-animation-in="fadeInLeft" data-delay-in="0.6">
                      Breaking bad
                    </h1>
                    <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                      style="opacity: 1;">
                      <div class="slider-ratting d-flex align-items-center gap-3">
                        <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                          <li>
                            <i class="fas fa-star" aria-hidden="true"></i>
                          </li>
                          <li>
                            <i class="fas fa-star" aria-hidden="true"></i>
                          </li>
                          <li>
                            <i class="fas fa-star" aria-hidden="true"></i>
                          </li>
                          <li>
                            <i class="fa fa-star-half" aria-hidden="true"></i>
                          </li>
                        </ul>
                        <span class="text-white">
                          3.5(lmdb)
                        </span>
                      </div>
                      <div class="d-flex flex-wrap align-items-center gap-3 movie-banner-time">
                        <span class="badge bg-secondary p-2">
                          <i class="fa fa-eye"></i>
                          PG-13
                        </span>
                        <span class="font-size-6">
                          <i class="fa-solid fa-circle"></i>
                        </span>
                        <span class="trending-time font-normal">
                          2hr : 12mins
                        </span>
                        <span class="font-size-6">
                          <i class="fa-solid fa-circle"></i>
                        </span>
                        <span class="trending-year font-normal">
                          Dec 2018
                        </span>
                      </div>
                      <p class="movie-banner-text line-count-3" data-animation-in="fadeInUp" data-delay-in="1.2">
                        Jumbo also known as Jumbo the Elephant and Jumbo the Circus Elephant, was a 19th-century male African bush elephant born in Sudan. Jumbo was exported to Jardin des Plantes, a zoo in Paris, and then transferred in 1865 to London Zoo in England. Despite public protest, Jumbo was sold to P. T. Barnum, who took him to the United States for exhibition in March 1882.
                      </p>
                    </div>
                    <div class="iq-button" data-animation-in="fadeInUp" data-delay-in="1.2">
                      <a href="tv-show-detail.html" class="btn text-uppercase position-relative">
                        <span class="button-text">Play Now</span>
                        <i class="fa-solid fa-play"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block position-relative">
                    <a data-fslightbox="html5-video" href="assets/images/video/trailer.mp4" class="video-open playbtn text-decoration-none" tabindex="0">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                        y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                        xml:space="preserve">
                        <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                          stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                        <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                          stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                      </svg>
                      <span class="w-trailor text-uppercase"> Watch Trailer </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>         </div>
         <div class="swiper-banner-button-next">
            <i class="iconly-Arrow-Right-2 icli arrow-icon"></i>
         </div>
         <div class="swiper-banner-button-prev">
            <i class="iconly-Arrow-Left-2 icli arrow-icon"></i>
         </div>
      </div>
   </div>
</section>
<section class="recommended-block section-top-spacing">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="d-flex align-items-center justify-content-between px-3 my-4">
        <h5 class="main-title text-capitalize mb-0">TV Popular Shows</h5>
        <a href="view-all-movie.html" class="text-primary iq-view-all text-decoration-none">View All</a>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="5" data-tab="2" data-mobile="2"
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
</section>

<section class="recommended-block section-top-spacing">
  <div class="container-fluid">
    <section class="overflow-hidden">
      <div class="d-flex align-items-center justify-content-between px-3 my-4">
        <h5 class="main-title text-capitalize mb-0">Best Of International Shows</h5>
        <a href="view-all-movie.html" class="text-primary iq-view-all text-decoration-none">View All</a>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="5" data-tab="2" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 swiper-wrapper m-0  list-inline">
            <li class="swiper-slide">
                  <div class="iq-card card-hover">
                    <div class="block-images position-relative w-100">
                      <div class="img-box w-100">
                        <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                        <img src="assets/images/movies/latest/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">mortal nories</a>
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
                        <img src="assets/images/movies/latest/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">advetre</a>
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
                        <img src="assets/images/movies/latest/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">net ailo</a>
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
                        <img src="assets/images/movies/latest/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">ariivaal</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">2hr : 45mins</span>
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
                        <img src="assets/images/movies/latest/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">dramma</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">1hr : 55mins</span>
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
                        <img src="assets/images/movies/latest/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">aune</a>
                            </h5>
                            <div class="movie-time d-flex align-items-center my-2">
                              <span class="movie-time-text font-normal">1hr : 25mins</span>
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
                        <img src="assets/images/movies/latest/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                      </div>
                      <div class="card-description with-transition">
                        <div class="cart-content">
                          <div class="content-left">
                            <h5 class="iq-title text-capitalize">
                              <a href="movie-detail.html">everest</a>
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
</section>

<section class="recommended-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="d-flex align-items-center justify-content-between px-3 my-4">
        <h5 class="main-title text-capitalize mb-0">Shows We Recommend</h5>
        <a href="view-all-movie.html" class="text-primary iq-view-all text-decoration-none">View All</a>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="5" data-tab="2" data-mobile="2"
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
    </div>
  </div>
</section>


  </main>
  @endsection
