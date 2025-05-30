@extends('frontend.layouts.main')
@section('main-container')

<div class="section-padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-5">
          <div class="cast-box position-relative">
            <img src="assets/images/cast/01.html" class="img-fluid object-cover w-100" alt="person"
              loading="lazy">
            <ul class="p-0 m-0 list-unstyled widget_social_media position-absolute w-100 text-center">
              <li class="">
                <a href="https://www.facebook.com/" class="position-relative">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="">
                <a href="https://twitter.com/" class="position-relative">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="">
                <a href="https://github.com/" class="position-relative">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="">
                <a href="https://www.instagram.com/" class="position-relative">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
          <h5 class="mt-5 mb-4 text-white fw-500">Personal Details</h5>
          <h6 class="font-size-18 text-white fw-500">Official Sites :</h6>
          <p><a href="https://iqonic.design/" target="_blank" class="text-uppercase">Iqonic Design</a></p>
          <h6 class="font-size-18 text-white fw-500">Born :</h6>
          <div class="seperator d-flex align-items-center flex-wrap mb-3">
            <span>October 15, 1982</span>
            <span class="circle"></span>
            <span>Westminster, London, England, UK</span>
          </div>
          <h6 class="font-size-18 text-white fw-500">Height :</h6>
          <p>6′ 1¾″ (1.87 m)</p>
          <h6 class="font-size-18 text-white fw-500">Parents & Relatives :</h6>
          <p class="mb-0">Diana Patricia (Servaes), <span class="text-primary">Emma Hiddleston</span>(Sibling) </p>
        </div>
        <div class="col-lg-9 col-md-7 mt-5 mt-md-0">
          <h4 class="fw-500">Debbi Bossi</h4>
          <div class="seperator d-flex align-items-center flex-wrap mb-3">
            <span class="fw-semibold">Director</span>
            <span class="circle"></span>
            <span class="fw-semibold">Writer</span>
            <span class="circle"></span>
            <span class="fw-semibold">Actor</span>
          </div>
          <p>"Many actors have left a lasting impact on the world of entertainment. They bring characters to life on
            screen, captivating audiences with their talent and charisma. From classic Hollywood icons like Marilyn Monroe
            and Humphrey Bogart to contemporary stars like Leonardo DiCaprio and Scarlett Johansson, actors have played a
            vital role in shaping the world of cinema. Each actor has their unique style and contribution to the art of
            <span class="text-primary">storytelling (2001)</span>, making
          </p>
          <div class="awards-box border-bottom">
            <h5>Awards</h5>
            <span class="text-white fw-500">56 WINS & 83 NOMINATIONS</span>
          </div>
          <div class="pb-md-5">
            <h5 class="main-title text-capitalize mb-4">Most View Movies</h5>
            <div class="card-style-grid mb-5">
              <div class="row row-cols-xl-5 row-cols-sm-2 row-cols-1">
                <div class="col mb-4">
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
                                <span class="movie-time-text font-normal">2hr
                                  : 12mins</span>
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


                </div>
                <div class="col mb-4">
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
                                <span class="movie-time-text font-normal">2hr
                                  : 30mins</span>
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


                </div>
                <div class="col mb-4">
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


                </div>
                <div class="col mb-4">
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
                                <a href="movie-detail.html">Mexcan</a>
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


                </div>
                <div class="col d-xl-block d-none"></div>
              </div>
            </div>
          </div>
          <div class="content-details trending-info">
            <ul class="nav nav-underline d-flex nav nav-pills align-items-center text-center mb-5 gap-5" role="tablist">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="pill" href="#all" role="tab" aria-selected="true">
                  All
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#movies" role="tab" aria-selected="false">
                  Movies
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#tvshows" role="tab" aria-selected="false">
                  TV Shows
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="all" class="tab-pane animated fadeInUp active show" role="tabpanel">
                <div class="description-content">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="w-15"><img src="assets/images/movies/latest/01.html" alt="image-icon"
                              class="img-fluid person-img object-cover"></td>
                          <td class="w-20">
                            <div class="font-size-18 d-flex gap-4 text-white fw-500">
                              <span>1</span>
                              <span class="text-capitalize">Mortal Norris <span class="fw-normal text-body">as Christina
                                  Ricci</span></span>
                            </div>
                          </td>
                          <td><span class="fw-500 font-size-18 text-white">2009</span></td>
                        </tr>
                        <tr>
                          <td class="w-15"><img src="assets/images/movies/latest/02.html" alt="image-icon"
                              class="img-fluid person-img object-cover"></td>
                          <td class="w-20">
                            <div class="font-size-18 d-flex gap-4 text-white fw-500">
                              <span>2</span>
                              <span class="text-capitalize">Advetre <span class="fw-normal text-body">as Christina
                                  Ricci</span></span>
                            </div>
                          </td>
                          <td><span class="fw-500 font-size-18 text-white">2009</span></td>
                        </tr>
                        <tr>
                          <td class="w-15"><img src="assets/images/movies/latest/03.html" alt="image-icon"
                              class="img-fluid person-img object-cover"></td>
                          <td class="w-20">
                            <div class="font-size-18 d-flex gap-4 text-white fw-500">
                              <span>3</span>
                              <span class="text-capitalize">Net Ailo <span class="fw-normal text-body">as Christina
                                  Ricci</span></span>
                            </div>
                          </td>
                          <td><span class="fw-500 font-size-18 text-white">2009</span></td>
                        </tr>
                        <tr>
                          <td class="w-15"><img src="assets/images/movies/latest/04.html" alt="image-icon"
                              class="img-fluid person-img object-cover"></td>
                          <td class="w-20">
                            <div class="font-size-18 d-flex gap-4 text-white fw-500">
                              <span>4</span>
                              <span class="text-capitalize">Ariivaal <span class="fw-normal text-body">as Christina Ricci
                                  (3 Seasons)</span></span>
                            </div>
                          </td>
                          <td><span class="fw-500 font-size-18 text-white">2009</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div id="movies" class="tab-pane animated fadeInUp" role="tabpanel">
                <div class="description-content">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="w-15"><img src="assets/images/movies/latest/04.html" alt="image-icon"
                              class="img-fluid person-img object-cover"></td>
                          <td class="w-20">
                            <div class="font-size-18 d-flex gap-4 text-white fw-500">
                              <span>4</span>
                              <span class="text-capitalize">Ariivaal <span class="fw-normal text-body">as Christina Ricci
                                  (3 Seasons)</span></span>
                            </div>
                          </td>
                          <td><span class="fw-500 font-size-18 text-white">2009</span></td>
                        </tr>
                        <tr>
                          <td class="w-15"><img src="assets/images/movies/latest/03.html" alt="image-icon"
                              class="img-fluid person-img object-cover"></td>
                          <td class="w-20">
                            <div class="font-size-18 d-flex gap-4 text-white fw-500">
                              <span>3</span>
                              <span class="text-capitalize">Net Ailo <span class="fw-normal text-body">as Christina
                                  Ricci</span></span>
                            </div>
                          </td>
                          <td><span class="fw-500 font-size-18 text-white">2009</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div id="tvshows" class="tab-pane animated fadeInUp" role="tabpanel">
                <div class="source-list-content table-responsive">
                  <table class="table custom-table">
                    <thead>
                      <tr>
                        <th>
                          Links
                        </th>
                        <th>
                          Quality
                        </th>
                        <th>
                          Language
                        </th>
                        <th>
                          Player
                        </th>
                        <th>
                          Date Added
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="iq-button">
                            <a href="movie-detail.html" class="btn text-uppercase position-relative">
                              <span class="button-text"> Play Now</span>
                              <i class="fa-solid fa-play"></i>
                            </a>
                          </div>
                        </td>
                        <td>
                          1080p
                        </td>
                        <td>
                          english
                        </td>
                        <td>
                          MusicBee
                        </td>
                        <td>
                          2021-11-28
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="iq-button">
                            <a href="movie-detail.html" class="btn text-uppercase position-relative">
                              <span class="button-text"> Play Now</span>
                              <i class="fa-solid fa-play"></i>
                            </a>
                          </div>
                        </td>
                        <td>
                          800p
                        </td>
                        <td>
                          english
                        </td>
                        <td>
                          5KPlayer
                        </td>
                        <td>
                          2021-11-25
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="iq-button">
                            <a href="movie-detail.html" class="btn text-uppercase position-relative">
                              <span class="button-text"> Play Now</span>
                              <i class="fa-solid fa-play"></i>
                            </a>
                          </div>
                        </td>
                        <td>
                          720p
                        </td>
                        <td>
                          English
                        </td>
                        <td>
                          MediaMonkey
                        </td>
                        <td>
                          2021-11-20
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    </main>

    @endsection
