@extends('frontend.layouts.main')
@section('main-container')

<!-- Banner Start -->
<div class="iq-main-slider site-video">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-0">
                    <video id="my-video" poster="https://i.ytimg.com/vi_webp/rKVEoyTedv4/maxresdefault.webp"
                        class="video-js vjs-big-play-centered w-100" controls preload="auto"
                        data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=QCGq1epI9pQ"}], "youtube": { "iv_load_policy": 1 } }'>
                        <source src="assets/images/video/sample-video.mp4" type="video/mp4" />
                        <source src="MY_VIDEO.html" type="video/webm" />
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<div class="details-part">
    <div class="container-fluid">
       <div class="trending-info mt-4 pt-0 pb-4">
            <div class="row">
                <div class="col-md-9 col-12 mb-auto">
                    <div class="d-md-flex">
                        <h2 class="trending-text fw-bold texture-text text-uppercase mt-0 fadeInLeft animated"
                        data-animation-in="fadeInLeft" data-delay-in="0.6" style="opacity: 1; animation-delay: 0.6s">
                         Football 3
                        </h2>
                        <div class="slider-ratting d-flex align-items-center gap-2 ms-md-3 ms-0">
                            <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-half" aria-hidden="true"></i></li>
                            </ul>
                            <span class="text-white">3.3  <img src="assets/images/movies/imdb-logo.svg" alt="imdb logo" class="img-fluid ms-2"></span>
                        </div>
                    </div>
                    <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-tag">
                        <li class="font-size-18">S01E03</li>
                        <li class="font-size-18">Football 3</li>
                        <li class="font-size-18">1.2K views</li>
                    </ul>
                    <ul class="list-inline p-0 m-0 share-icons music-play-lists mb-3">
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
                        <li><span><i class="fa-solid fa-download"></i></span></li>

                    </ul>
                </div>
                <div class="trailor-video col-md-3 col-12 mt-lg-0 mt-4 mb-md-0 mb-1 text-lg-right">
                    <a href="https://www.youtube.com/watch?v=QCGq1epI9pQ"
                        class="video-open playbtn block-images position-relative playbtn_thumbnail">
                        <img src="assets/images/genre/01.html"
                        class="attachment-medium-large size-medium-large wp-post-image" alt="" loading="lazy" />
                        <span class="content btn btn-transparant iq-button">
                        <i class="fa fa-play me-2 text-white"></i>
                        <span>Trailer Link</span>
                        </span>
                    </a>
                </div>
            </div>
       </div>
       <!-- Movie Source Start -->
       <div class="content-details trending-info">
         <ul class="iq-custom-tab tab-bg-gredient-center d-flex nav nav-pills align-items-center text-center mb-5 justify-content-center list-inline"
           role="tablist">
           <li class="nav-item">
             <a class="nav-link active show" data-bs-toggle="pill" href="#description-01" role="tab" aria-selected="true">
               Description
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" data-bs-toggle="pill" href="#review-01" role="tab" aria-selected="false">
               Rate &amp; Review
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" data-bs-toggle="pill" href="#source-01" role="tab" aria-selected="false">
               Sources
             </a>
           </li>
         </ul>
         <div class="tab-content">
           <div id="description-01" class="tab-pane animated fadeInUp active show" role="tabpanel">
             <div class="description-content">
               <p>
                 Zombie Island is a 1998 direct-to-video animated comedy horror film
                 based on Hanna-Barbera's Scooby-Doo Saturday-morning cartoons. In the
                 film, Shaggy, Scooby, Fred, Velma, and Daphne reunite after a
                 year-long hiatus from Mystery, Inc. to investigate a bayou island said
                 to be haunted by the ghost of the pirate Morgan Moonscar. The film was
                 directed by Jim Stenstrum, from a screenplay by Glenn Leopold.
               </p>
             </div>
           </div>
           <div id="review-01" class="tab-pane animated fadeInUp" role="tabpanel">
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
                         <div class="mt-3 mt-3 d-flex gap-2 align-items-center">
                             <input class="form-check-input mt-0" type="checkbox" value="" id="check1" checked />
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
                 </div>
               </div>
             </div>
           </div>
           <div id="source-01" class="tab-pane animated fadeInUp" role="tabpanel">
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
       <!-- Movie Source End -->    </div>
</div>


<section class="recommended-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
        <div class="d-flex align-items-center justify-content-between px-3 pt-2 my-4">
            <h5 class="main-title text-capitalize mb-0">Latest Episodes</h5>
        </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="4" data-tab="2" data-mobile="2"
          data-mobile-sm="1" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
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
                          <span class="border-gredient-left text-white rel-date">October 1, 2020</span>
                          <span class="text-primary run-time">45min</span>
                      </div>
                      <a href="episode.html">
                          <h5 class="epi-name text-white mb-0"> Zombie Island 1 </h5>
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
                          <span class="border-gredient-left text-white rel-date">October 8, 2020</span>
                          <span class="text-primary run-time">35min</span>
                      </div>
                      <a href="episode.html">
                          <h5 class="epi-name text-white mb-0"> Zombie Island 2 </h5>
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
                          <span class="border-gredient-left text-white rel-date">October 15, 2020</span>
                          <span class="text-primary run-time">36min</span>
                      </div>
                      <a href="episode.html">
                          <h5 class="epi-name text-white mb-0"> Zombie Island 3 </h5>
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
                         <span class="border-gredient-left text-white rel-date">October 22, 2020</span>
                         <span class="text-primary run-time">41min</span>
                     </div>
                     <a href="episode.html">
                         <h5 class="epi-name text-white mb-0"> Zombie Island 4 </h5>
                     </a>
                 </div>
             </div>
            </li>
            <li class="swiper-slide">
             <div class="episode-block">
                 <div class="block-image position-relative">
                     <a href="episode.html">
                         <img src="assets/images/tv-show/episodes/01.html" class="img-fluid img-zoom" alt="showImg-" loading="lazy">
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
                         <h5 class="epi-name text-white mb-0"> Zombie Island 4 </h5>
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
</section>


  </main>


    @endsection
