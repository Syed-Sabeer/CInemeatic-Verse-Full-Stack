@extends('frontend.layouts.main')
@section('main-container')

    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">





                  <article>
                    <div class="iq-author-details d-flex align-items-center justify-content-between gap-2 mb-3">
                      <div class="iq-author-image d-flex align-items-center gap-2">
                        <img src="{{url('frontend/assets/images/user/user1.html')}}" class="img-fluid avatar-40 rounded-circle" alt="user">
                        <div class="gap-1 d-flex align-items-center font-size-14"> By <span>
                            <a href="blog-author.html" class="fw-500"> Sabeer</a>

                          </span>

                        </div>
                        <div class="d-flex">
                          <span style="color: #B0B3B8;" class="font-weight-bold">·&nbsp;&nbsp;</span>
                          <span><a href="blog-author.html"  class="fw-500 follow_link " style="font-weight: bold; color: red;">Follow</a></span>
                        </div>
                      </div>
                      <div class="iq-published-date">
                      </div>
                    </div>
                    <h5 class="mb-3 line-count-1 blog-heading">The Most Anticipated Movies</h5>
                    <p id="description" class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, ad ea! Reiciendis vitae tempora aliquam ullam inventore magnam nesciunt, voluptatum sed minima fugit! Nostrum cupiditate dignissimos sapiente nulla labore atque?</p>
                    <a id="read-more-btn" href="javascript:void(0);">Read More</a>
                    <div class="iq-blog-box">
                      <div class="iq-blog-image clearfix">
                        <a href="blog-detail.html">
                          <img src="{{url('frontend/assets/images/blog/blog1.html')}}" alt="blogImg-01" class="img-fluid w-100">
                        </a>
                      </div>
                      <div class="iq-blog-detail">
                        <div class="iq-blog-meta d-flex">
                          <ul class="list-inline mb-0">
                            <li class="border-gredient-left">
                              <a href="blog-date.html"> <span>February 2, 2019</span></a>
                            </li>
                          </ul>


                        </div>
                        <ul class="iq-blog-meta-cat-tag iq-blogtag mt-2">
                                  <li class="iq-tag-title">
                                      <i class="fas fa-tags" aria-hidden="true"></i>
                                      Tags:
                                  </li>
                                  <li>
                                      <a href="blog-tag.html">
                                      Comedy
                                      </a>
                                  </li>
                                  <li>
                                      <a href="blog-tag.html">
                                      Movie Trailers
                                      </a>
                                  </li>
                                  <li>
                                      <a href="blog-tag.html">
                                      Trailers
                                      </a>
                                  </li>
                                </ul>
                                <div class="iq-blog-meta d-flex mt-2" style="background-color: black; text-align: center;justify-content: center;">
                                  <ul>
                                    <li class="like-btn" onclick="toggleLike(this)">
                                      <i class="fa-solid fa-heart font-s"></i>
                                      <span class="font-s like-count"> &nbsp;13</span>
                                    </li>


                                    <li>



                                        <i data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="fa-solid fa-comment font-s"></i>






                                      <span class="font-s"> &nbsp;9</span>
                                    </li>




                                    <li>
                                      <i class="fa-solid fa-share-nodes font-s"></i>
                                    </li>
                                  </ul>
                                </div>



                                <div>
                                  <article>
                                    <div class="iq-author-details d-flex align-items-center justify-content-between gap-2 mb-3">
                                      <div class="iq-author-image d-flex align-items-center gap-2">
                                        <img src="{{url('frontend/assets/images/user/user1.html')}}" class="img-fluid avatar-40 rounded-circle" alt="user">
                                        <input type="text" name="" id="" placeholder="Write a comment" class="comment-bar">
                                        <button class="comment-post-btn"><i class="fa-solid fa-paper-plane-top"></i></button>

                                      </div>
                                    </div>
                                    </article>





                                </div>


                          </article>



