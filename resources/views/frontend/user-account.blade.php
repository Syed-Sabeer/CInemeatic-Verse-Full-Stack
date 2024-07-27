@extends('frontend.layouts.main')
@section('main-container')

<main>


    <article>

      <div class="container">

        <div class="profile">
<section class="pro-section">
          <div class="profile-image d-block">

            <img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces" alt="">


    <div class="iq-button mt-4 follow-section">
        <a href="javascript:void(0)" class=" follow-btn">
            <span class="button-text">FOLLOW</span>
        </a>

    </div>

          </div>
        </section>
          <section class="profile-data">
          <div class="profile-user-settings">

            <h3 class="profile-user-name">Syed Sabeer Faisal</h3>



            <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fa-solid fa-ellipsis-vertical"></i></button>

          </div>

          <div class="profile-stats" >

            <ul>
              <li ><span class="profile-stat-count">164</span> posts</li>
              <li><span class="profile-stat-count stat-followers" >188</span> followers</li>
              <li><span class="profile-stat-count stat-likes">206</span> Likes </li>
            </ul>


          </div>

          <div class="profile-bio">
<span style="font-weight: bold;">Sabeer</span>
            <p>dolor sit, amet consectetur adipisicing elit 📷✈️🏕️
              <br> Lorem ipsum dolor sit amet consectetur, adipi
            </p>

          </div>



        </section>



        </div>



        <section class="for_mobile_screen">

          <section class="pro-section_mobile_screen d-flex">
            <div class="profile-image profile-image_mobile_screen d-flex">

              <img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces" alt="">

            </div>
<div class="d-block" style="margin-left: 7%;">
            <div class="profile-user-settings_mobile_screen d-flex">

              <h3 class="profile-user-name_mobile_screen d-flex" >srcverse</h3>



              <button style="margin-top: -10%; margin-left: 5%;" class="btn profile-settings-btn_mobile_screen d-flex" aria-label="profile settings"><i class="fa-solid fa-ellipsis-vertical"></i></button>



            </div>



            <div class="d-flex follow_sec_mob">
              <a href="javascript:void(0)" class="follow-btn-mob">
                  <span class="button-text" style="font-size: 12px;">FOLLOW</span>
              </a>

          </div>
        </div>
          </section>


          <section class="profile-data_mob">


          <div class="bio_mobile_screen">
            <span style="font-weight: bold;">Syed Sabeer</span>
            <p>dolor sit, amet consectetur adipisicing elit 📷✈️🏕️
              <br> Lorem ipsum dolor sit amet consectetur, adipi
            </p>
          </div>
          <div class="stats_mobile_screen">
    <ul>
      <li><span>164</span> posts</li>
      <li><span>188</span> followers</li>
      <li><span>206</span> likes</li>
    </ul>
  </div>


