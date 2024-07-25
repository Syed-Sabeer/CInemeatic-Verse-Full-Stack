@extends('backend.layouts.main')
@section('main-container-admin')

<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-sm-12">
            <div class="card pb-3">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center pb-3">
                    <div class="d-flex align-items-center pt-3">
                        <div class="form-group">
                            <select type="select" class="form-control select2-basic-multiple" placeholder="No Action">
                                <option>No Action</option>
                                <option>Status</option>
                                <option>Delete</option>
                            </select>
                            <button class="btn btn-primary ">Apply</button>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#season-offcanvas" aria-controls="season-offcanvas"><i
                            class="fa-solid fa-plus me-2"></i>Add Movie</button>
                </div>
                <div class="card-body">
                    <div class="table-view table-responsive pt-3 table-space">
                        <table id="seasonTable" class="data-tables table custom-table movie_table" data-toggle="data-table">
                            <thead>
                                <tr class="text-uppercase">
                                    <th class="text-center">
                                        <input type="checkbox" class="form-check-input" />
                                    </th>
                                    <th>Movie</th>
                                    <th>Quality</th>
                                    <th>Category</th>
                                    <th>Publish Date</th>
                                    <th>Movie Access</th>

                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input" />
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="../../assets/images/movie-thumb/03.jpg" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize">arrival 1999</h6>
                                                <small>2h 21m</small>
                                                <small class="text-capitalize">(english, hindi)</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <small>480/720/1080</small>
                                    </td>
                                    <td>
                                        hello
                                    </td>
                                    <td>
                                        <small>2010</small>
                                    </td>
                                    <td>world</td>

                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check form-switch ms-2">
                                                <input class="form-check-input" type="checkbox"  />
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <button type="button" class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit">
                                                <i class="fa-solid fa-pen" data-bs-toggle="offcanvas" data-bs-target="#season-offcanvas-edit" aria-controls="season-offcanvas-edit"></i>
                                            </button>
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                                     </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
        <div class="offcanvas offcanvas-end offcanvas-width-80" tabindex="-1" id="season-offcanvas" aria-labelledby="season-offcanvas-lable">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel1">Add New Movie</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form>
                    <div class="section-form">
                        <fieldset>
                            <legend>Movie</legend>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Movie Name">
                                            <strong>Movie Name</strong> <span class="text-danger">*</span>:
                                        </label>


                                        <input id="Movie Name" type="text" class="form-control " placeholder="Enter Movie Name" value="" min=""
                                           multiple="" />
                                    </div>                            </div>
                                <div class="col-sm-12">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Description">
                                            <strong>Description</strong> :
                                        </label>

                                        <!-- textarea input -->
                                        <textarea id="Description" class="form-control" placeholder="Description"></textarea>
                                    </div>                            </div>


                                    <div class="col-sm-12">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Description">
                                            <strong>Tagline</strong> :
                                        </label>

                                        <input id="tagline" type="text" class="form-control " placeholder="Enter Movie Tagline" value="" min="">
                                    </div>                            </div>




                                <div class="col-sm-12">
                                    <div class="form-group px-5">
                                        <label class="form-label flex-grow-1" for="genres"><strong>Genres:</strong></label>
                                        <select id="genres" type="select" class="form-control select2-basic-multiple"
                                            placeholder="select genres">
                                            <option>Action</option>
                                            <option>Adventure</option>
                                            <option>Animation</option>
                                            <option>Horror</option>
                                            <option>Thriller</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center my-5 px-5">
                                <h5>
                                    <strong>Casts / Crews</strong>
                                </h5>
                                <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#cast-modal">
                                    <i class="fa-solid fa-square-plus me-2"></i>Add Cast / Crew
                                </button>

                                <div class="modal fade" id="cast-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="cast-modal-label">Add Cast/Crew</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                               <form action="#" class="section-form">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group px-5 ">
                                                            <label class="form-label flex-grow-1" for="Person">
                                                                <strong>Person</strong> :
                                                            </label>

                                                            <!-- textarea input -->
                                                            <!-- toggle switch -->
                                                            <!-- common inputs -->
                                                            <input id="Person" type="text" class="form-control " placeholder="Enter Name" value="" min=""
                                                               multiple="" />
                                                        </div>                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group px-5 d-flex flex-column">
                                                            <label class="form-label flex-grow-1" for="occupation"><strong>Occupation:</strong></label>
                                                            <select id="occupation" type="select" class="form-control select2-basic-multiple"
                                                                placeholder="Select Occupation">
                                                                <option>Cast</option>
                                                                <option>Crew</option>
                                                                <option>Production</option>
                                                                <option>Director</option>
                                                                <option>Actor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group px-5 ">
                                                            <label class="form-label flex-grow-1" for="As">
                                                                <strong>As</strong> :
                                                            </label>

                                                            <!-- textarea input -->
                                                            <!-- toggle switch -->
                                                            <!-- common inputs -->
                                                            <input id="As" type="text" class="form-control " placeholder="Played as" value="" min=""
                                                               multiple="" />
                                                        </div>                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group px-5 d-flex justify-content-between">
                                                            <label class="form-label flex-grow-1" for="Status">
                                                                <strong>Status</strong> :
                                                            </label>

                                                            <!-- textarea input -->
                                                            <!-- toggle switch -->
                                                                <div class="form-check form-switch ms-2">
                                                                    <input id="Status" class="form-check-input" type="checkbox"  />
                                                                </div>
                                                        </div>                    </div>
                                                </div>
                                               </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        </div>
                            <div class="row px-5">
                                <div>
                                    <table class="table table-bordered table-strip">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Cast/Crew</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>Cast</td>
                                                <td>ABC</td>
                                                <td>James</td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a aria-current="page" href="#" class="active text-success"
                                                            title="Edit">
                                                            <i class="fa-solid fa-pen mx-4"></i>
                                                        </a>
                                                        <a aria-current="page" href="#" class="active text-danger"
                                                            title="Delete">
                                                            <i class="fa-solid fa-trash me-4"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>Crew</td>
                                                <td>XYZ</td>
                                                <td>Producer</td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a aria-current="page" href="#" class="active text-success"
                                                            title="Edit">
                                                            <i class="fa-solid fa-pen mx-4"></i>
                                                        </a>
                                                        <a aria-current="page" href="#" class="active text-danger"
                                                            title="Delete">
                                                            <i class="fa-solid fa-trash me-4"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-3">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Rated">
                                            <strong>Rated</strong> :
                                        </label>

                                        <!-- textarea input -->
                                        <!-- toggle switch -->
                                        <!-- common inputs -->
                                        <input id="Rated" type="text" class="form-control " placeholder="Rating" value="" min=""
                                           multiple="" />
                                    </div>                            </div>
                                <div class="col-lg-3">
                                    <div class="form-group px-5">
                                        <label class="form-label flex-grow-1" for="genres"><strong>Release
                                                Date:</strong></label>
                                        <input class="form-control flatpickr_humandate" type="text"
                                            placeholder="release date.." data-id="multiple" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="IMDb">
                                            <strong>IMDb</strong> :
                                        </label>

                                        <input id="IMDb" type="text" class="form-control " placeholder="IMDb rating" value="" min=""
                                           multiple="" />
                                    </div>                            </div>
                                <div class="col-lg-3">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Duration">
                                            <strong>Duration</strong> :
                                        </label>

                                        <input id="Duration" type="text" class="form-control " placeholder="Duration in mins" value="" min=""
                                           multiple="" />
                                    </div>                            </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Media</legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Thumbnail">
                                            <strong>Thumbnail</strong> <span class="text-danger">*</span>:
                                        </label>

                                        <!-- textarea input -->
                                        <!-- toggle switch -->
                                        <!-- common inputs -->
                                        <input id="Thumbnail" type="file" class="form-control " placeholder="" value="" min=""
                                           multiple="" />
                                    </div>                            </div>
                                <div class="col-sm-6">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="poster">
                                            <strong>poster</strong> <span class="text-danger">*</span>:
                                        </label>

                                        <!-- textarea input -->
                                        <!-- toggle switch -->
                                        <!-- common inputs -->
                                        <input id="poster" type="file" class="form-control " placeholder="" value="" min=""
                                           multiple="" />
                                    </div>                            </div>
                                <div class="col-sm-12">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Trailer Url">
                                            <strong>Trailer Url</strong> <span class="text-danger">*</span>:
                                        </label>

                                        <!-- textarea input -->
                                        <!-- toggle switch -->
                                        <!-- common inputs -->
                                        <input id="Trailer Url" type="text" class="form-control " placeholder="Trailer Link" value="" min=""
                                           multiple="" />
                                    </div>                            </div>

                                    <div class="col-sm-12">
                                        <div class="form-group px-5 ">
                                            <label class="form-label flex-grow-1" for="Download Link">
                                                <strong>Download Link</strong> <span class="text-danger">*</span>:
                                            </label>


                                            <input id="Download Link" type="text" class="form-control " placeholder="Download Link"  min=""
                                               multiple="" />
                                        </div>                            </div>


                                        <div class="col-sm-12">
                                            <div class="form-group px-5 ">
                                                <label class="form-label flex-grow-1" for="Watch Link">
                                                    <strong>Watch Link</strong> <span class="text-danger">*</span>:
                                                </label>


                                                <input id="Watch Link" type="text" class="form-control " placeholder="Watch Link"  min=""
                                                   multiple="" />
                                            </div>                            </div>



                            </div>

                        </fieldset>
                    </div>
                </form>
            </div>
            <div class="offcanvas-footer border-top">
                <div class="d-grid d-flex gap-3 p-3">
                    <button type="submit" class="btn btn-primary d-block">
                        <i class="fa-solid fa-floppy-disk me-2"></i>Save
                    </button>
                    <button type="button" class="btn btn-outline-primary d-block" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <i class="fa-solid fa-angles-left me-2"></i>Close
                    </button>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end offcanvas-width-80" tabindex="-1" id="season-offcanvas-edit" aria-labelledby="season-offcanvas-edit-lable">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel1">Edit Movie</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form>
                    <div class="section-form">
                        <fieldset>
                            <legend>Movie</legend>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Movie Name">
                                            <strong>Movie Name</strong> <span class="text-danger">*</span>:
                                        </label>

                                        <!-- textarea input -->
                                        <!-- toggle switch -->
                                        <!-- common inputs -->
                                        <input id="Movie Name" type="text" class="form-control " placeholder="Enter Movie Name" value="Arrival 1999" min=""
                                           multiple="" />
                                    </div>                            </div>
                                <div class="col-sm-12">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Description">
                                            <strong>Description</strong> :
                                        </label>

                                        <!-- textarea input -->
                                        <textarea id="Description" class="form-control" placeholder="Description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</textarea>
                                    </div>                            </div>
                                    <div class="col-sm-12">
                                        <div class="form-group px-5 ">
                                            <label class="form-label flex-grow-1" for="Description">
                                                <strong>Tagline</strong> :
                                            </label>

                                            <input id="tagline" type="text" class="form-control " placeholder="Enter Movie Tagline" value="" min="">
                                        </div>                            </div>

                                <div class="col-sm-6">
                                    <div class="form-group px-5">
                                        <label class="form-label flex-grow-1"
                                            for="language"><strong>Language:</strong></label>
                                        <select id="language" type="select" class="form-control select2-basic-multiple"
                                            placeholder="select language">
                                            <option>Hindi</option>
                                            <option selected>English</option>
                                            <option>French</option>
                                            <option>Marathi</option>
                                            <option>Gujrati</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group px-5">
                                        <label class="form-label flex-grow-1" for="genres"><strong>Genres:</strong></label>
                                        <select id="genres" type="select" class="form-control select2-basic-multiple"
                                            placeholder="select genres">
                                            <option>Action</option>
                                            <option>Adventure</option>
                                            <option selected>Animation</option>
                                            <option>Horror</option>
                                            <option>Thriller</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center my-5 px-5">
                                <h5>
                                    <strong>Casts / Crews</strong>
                                </h5>
                                <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#cast-modal-edit">
                                    <i class="fa-solid fa-square-plus me-2"></i>Edit Cast / Crew
                                </button>

                                <div class="modal fade" id="cast-modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="cast-modal-label">Edit Cast/Crew</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                               <form action="#" class="section-form">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group px-5 ">
                                                            <label class="form-label flex-grow-1" for="Person">
                                                                <strong>Person</strong> :
                                                            </label>

                                                            <!-- textarea input -->
                                                            <!-- toggle switch -->
                                                            <!-- common inputs -->
                                                            <input id="Person" type="text" class="form-control " placeholder="Person Name" value="Austin Robertson" min=""
                                                               multiple="" />
                                                        </div>                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group px-5 d-flex flex-column">
                                                            <label class="form-label flex-grow-1" for="occupation"><strong>Occupation:</strong></label>
                                                            <select id="occupation" type="select" class="form-control select2-basic-multiple"
                                                                placeholder="Select Occupation">
                                                                <option>Cast</option>
                                                                <option>Crew</option>
                                                                <option>Production</option>
                                                                <option selected >Director</option>
                                                                <option>Actor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group px-5 ">
                                                            <label class="form-label flex-grow-1" for="As">
                                                                <strong>As</strong> :
                                                            </label>

                                                            <!-- textarea input -->
                                                            <!-- toggle switch -->
                                                            <!-- common inputs -->
                                                            <input id="As" type="text" class="form-control " placeholder="Played as" value="XYZ" min=""
                                                               multiple="" />
                                                        </div>                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group px-5 d-flex justify-content-between">
                                                            <label class="form-label flex-grow-1" for="Status">
                                                                <strong>Status</strong> :
                                                            </label>

                                                            <!-- textarea input -->
                                                            <!-- toggle switch -->
                                                                <div class="form-check form-switch ms-2">
                                                                    <input id="Status" class="form-check-input" type="checkbox" checked />
                                                                </div>
                                                        </div>                    </div>
                                                </div>
                                               </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        </div>
                            <div class="row px-5">
                                <div>
                                    <table class="table table-bordered table-strip">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Cast/Crew</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>Cast</td>
                                                <td>ABC</td>
                                                <td>James</td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a aria-current="page" href="#" class="active text-success"
                                                            title="Edit">
                                                            <i class="fa-solid fa-pen mx-4"></i>
                                                        </a>
                                                        <a aria-current="page" href="#" class="active text-danger"
                                                            title="Delete">
                                                            <i class="fa-solid fa-trash me-4"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>Crew</td>
                                                <td>XYZ</td>
                                                <td>Producer</td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <a aria-current="page" href="#" class="active text-success"
                                                            title="Edit">
                                                            <i class="fa-solid fa-pen mx-4"></i>
                                                        </a>
                                                        <a aria-current="page" href="#" class="active text-danger"
                                                            title="Delete">
                                                            <i class="fa-solid fa-trash me-4"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-3">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Rated">
                                            <strong>Rated</strong> :
                                        </label>

                                        <!-- textarea input -->
                                        <!-- toggle switch -->
                                        <!-- common inputs -->
                                        <input id="Rated" type="text" class="form-control " placeholder="Rating" value="" min=""
                                           multiple="" />
                                    </div>                            </div>
                                <div class="col-lg-3">
                                    <div class="form-group px-5">
                                        <label class="form-label flex-grow-1" for="genres"><strong>Release
                                                Date:</strong></label>
                                        <input class="form-control flatpickr_humandate" type="text"
                                            placeholder="release date.." data-id="multiple" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="IMDb">
                                            <strong>IMDb</strong> :
                                        </label>

                                        <input id="IMDb" type="text" class="form-control " placeholder="IMDb rating" value="" min=""
                                           multiple="" />
                                    </div>                            </div>
                                <div class="col-lg-3">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Duration">
                                            <strong>Duration</strong> :
                                        </label>

                                        <input id="Duration" type="text" class="form-control " placeholder="Duration in mins" value="" min=""
                                           multiple="" />
                                    </div>                            </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Media</legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Thumbnail">
                                            <strong>Thumbnail</strong> <span class="text-danger">*</span>:
                                        </label>

                                        <!-- textarea input -->
                                        <!-- toggle switch -->
                                        <!-- common inputs -->
                                        <input id="Thumbnail" type="file" class="form-control " placeholder="" value="" min=""
                                           multiple="" />
                                    </div>                            </div>
                                <div class="col-sm-6">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="poster">
                                            <strong>poster</strong> <span class="text-danger">*</span>:
                                        </label>

                                        <!-- textarea input -->
                                        <!-- toggle switch -->
                                        <!-- common inputs -->
                                        <input id="poster" type="file" class="form-control " placeholder="" value="" min=""
                                           multiple="" />
                                    </div>                            </div>
                                <div class="col-sm-12">
                                    <div class="form-group px-5 ">
                                        <label class="form-label flex-grow-1" for="Trailer Url">
                                            <strong>Trailer Url</strong> <span class="text-danger">*</span>:
                                        </label>


                                        <input id="Trailer Url" type="text" class="form-control " placeholder="Trailer Link"  min=""
                                           multiple="" />
                                    </div>                            </div>

                                    <div class="col-sm-12">
                                        <div class="form-group px-5 ">
                                            <label class="form-label flex-grow-1" for="Download Link">
                                                <strong>Download Link</strong> <span class="text-danger">*</span>:
                                            </label>


                                            <input id="Download Link" type="text" class="form-control " placeholder="Download Link" min=""
                                               multiple="" />
                                        </div>                            </div>


                                        <div class="col-sm-12">
                                            <div class="form-group px-5 ">
                                                <label class="form-label flex-grow-1" for="Watch Link">
                                                    <strong>Watch Link</strong> <span class="text-danger">*</span>:
                                                </label>


                                                <input id="Watch Link" type="text" class="form-control " placeholder="Watch Link" value="www.demo.com" min=""
                                                   multiple="" />
                                            </div>                            </div>




                            </div>

                        </fieldset>
                    </div>
                </form>
            </div>
            <div class="offcanvas-footer border-top">
                <div class="d-grid d-flex gap-3 p-3">
                    <button type="submit" class="btn btn-primary d-block">
                        <i class="fa-solid fa-floppy-disk me-2"></i>Save
                    </button>
                    <button type="button" class="btn btn-outline-primary d-block" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <i class="fa-solid fa-angles-left me-2"></i>Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>


    @endsection
