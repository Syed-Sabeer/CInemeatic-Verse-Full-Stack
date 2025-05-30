@extends('frontend.layouts.main')
@section('main-container')


<!-- Banner Start -->
<div class="tv-show-detail">
    <div class="container-fluid">
       <div class="overlay-wrapper iq-main-slider "
          style="background:url(assets/images/tv-show/episodes/main-banner.html); background-repeat: no-repeat;">
          <div class="banner-caption">
             <div class="trending-info p-0">
                 <h1 class="texture-text big-font text-uppercase mt-2">Zombie World</h1>
                 <div class="slider-ratting d-flex align-items-center gap-3" data-animation-in="fadeInLeft">
                     <ul class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                         <li>
                             <i class="fa fa-star" aria-hidden="true"></i>
                         </li>
                         <li>
                             <i class="fa fa-star" aria-hidden="true"></i>
                         </li>
                         <li>
                             <i class="fa fa-star" aria-hidden="true"></i>
                         </li>
                         <li>
                             <i class="fa fa-star-half" aria-hidden="true"></i>
                         </li>
                     </ul>
                     <span class="text-white">4.5 <img src="assets/images/movies/imdb-logo.svg" alt="imdb logo" class="img-fluid ms-2"></span>
                 </div>
                 <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-tag">
                     <li class="trending-list"><a class="text-primary text-uppercase font-size-18"
                         href="view-all-movie.html">Comedy</a></li>
                     <li class="trending-list"><a class="text-primary text-uppercase font-size-18"
                         href="view-all-movie.html">Drama</a></li>
                 </ul>
                 <div class="d-flex flex-wrap align-items-center gap-3 font-size-20 mb-3 fw-500 text-white">
                     <span>Seasons 1 </span>
                     <span>Feb 2019</span>
                 </div>
                 <p class="line-count-2 my-3">
                     The travels of a lone bounty hunter in the outer reaches of the galaxy, far from the authority of the New Republic.
                 </p>
             </div>
             <div class="position-relative my-4">
                <a href="episode.html" class="d-flex align-items-center gap-3">
                   <div class="play-button">
                      <i class="fa-solid fa-play"></i>
                   </div>
                   <h4 class="text-white fw-bold m-0">Watch latest Episode</h4>
                </a>
             </div>
             <div class="d-flex align-items-center flex-wrap gap-4 mb-4">
                 <ul class="list-inline p-0 m-0 share-icons music-play-lists mb-n2 mx-n2">
                     <li class="share">
                     <span><i class="fa-solid fa-share-nodes"></i></span>
                     <div class="share-box">
                         <svg width="15" height="40" viewBox="0 0 15 40" class="share-shape" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" clip-rule="evenodd"
                             d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z"
                             fill="#191919"></path>
                         </svg>
                         <div class="d-flex align-items-center">
                         <a href="#" class="share-ico"><i class="fa-brands fa-facebook-f"></i></a>
                         <a href="#" class="share-ico"><i class="fa-brands fa-twitter"></i></a>
                         <a href="#" class="share-ico"><i class="fa-solid fa-link"></i></a>
                         </div>
                     </div>
                     </li>
                     <li><span><i class="fa-solid fa-heart"></i></span></li>
                     <li><span><i class="fa-solid fa-plus"></i></span></li>
                 </ul>
                 <div class="movie-detail-select">
                     <select name="movieselect" class="form-control movie-select select2-basic-single js-states">
                         <option value="1">Playlist</option>
                         <option value="2">Zombie Island</option>
                         <option value="3">Sand Dust</option>
                         <option value="4">Jumbo Queen</option>
                     </select>
                 </div>
             </div>
             <ul class="iq-blogtag list-unstyled d-flex flex-wrap align-items-center gap-3 p-0">
                 <li class="iq-tag-title text-primary mb-0">
                 <i class="fa fa-tags" aria-hidden="true"></i>
                 Tags:
                 </li>
                 <li><a class="title" href="view-all-movie.html">4K Ultra </a><span
                     class="text-secondary">,</span></li>
                 <li><a class="title" href="view-all-movie.html">Brother</a><span
                     class="text-secondary">,</span></li>
                 <li><a class="title" href="view-all-movie.html">Brother Relationship</a><span
                     class="text-secondary">,</span></li>
                 <li><a class="title" href="view-all-movie.html">Kings</a><span
                     class="text-secondary">,</span></li>
                 <li><a class="title" href="view-all-movie.html">Vikings</a></li>
             </ul>
          </div>
       </div>
    </div>
 </div>
 <!-- Banner End -->

 <!-- Episode Start -->
 <div class="show-episode section-padding">
     <div class="container-fluid">
         <div class="show-movie-section">
             <div class="iq-custom-select d-inline-block">
                 <select class="select2-basic-single js-states form-control">
                     <option value="season1">Season 1</option>
                     <option value="season1">Season 2</option>
                 </select>
             </div>
             <div class="show-custom-tab">
                 <ul class="iq-custom-tab tab-bg-fill nav nav-pills text-center list-inline my-4" role="tablist">
                     <li class="nav-item">
                         <a class="nav-link active show m-0" data-bs-toggle="pill" href="#episodes" role="tab"
                             aria-selected="true">Episodes</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link  m-0" data-bs-toggle="pill" href="#description" role="tab"
                             aria-selected="false">Description</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link  m-0" data-bs-toggle="pill" href="#rate-review" role="tab"
                             aria-selected="false">Rate & Review</a>
                     </li>
                 </ul>
                 <div class="tab-content">
                     <div id="episodes" class="tab-pane animated fadeInUp active show">
                         <div class="row list-inline p-0 mb-0">
                             <div class="col-lg-3 col-sm-12 col-md-6">
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
                                             <span class="border-gredient-left text-white rel-date">October 1, 2020</span>
                                             <span class="text-primary run-time">45min</span>
                                         </div>
                                         <a href="episode.html">
                                             <h5 class="epi-name text-white mb-0"> Zombie
                                                                 Island 1 </h5>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-3 col-sm-12 col-md-6">
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
                                             <span class="border-gredient-left text-white rel-date">October 8, 2020</span>
                                             <span class="text-primary run-time">35min</span>
                                         </div>
                                         <a href="episode.html">
                                             <h5 class="epi-name text-white mb-0"> Zombie
                                                                 Island 2 </h5>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-3 col-sm-12 col-md-6">
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
                                             <span class="border-gredient-left text-white rel-date">October 15, 2020</span>
                                             <span class="text-primary run-time">36min</span>
                                         </div>
                                         <a href="episode.html">
                                             <h5 class="epi-name text-white mb-0"> Zombie
                                                                 Island 3 </h5>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-3 col-sm-12 col-md-6 mt-3 mt-md-0">
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
                                             <span class="border-gredient-left text-white rel-date">October 22, 2020</span>
                                             <span class="text-primary run-time">41min</span>
                                         </div>
                                         <a href="episode.html">
                                             <h5 class="epi-name text-white mb-0"> Zombie
                                                                 Island 4 </h5>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div id="description" class="tab-pane animated fadeInUp">
                         <p class="my-3">
                             The travels of a lone bounty hunter in the outer reaches of the galaxy, far from the authority of the New Republic.
                         </p>
                     </div>
                     <div id="rate-review" class="tab-pane animated fadeInUp">
                         <div class="streamit-reviews">
                             <div id="comments" class="comments-area validate-form">
                                 <p class="masvideos-noreviews mt-3">
                                     There are no reviews yet.
                                 </p>
                             </div>
                             <div class="review_form">
                                 <div class="comment-respond">
                                     <h3 class="fw-500 my-2">
                                         Be the first to review “Zombie Island”
                                     </h3>
                                     <form class="comment-form">
                                         <p class="comment-notes">
                                             <span>
                                                 Your email address will not be published.
                                             </span>
                                             <span> Required fields are marked
                                                 <span class="required"> * </span>
                                             </span>
                                         </p>
                                         <div class="d-flex align-items-center mb-4">
                                             <label>
                                                 Your rating
                                             </label>
                                             <div class="star ms-4 text-primary">
                                                 <span>
                                                 <i class="fa-regular fa-star"></i>
                                                 </span>
                                                 <span>
                                                 <i class="fa-regular fa-star"></i>
                                                 </span>
                                                 <span>
                                                 <i class="fa-regular fa-star"></i>
                                                 </span>
                                                 <span>
                                                 <i class="fa-regular fa-star"></i>
                                                 </span>
                                                 <span>
                                                 <i class="fa-regular fa-star"></i>
                                                 </span>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="mb-2">
                                                         Your review
                                                         <span class="required">
                                                         *
                                                         </span>
                                                     </label>
                                                     <textarea class="form-control" name="comment" cols="5" rows="8" required=""></textarea>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                     <label class="mb-2">
                                                         Name
                                                         <span class="required">
                                                         *
                                                         </span>
                                                     </label>
                                                     <input class="form-control" name="author" type="text" value="" size="30" required="" />
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                     <label class="mb-2">
                                                         Email&nbsp;
                                                         <span class="required">
                                                         *
                                                         </span>
                                                     </label>
                                                     <input class="form-control" name="email" type="email" value="" size="30" required="" />
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="mt-3">
                                                     <input class="form-check-input" type="checkbox" value="" id="check1" checked />
                                                     <label class="form-check-label" for="check1">
                                                         Save my name, email, and website in this browser for the
                                                         next time I comment.
                                                     </label>
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="form-submit mt-4">
                                                     <div class="iq-button">
                                                         <button name="submit" type="submit" id="submit" class="btn text-uppercase position-relative" value="Submit">
                                                             <span class="button-text">Submit</span>
                                                             <i class="fa-solid fa-play"></i>
                                                         </button>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Episode End -->

 <div class="cast-tabs">
     <div class="container-fluid">
         <div class="content-details trending-info g-border iq-rtl-direction">
             <ul class="iq-custom-tab tab-bg-fill d-flex nav nav-pills mb-5 list-inline" role="tablist">
                 <li class="nav-item">
                     <a class="nav-link active show" data-bs-toggle="pill" href="#cast-1" role="tab"
                         aria-selected="true">Cast</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-bs-toggle="pill" href="#crew-1" role="tab" aria-selected="false">Crew</a>
                 </li>
             </ul>
             <div class="tab-content">
                 <div id="cast-1" class="tab-pane animated fadeInUp active show" role="tabpanel">
                   <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3" data-mobile="2" data-mobile-sm="1.1" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
                     <ul class="list-inline swiper-wrapper">
                         <li class="swiper-slide">
                             <div class="cast-images m-0 row align-items-center position-relative">
                                 <div class="col-4 p-0 img-box">
                                     <img src="assets/images/genre/g1.html" class="img-fluid" alt="image" loading="lazy">
                                 </div>
                                 <div class="col-8 block-description">
                                     <h6 class="iq-title">
                                         <a href="person-detail.html" tabindex="0">James Chinlund  </a>
                                     </h6>
                                     <div class="video-time d-flex align-items-center my-2">
                                         <small class="text-white">As James</small>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <li class="swiper-slide">
                             <div class="cast-images m-0 row align-items-center position-relative">
                                 <div class="col-4 p-0 img-box">
                                     <img src="assets/images/genre/g2.html" class="img-fluid" alt="image" loading="lazy">
                                 </div>
                                 <div class="col-8 block-description">
                                     <h6 class="iq-title">
                                         <a href="person-detail.html" tabindex="0">James Earl Jones </a>
                                     </h6>
                                     <div class="video-time d-flex align-items-center my-2">
                                         <small class="text-white">As Jones</small>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </ul>
                   </div>
                 </div>
                 <div id="crew-1" class="tab-pane animated fadeInUp" role="tabpanel">
                   <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3" data-mobile="2" data-mobile-sm="1.1" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
                     <ul class="list-inline swiper-wrapper">
                         <li class="swiper-slide">
                             <div class="cast-images m-0 row align-items-center position-relative">
                                 <div class="col-4 p-0 img-box">
                                     <img src="assets/images/genre/g3.html" class="img-fluid" alt="image" loading="lazy">
                                 </div>
                                 <div class="col-8 block-description starring-desc ">
                                     <h6 class="iq-title">
                                         <a href="person-detail.html" tabindex="0"> Jeff Nathanson </a>
                                     </h6>
                                     <div class="video-time d-flex align-items-center my-2">
                                         <small class="text-white">Writing</small>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <li class="swiper-slide">
                             <div class="cast-images m-0 row align-items-center position-relative">
                                 <div class="col-4 p-0 img-box">
                                     <img src="assets/images/genre/g5.html" class="person__poster--image img-fluid" alt="image" loading="lazy">
                                 </div>
                                 <div class="col-8 block-description starring-desc ">
                                     <h6 class="iq-title">
                                         <a href="person-detail.html" tabindex="0"> Irene Mecchi </a>
                                     </h6>
                                     <div class="video-time d-flex align-items-center my-2">
                                         <small class="text-white">Writing</small>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <li class="swiper-slide">
                             <div class="cast-images m-0 row align-items-center position-relative">
                                 <div class="col-4 p-0 img-box">
                                     <img src="assets/images/genre/g4.html" class="person__poster--image img-fluid" alt="image" loading="lazy">
                                 </div>
                                 <div class="col-8 block-description starring-desc ">
                                     <h6 class="iq-title">
                                         <a href="person-detail.html" tabindex="0"> Karen Gilchrist </a>
                                     </h6>
                                     <div class="video-time d-flex align-items-center my-2">
                                         <small class="text-white">Production</small>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </ul>
                   </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
   </main>

    @endsection