</section>

        </section>



        <div class="profile-box" style="justify-content: center;">

            <label style="font-weight: bold; font-family: Arial, Helvetica, sans-serif;">Upload: </label>
           <input type="text" placeholder="What's on your mind?" class="upload-input ml-5" data-bs-toggle="modal" data-bs-target="#addNewPlaylist">
           <i data-bs-toggle="modal" data-bs-target="#addNewPlaylist" class="fa-solid fa-photo-film" style="color: red; font-size: 1.2rem;"></i>

       </div>
       <div class="modal fade" id="addNewPlaylist" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-lg">
           <div class="modal-content border-0">
             <div class="modal-header border-0">
               <div>
                   <h1 class="modal-title text-capitalize fs-5 fw-500">Create new Post</h1>
               </div>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <form id="uploadForm" action="{{ route('user.account.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                   <div class="form-group">
                       <label class="text-white fw-500 mb-2">What's  on your mind ?</label>
                       <textarea name="detail" class="form-control" cols="3"></textarea>
                   </div>
                   <div class="form-group">
                       <label class="text-white fw-500 mb-2">Privacy</label>
                       <select class="form-control" name="privacy">
                           <option>Public</option>
                           <option>Private</option>
                       </select>
                   </div>
                   <div class="form-group">
                       <label class="text-white fw-500">Upload Image/Video</label>

                       <input type="file" class="form-control mt-2" name="post">
                   </div>
                   <div class="form-group d-flex align-items-center gap-3 mt-5">
                    <button type="button" class="btn btn-sm btn-light text-uppercase fw-medium" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-primary text-uppercase fw-medium">Upload</button>
                </div>
               </form>
             </div>
           </div>
         </div>
       </div>
       <div class="modal fade" id="exampleModalupload" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Post Sent For Approval</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your post will be reviewed within 24 hours <i class="fa-regular fa-clock" style="color: #0bea1a;"></i>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



        <div class="tabs">
          <div class="container-fluid">
              <div class="content-details iq-custom-tab-style-two">
                  <ul class="d-flex justify-content-center nav nav-pills tab-header" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active show" data-bs-toggle="pill" href="#playlist" role="tab" aria-selected="true">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="pill" href="#watchlist" role="tab" aria-selected="false">Post</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="pill" href="#favorites" role="tab" aria-selected="false">Videos</a>
                      </li>
                  </ul>
                  <div class="tab-content px-0">
                      <div id="playlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                          <div class="overflow-hidden mt-5">

                              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">

                                <div class="col mb-4 col-sm-4 col-md-3">
                              <div class="watchlist-warpper card-hover-style-two">
                                  <div class="block-images position-relative w-100">
                                    <div class="img-box">
                                      <a data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                      <i class="fa-light fa-clapperboard-play icon-post-type icon text-primary" style="font-weight: bold;"></i>
                                      <i data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="fas fa-play icon-play icon text-primary" style="font-weight: bold;"></i>
                                      <img src="../assets/images/movies/playlist/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                  </div>
                                      <div class="card-description">
                                          <h5 class="text-capitalize fw-500"> <a href="#"> </a> </h5>
                                          <div class="d-flex align-items-center gap-4">
                                              <div class="d-flex align-items-center gap-1 font-size-15">
                                                     <i class="fa-solid fa-heart text-primary"></i>
                                                  <span class="text-body fw-semibold text-capitalize">21</span>
                                              </div>
                                              <div class="d-flex align-items-center gap-1 font-size-15">
                                                <i data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="fa-solid fa-comment text-primary"></i>
                                                  <span class="text-body fw-semibold text-capitalize">2</span>
                                              </div>



                                          </div>
                                     </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col mb-4 col-sm-4 col-md-3">
                            <div class="watchlist-warpper card-hover-style-two">
                                <div class="block-images position-relative w-100">
                                  <div class="img-box">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="position-absolute top-0 bottom-0 start-0 end-0"></a>

                                    <i data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="fa-regular fa-eye text-primary icon-play" style="font-weight: bold;"></i>
                                    <i class="fa-regular fa-image icon-post-type text-primary" style="font-weight: bold;"></i>

                                    <img src="../assets/images/movies/playlist/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                </div>
                                    <div class="card-description">
                                        <h5 class="text-capitalize fw-500"> <a href="#"> </a> </h5>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="d-flex align-items-center gap-1 font-size-15">
                                                   <i class="fa-solid fa-heart text-primary"></i>
                                                <span class="text-body fw-semibold text-capitalize">21</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-1 font-size-15">
                                              <i data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="fa-solid fa-comment text-primary"></i>
                                                <span class="text-body fw-semibold text-capitalize">2</span>
                                            </div>



                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                              </div>
                          </div>
                      </div>





                      <div id="watchlist" class="tab-pane animated fadeInUp" role="tabpanel">
                          <div class="overflow-hidden">
                            <!-- <div class="section-padding">
                              <div class="container"> -->
                                  <div class="row row-cols-lg-4 row-cols-md-3 row-cols-1">

                                    <div class="col mb-4">
                                      <div class="watchlist-warpper card-hover-style-two">
                                          <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                              <a data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="position-absolute top-0 bottom-0 start-0 end-0"></a>

                                              <i data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="fa-regular fa-eye text-primary icon-play" style="font-weight: bold;"></i>
                                              <i class="fa-regular fa-image icon-post-type text-primary" style="font-weight: bold;"></i>

                                              <img src="../assets/images/movies/playlist/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                          </div>
                                              <div class="card-description">
                                                  <h5 class="text-capitalize fw-500"> <a href="#"> </a> </h5>
                                                  <div class="d-flex align-items-center gap-4">
                                                      <div class="d-flex align-items-center gap-1 font-size-15">
                                                             <i class="fa-solid fa-heart text-primary"></i>
                                                          <span class="text-body fw-semibold text-capitalize">21</span>
                                                      </div>
                                                      <div class="d-flex align-items-center gap-1 font-size-15">
                                                        <i data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="fa-solid fa-comment text-primary"></i>
                                                          <span class="text-body fw-semibold text-capitalize">2</span>
                                                      </div>



                                                  </div>
                                             </div>
                                          </div>
                                      </div>
                                  </div>

                                  </div>
                              <!-- </div>
                          </div> -->
                          </div>
                      </div>
                      <div id="favorites" class="tab-pane animated fadeInUp" role="tabpanel">
                          <div class="overflow-hidden">
                              <div class="d-flex align-items-center justify-content-between my-4">
                                  <h5 class="main-title text-capitalize mb-0">My favourite</h5>
                              </div>
                              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                                <div class="col mb-4">
                                  <div class="watchlist-warpper card-hover-style-two">
                                      <div class="block-images position-relative w-100">
                                        <div class="img-box">
                                          <a data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                          <i class="fa-light fa-clapperboard-play icon-post-type icon text-primary" style="font-weight: bold;"></i>
                                          <i data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="fas fa-play icon-play icon text-primary" style="font-weight: bold;"></i>
                                          <img src="../assets/images/movies/playlist/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                      </div>
                                          <div class="card-description">
                                              <h5 class="text-capitalize fw-500"> <a href="#"> </a> </h5>
                                              <div class="d-flex align-items-center gap-4">
                                                  <div class="d-flex align-items-center gap-1 font-size-15">
                                                         <i class="fa-solid fa-heart text-primary"></i>
                                                      <span class="text-body fw-semibold text-capitalize">21</span>
                                                  </div>
                                                  <div class="d-flex align-items-center gap-1 font-size-15">
                                                    <i data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="fa-solid fa-comment text-primary"></i>
                                                      <span class="text-body fw-semibold text-capitalize">2</span>
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
      </div>

      </div>
      <!-- End of container -->

    </article>





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
                  <img src="../assets/images/user/user1.html" class="img-fluid avatar-40 rounded-circle" alt="user">
                  <div class="gap-1 d-flex align-items-center font-size-14"> By <span>
                      <a href="blog-author.html" class="fw-500"> Jenny</a>
                    </span>
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
                    <img src="../assets/images/blog/blog1.html" alt="blogImg-01" class="img-fluid w-100">
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
                                <img src="../assets/images/user/user1.html" class="img-fluid avatar-40 rounded-circle" alt="user">
                                <input type="text" name="" id="" placeholder="Write a comment" class="comment-bar">
                                <button class="comment-post-btn"><i class="fa-solid fa-paper-plane-top"></i></button>

                              </div>
                            </div>
                            </article>




                    </article>



                    <article class="users-comment">
                      <div class="iq-author-details d-flex align-items-center justify-content-between gap-2 mb-3">
                        <div class="iq-author-image d-flex align-items-center gap-2">
                          <img src="../assets/images/user/user1.html" class="img-fluid avatar-40 rounded-circle" alt="user">
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
                          <img src="../assets/images/user/user1.html" class="img-fluid avatar-40 rounded-circle" alt="user">
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


  </main>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const uploadForm = document.getElementById('uploadForm');

        uploadForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission

            const formData = new FormData(uploadForm);

            fetch(uploadForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => {
                if (response.ok) {
                    // Hide the first modal
                    const addNewPlaylistModal = bootstrap.Modal.getInstance(document.getElementById('addNewPlaylist'));
                    addNewPlaylistModal.hide();

                    // Show the success modal
                    const exampleModalupload = new bootstrap.Modal(document.getElementById('exampleModalupload'));
                    exampleModalupload.show();

                    // Refresh the page after a short delay to clear old data in the modal
                    setTimeout(() => {
                        window.location.reload();
                    }, 3000); // Adjust the delay as needed (3000ms = 3 seconds)
                } else {
                    return response.json().then(data => {
                        throw new Error(data.message || 'Something went wrong');
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to upload post. Please try again.');
            });
        });
    });
</script>

@endsection