<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Jenny's Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <article>
          <div class="iq-author-details d-flex align-items-center justify-content-between gap-2 mb-3">
            <div class="iq-author-image d-flex align-items-center gap-2">
              <img src="{{url('frontend/assets/images/user/user1.html')}}" class="img-fluid avatar-40 rounded-circle" alt="user">
              <div class="gap-1 d-flex align-items-center font-size-14"> By <span>
                  <a href="blog-author.html" class="fw-500"> Jenny</a>
                </span>
              </div>
              <div class="d-flex">
                <span style="color: #B0B3B8;" class="font-weight-bold">·&nbsp;&nbsp;</span>
                <span><a href="blog-author.html"  class="fw-500 follow_link " style="font-weight: bold; color: red;">Follow</a></span>
              </div>
            </div>
            <div class="iq-published-date">
            </div>
          </div>
          <h5 class="mb-3 line-count-1 blog-heading">The Most Anticipated Movies</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, ad ea! Reiciendis vitae tempora aliquam ullam inventore magnam nesciunt, voluptatum sed minima fugit! Nostrum cupiditate dignissimos sapiente nulla labore atque?</p>
          <div class="iq-blog-box">
            <div class="iq-blog-image clearfix">
              <a href="blog-detail.html">
                <img src="{{url('frontend/assets/images/blog/blog1.html')}}" alt="blogImg-01" class="img-fluid w-100">
              </a>
            </div>
            <div class="iq-blog-detail">
              <div class="iq-blog-meta d-flex">
                <ul class="list-inline mb-0">
                  <li class="border-gredient-left">
                    <a href="blog-date.html"> <span>February 2, 2019</span></a>
                  </li>
                </ul>


              </div>
              <ul class="iq-blog-meta-cat-tag iq-blogtag mt-2">
                        <li class="iq-tag-title">
                            <i class="fas fa-tags" aria-hidden="true"></i>
                            Tags:
                        </li>
                        <li>
                            <a href="blog-tag.html">
                            Comedy
                            </a>
                        </li>
                        <li>
                            <a href="blog-tag.html">
                            Movie Trailers
                            </a>
                        </li>
                        <li>
                            <a href="blog-tag.html">
                            Trailers
                            </a>
                        </li>
                      </ul>
                      <div class="iq-blog-meta d-flex mt-2" style="text-align: center;justify-content: center;">
                        <ul>
                          <li class="like-btn" onclick="toggleLike(this)">
                            <i class="fa-solid fa-heart font-s"></i>
                            <span class="font-s like-count"> &nbsp;13</span>
                          </li>


                          <li>



                              <i data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="fa-solid fa-comment font-s"></i>






                            <span class="font-s"> &nbsp;9</span>
                          </li>




                          <li>
                            <i class="fa-solid fa-share-nodes font-s"></i>
                          </li>
                        </ul>
                      </div>



                      <article>
                        <div class="iq-author-details d-flex align-items-center justify-content-between gap-2 mb-3">
                          <div class="iq-author-image d-flex align-items-center gap-2">
                            <img src="{{url('frontend/assets/images/user/user1.html')}}" class="img-fluid avatar-40 rounded-circle" alt="user">
                            <input type="text" name="" id="" placeholder="Write a comment" class="comment-bar">
                            <button class="comment-post-btn"><i class="fa-solid fa-paper-plane-top"></i></button>

                          </div>
                        </div>
                        </article>




                </article>



                <article class="users-comment">
                  <div class="iq-author-details d-flex align-items-center justify-content-between gap-2 mb-3">
                    <div class="iq-author-image d-flex align-items-center gap-2">
                      <img src="{{url('frontend/assets/images/user/user1.html')}}" class="img-fluid avatar-40 rounded-circle" alt="user">
                      <div class="gap-1 d-flex align-items-center font-size-14">
                        <div>
                          <p class="comments mt-3">lksdfhjlhfjdjkfh Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dignissimos saepe, neque culpa eveniet, cupiditate repudiandae facere impedit maiores mollitia quidem dolorem optio voluptates fugiat, voluptatem ipsa ex earum cum.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>


                <article class="users-comment">
                  <div class="iq-author-details d-flex align-items-center justify-content-between gap-2 mb-3">
                    <div class="iq-author-image d-flex align-items-center gap-2">
                      <img src="{{url('frontend/assets/images/user/user1.html')}}" class="img-fluid avatar-40 rounded-circle" alt="user">
                      <div class="gap-1 d-flex align-items-center font-size-14">
                        <div>
                          <p class="comments mt-3">lksdfhjlhfjdjkfh Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dignissimos saepe, neque culpa eveniet, cupiditate repudiandae facere impedit maiores mollitia quidem dolorem optio voluptates fugiat, voluptatem ipsa ex earum cum.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>


      </div>

    </div>
  </div>
</div>











                </div>
                <div class="col-lg-4 col-sm-12">
                     <div class="widget-area">
                        <div class="widget widget_search">
                           <form method="get" class="search-form" action="#" autocomplete="off">
                              <div class="block-search_inside-wrapper position-relative d-flex">
                                 <input type="search" class="form-control" placeholder="Search" required="">
                                 <button type="submit" class="block-search_button">
                                    <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"></circle>
                                       <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                 </button>
                              </div>
                           </form>
                        </div>
                        <div class="widget iq-widget-blog">
                           <h5 class="widget-title position-relative">Recent Post</h5>
                           <ul class="list-inline p-0 m-0">
                              <li class="d-flex align-items-center gap-4">
                                 <div class="img-holder">
                                    <a href="#">
                                       <img src="{{url('frontend/assets/images/blog/01.html')}}" alt="" class="img-fluid h-100 w-100 object-cover">
                                    </a>
                                 </div>
                                 <div class="post-blog">
                                    <a class="new-link" href="blog-detail.html">
                                       <h6 class="post-title">The Most Anticipated Movies</h6>
                                    </a>
                                    <ul class="list-inline mb-2">
                                       <li class="list-inline-item border-0 mb-0 pb-0">
                                          <a href="#" class="blog-data"> <i class="far fa-calendar-alt me-1" aria-hidden="true"></i>September 23, 2022
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center gap-4">
                                 <div class="img-holder">
                                    <a href="#">
                                    <img src="{{url('frontend/assets/images/blog/blog2.html')}}" alt="" class="img-fluid h-100 w-100 object-cover">
                                    </a>
                                 </div>
                                 <div class="post-blog">
                                    <a class="new-link" href="blog-detail.html">
                                       <h6 class="post-title">Amy Adams Always Dreamed</h6>
                                    </a>
                                    <ul class="list-inline mb-2">
                                       <li class="list-inline-item border-0 mb-0 pb-0">
                                          <a href="#" class="blog-data"> <i class="far fa-calendar-alt me-1" aria-hidden="true"></i>September 23, 2022 </a>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center gap-4">
                                 <div class="img-holder">
                                    <a href="#">
                                    <img src="{{url('frontend/assets/images/blog/blog3.html')}}" alt="" class="img-fluid h-100 w-100 object-cover">
                                    </a>
                                 </div>
                                 <div class="post-blog">
                                    <a class="new-link" href="blog-detail.html">
                                       <h6 class="post-title">WandaVision Will Reveal Scarlet Witch’s Untapped Powers </h6>
                                    </a>
                                    <ul class="list-inline mb-2">
                                       <li class="list-inline-item  border-0 mb-0 pb-0">
                                          <a href="#" class="blog-data"> <i class="far fa-calendar-alt me-1" aria-hidden="true"></i>September 23, 2022
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="widget widget_categories">
                           <h5 class="widget-title position-relative">Categories</h5>
                           <ul class="p-0 m-0 list-unstyled">
                              <li>
                                 <a href="blog-category.html" class="position-relative">Dramas</a>
                                 <span class="post_count"> (4) </span>
                              </li>
                              <li>
                                 <a href="blog-category.html" class="position-relative">Historical</a>
                                 <span class="post_count"> (7) </span>
                              </li>
                              <li>
                                 <a href="blog-category.html" class="position-relative">Movie</a>
                                 <span class="post_count"> (2) </span>
                              </li>
                              <li>
                                 <a href="blog-category.html" class="position-relative">Movie Trailers</a>
                                 <span class="post_count"> (6) </span>
                              </li>
                              <li>
                                 <a href="blog-category.html" class="position-relative">Trailers</a>
                                 <span class="post_count"> (4) </span>
                              </li>
                              <li>
                                 <a href="blog-category.html" class="position-relative">TV Comedies</a>
                                 <span class="post_count"> (3) </span>
                              </li>
                              <li>
                                 <a href="blog-category.html" class="position-relative">TV Rumors</a>
                                 <span class="post_count"> (4) </span>
                              </li>
                              <li class="border-bottom-0">
                                 <a href="blog-category.html" class="position-relative">TV Series</a>
                                 <span class="post_count"> (5) </span>
                              </li>
                           </ul>
                        </div>
                        <div class="widget">
                           <h5 class="widget-title position-relative">Tags</h5>
                           <ul class="p-0 m-0 list-unstyled gap-2 widget_tags">
                              <li>
                                 <a href="blog-tag.html" class="position-relative">Action</a>
                              </li>
                              <li>
                                 <a href="blog-tag.html" class="position-relative">Comedies</a>
                              </li>
                              <li>
                                 <a href="blog-tag.html" class="position-relative">comedy</a>
                              </li>
                              <li>
                                 <a href="blog-tag.html" class="position-relative">Dramas</a>
                              </li>
                              <li>
                                 <a href="blog-tag.html" class="position-relative">Historical</a>
                              </li>
                              <li>
                                 <a href="blog-tag.html" class="position-relative">Horror</a>
                              </li>
                              <li>
                                 <a href="blog-tag.html" class="position-relative">Movie</a>
                              </li>
                              <li>
                                 <a href="blog-tag.html" class="position-relative">Movie Trailers</a>
                              </li>
                              <li>
                                 <a href="blog-tag.html" class="position-relative">Mystery</a>
                              </li>
                              <li>
                                 <a href="blog-tag.html" class="position-relative">Rumors</a>
                              </li>
                           </ul>
                        </div>
                        <div class="widget">
                           <h5 class="widget-title position-relative">Follow Us :</h5>
                           <ul class="p-0 m-0 list-unstyled widget_social_media">
                              <li class="">
                                 <a href="https://www.facebook.com/" class="position-relative"><i class="fab fa-facebook"></i></a>
                              </li>
                              <li class="">
                                 <a href="https://twitter.com/" class="position-relative"><i class="fab fa-twitter"></i></a>
                              </li>
                              <li class="">
                                 <a href="https://github.com/" class="position-relative"><i class="fab fa-github"></i></a>
                              </li>
                              <li class="">
                                 <a href="https://www.instagram.com/" class="position-relative"><i class="fab fa-instagram"></i></a>
                              </li>
                           </ul>
                        </div>
                        <div class="widget text-center">
                            <a  href="../shop/shop.html"> <img class="img-fluid"
                              src="{{url('frontend/assets/images/blog/01.html')}}" loading="lazy" alt="streamit" />
                           </a>
                        </div>
                     </div>                </div>
            </div>
        </div>
    </div>
  </main>

@endsection
