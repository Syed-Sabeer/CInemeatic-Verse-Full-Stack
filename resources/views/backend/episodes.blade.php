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
                        data-bs-target="#season-offcanvas" aria-controls="season-offcanvas">
                        <i class="fa-solid fa-plus me-2"></i>Add Episodes
                    </button>
                </div>
                <div class="card-body">
                     <div class="table-view table-responsive table-space">
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
                                    <th>Seo</th>
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
                                    <td>!!!</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check form-switch ms-2">
                                                <input class="form-check-input" type="checkbox" checked />
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
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input" />
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="../../assets/images/movie-thumb/04.jpg" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize">day of darkness</h6>
                                                <small>2h 40m</small>
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
                                    <td>!!!</td>
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
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input" />
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="../../assets/images/movie-thumb/05.jpg" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize">don jon</h6>
                                                <small>3h</small>
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
                                    <td>!!!</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check form-switch ms-2">
                                                <input class="form-check-input" type="checkbox" checked />
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
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input" />
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="../../assets/images/movie-thumb/06.jpg" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize">mega fun</h6>
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
                                    <td>!!!</td>
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
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input" />
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="../../assets/images/movie-thumb/07.jpg" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize">my true friends</h6>
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
                                    <td>!!!</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check form-switch ms-2">
                                                <input class="form-check-input" type="checkbox" checked />
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
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input" />
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="../../assets/images/movie-thumb/08.jpg" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize">night mare</h6>
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
                                    <td>!!!</td>
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
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input" />
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="../../assets/images/movie-thumb/09.jpg" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize">portable</h6>
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
                                    <td>!!!</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check form-switch ms-2">
                                                <input class="form-check-input" type="checkbox" checked />
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
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input" />
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="../../assets/images/movie-thumb/10.jpg" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize">suffered</h6>
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
                                    <td>!!!</td>
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
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input" />
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="../../assets/images/movie-thumb/02.jpg" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize">the witcher</h6>
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
                                    <td>!!!</td>
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
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input" />
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="../../assets/images/movie-thumb/01.jpg" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize">troll hunter</h6>
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
                                    <td>!!!</td>
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
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input" />
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="../../assets/images/movie-thumb/01.jpg" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize">troll hunter</h6>
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
                                    <td>!!!</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check form-switch ms-2">
                                                <input class="form-check-input" type="checkbox" checked />
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
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input" />
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="../../assets/images/movie-thumb/01.jpg" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize">troll hunter</h6>
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
                                    <td>!!!</td>
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
                                </tr>                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="offcanvas offcanvas-end offcanvas-width-80" tabindex="-1" id="season-offcanvas"
                aria-labelledby="season-offcanvas-lable">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel1">Add New Episodes</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form>
                        <div class="section-form">
                            <fieldset>
                                <legend>Episodes</legend>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group px-5">
                                            <label class="form-label flex-grow-1"
                                                for="movie-access"><strong>Show:</strong></label>
                                            <select id="movie-access" type="select"
                                                class="form-control select2-basic-multiple"
                                                placeholder="select movie access">
                                                <option>Zombie Island</option>
                                                <option>Folke The Fat</option>
                                                <option>The Mandalorian</option>
                                                <option>Criminals And Agents</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group px-5">
                                            <label class="form-label flex-grow-1"
                                                for="language"><strong>Seasons:</strong></label>
                                            <select id="language" type="select" class="form-control select2-basic-multiple"
                                                placeholder="select language">
                                                <option>Season 1</option>
                                                <option>Season 2</option>
                                                <option>Season 3</option>
                                                <option>Season 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group px-5 ">
                                            <label class="form-label flex-grow-1" for="Episode Name">
                                                <strong>Episode Name</strong> <span class="text-danger">*</span>:
                                            </label>

                                            <!-- textarea input -->
                                            <!-- toggle switch -->
                                            <!-- common inputs -->
                                            <input id="Episode Name" type="text" class="form-control " placeholder="Enter Movie Name" value="" min=""
                                               multiple="" />
                                        </div>                                </div>
                                    <div class="col-sm-12">
                                        <div class="form-group px-5 ">
                                            <label class="form-label flex-grow-1" for="Description">
                                                <strong>Description</strong> :
                                            </label>

                                            <!-- textarea input -->
                                            <textarea id="Description" class="form-control" placeholder="Description"></textarea>
                                        </div>                                </div>
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
                                    </div>                            </div>
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
                                            <label class="form-label flex-grow-1" for="Content Rating">
                                                <strong>Content Rating</strong> :
                                            </label>

                                            <!-- textarea input -->
                                            <!-- toggle switch -->
                                            <!-- common inputs -->
                                            <input id="Content Rating" type="text" class="form-control " placeholder="Rating" value="" min=""
                                               multiple="" />
                                        </div>                                </div>
                                    <div class="col-lg-3">
                                        <div class="form-group px-5">
                                            <label class="form-label flex-grow-1" for="genres"><strong>Release
                                                    Date:</strong></label>
                                            <input class="form-control flatpickr_humandate" type="text"
                                                placeholder="release date.." data-id="multiple" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group px-5">
                                            <label class="form-label flex-grow-1" for="genres"><strong>Publice
                                                    Date:</strong></label>
                                            <input class="form-control flatpickr_humandate" type="text"
                                                placeholder="publice date.." data-id="multiple" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group px-5 ">
                                            <label class="form-label flex-grow-1" for="Duration">
                                                <strong>Duration</strong> :
                                            </label>

                                            <!-- textarea input -->
                                            <!-- toggle switch -->
                                            <!-- common inputs -->
                                            <input id="Duration" type="text" class="form-control " placeholder="Duration in mins" value="" min=""
                                               multiple="" />
                                        </div>                                </div>
                                </div>

                                <div class="col-lg-12 mt-4 px-5">
                                    <div class="form-group px-3 d-flex align-self-start justify-content-between"
                                        name="status">
                                        <label class="form-label flex-grow-1" for="Status"><strong>Status</strong>
                                            <!--v-if-->:</label><!-- textarea input --><!-- toggle switch -->
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check form-switch ms-2"><input id="Status"
                                                    class="form-check-input" type="checkbox"></div>
                                        </div><span class="text-danger"></span>
                                    </div>
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
                                        </div>                                </div>
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
                                        </div>                                </div>
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
                                        </div>                                </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center my-5 px-5">
                                    <h5>
                                        <strong>Video Quality</strong>
                                    </h5>
                                    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#video-modal">
                                        <i class="fa-solid fa-square-plus me-2"></i>Add Video
                                    </button>

                                    <div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="video-modal-label">Add Video</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="#" class="section-form">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group px-5 d-flex flex-column">
                                                                    <label class="form-label flex-grow-1"
                                                                        for="quality"><strong>Quality:</strong></label>
                                                                    <select id="quality" type="select" class="form-control select2-basic-multiple"
                                                                        placeholder="Select Quality">
                                                                        <option>480p</option>
                                                                        <option>720p</option>
                                                                        <option>1080p</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group px-5 ">
                                                                    <label class="form-label flex-grow-1" for="Video">
                                                                        <strong>Video</strong> :
                                                                    </label>

                                                                    <!-- textarea input -->
                                                                    <!-- toggle switch -->
                                                                    <!-- common inputs -->
                                                                    <input id="Video" type="file" class="form-control " placeholder="" value="" min=""
                                                                       multiple="" />
                                                                </div>                        </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group px-5 d-flex justify-content-between">
                                                                    <label class="form-label flex-grow-1" for="Download Link">
                                                                        <strong>Download Link</strong> :
                                                                    </label>

                                                                    <!-- textarea input -->
                                                                    <!-- toggle switch -->
                                                                        <div class="form-check form-switch ms-2">
                                                                            <input id="Download Link" class="form-check-input" type="checkbox"  />
                                                                        </div>
                                                                </div>                        </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            </div>
                                <div class="row px-5">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Quality</th>
                                                <th>Video URL</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>720P</td>
                                                <td>video_720.mp4</td>
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
                                <div class="d-flex justify-content-between align-items-center my-5 px-5">
                                    <h5>
                                        <strong>Subtitles</strong>
                                    </h5>
                                    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#subtitle-modal">
                                        <i class="fa-solid fa-square-plus me-2"></i>Add Subtitle
                                    </button>

                                    <div class="modal fade" id="subtitle-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="subtitle-modal-label">Add Subtitle</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="#" class="section-form">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group px-5 d-flex flex-column">
                                                                    <label class="form-label flex-grow-1" for="subtitle"><strong>Subtitle:</strong></label>
                                                                    <select id="subtitle" type="select" class="form-control select2-basic-multiple"
                                                                        placeholder="select subtitle">
                                                                        <option>Hindi</option>
                                                                        <option>English</option>
                                                                        <option>French</option>
                                                                        <option>Marathi</option>
                                                                        <option>Gujrati</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group px-5 ">
                                                                    <label class="form-label flex-grow-1" for="File">
                                                                        <strong>File</strong> :
                                                                    </label>

                                                                    <!-- textarea input -->
                                                                    <!-- toggle switch -->
                                                                    <!-- common inputs -->
                                                                    <input id="File" type="file" class="form-control " placeholder="" value="" min=""
                                                                       multiple="" />
                                                                </div>                        </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            </div>
                                <div class="row px-5">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Language</th>
                                                <th>URL</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>English</td>
                                                <td>English.txt</td>
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
                            </fieldset>
                        </div>
                    </form>
                </div>
                <div class="offcanvas-footer border-top">
                    <div class="d-grid d-flex gap-3 p-3">
                        <button type="submit" class="btn btn-primary d-block">
                            <i class="fa-solid fa-floppy-disk me-2"></i>Save
                        </button>
                        <button type="button" class="btn btn-outline-primary d-block"
                            data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-angles-left me-2"></i>Close
                        </button>
                    </div>
                </div>
            </div>
            <div class="offcanvas offcanvas-end offcanvas-width-80" tabindex="-1" id="season-offcanvas-edit"
                aria-labelledby="season-offcanvas-lable">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel1">Edit Episodes</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form>
                        <div class="section-form">
                            <fieldset>
                                <legend>Episodes</legend>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group px-5">
                                            <label class="form-label flex-grow-1"
                                                for="movie-access"><strong>Show:</strong></label>
                                            <select id="movie-access" type="select"
                                                class="form-control select2-basic-multiple"
                                                placeholder="select movie access">
                                                <option>Zombie Island</option>
                                                <option>Folke The Fat</option>
                                                <option selected>The Mandalorian</option>
                                                <option>Criminals And Agents</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group px-5">
                                            <label class="form-label flex-grow-1"
                                                for="language"><strong>Seasons:</strong></label>
                                            <select id="language" type="select" class="form-control select2-basic-multiple"
                                                placeholder="select language">
                                                <option>Season 1</option>
                                                <option selected>Season 2</option>
                                                <option>Season 3</option>
                                                <option>Season 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group px-5 ">
                                            <label class="form-label flex-grow-1" for="Episode Name">
                                                <strong>Episode Name</strong> <span class="text-danger">*</span>:
                                            </label>

                                            <!-- textarea input -->
                                            <!-- toggle switch -->
                                            <!-- common inputs -->
                                            <input id="Episode Name" type="text" class="form-control " placeholder="Enter Movie Name" value="Don Jon" min=""
                                               multiple="" />
                                        </div>                                </div>
                                    <div class="col-sm-12">
                                        <div class="form-group px-5 ">
                                            <label class="form-label flex-grow-1" for="Description">
                                                <strong>Description</strong> :
                                            </label>

                                            <!-- textarea input -->
                                            <textarea id="Description" class="form-control" placeholder="Description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</textarea>
                                        </div>                                </div>
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
                                    </div>                            </div>
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
                                            <label class="form-label flex-grow-1" for="Content Rating">
                                                <strong>Content Rating</strong> :
                                            </label>

                                            <!-- textarea input -->
                                            <!-- toggle switch -->
                                            <!-- common inputs -->
                                            <input id="Content Rating" type="text" class="form-control " placeholder="Rating" value="4.5" min=""
                                               multiple="" />
                                        </div>                                </div>
                                    <div class="col-lg-3">
                                        <div class="form-group px-5">
                                            <label class="form-label flex-grow-1" for="genres"><strong>Release
                                                    Date:</strong></label>
                                            <input class="form-control flatpickr_humandate" type="text"
                                                placeholder="release date.." data-id="multiple" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group px-5">
                                            <label class="form-label flex-grow-1" for="genres"><strong>Publice
                                                    Date:</strong></label>
                                            <input class="form-control flatpickr_humandate" type="text"
                                                placeholder="publice date.." data-id="multiple" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group px-5 ">
                                            <label class="form-label flex-grow-1" for="Duration">
                                                <strong>Duration</strong> :
                                            </label>

                                            <!-- textarea input -->
                                            <!-- toggle switch -->
                                            <!-- common inputs -->
                                            <input id="Duration" type="text" class="form-control " placeholder="Duration in mins" value="2.45" min=""
                                               multiple="" />
                                        </div>                                </div>
                                </div>

                                <div class="col-lg-12 mt-4 px-5">
                                    <div class="form-group px-3 d-flex align-self-start justify-content-between"
                                        name="status">
                                        <label class="form-label flex-grow-1" for="Status"><strong>Status</strong>
                                            <!--v-if-->:</label><!-- textarea input --><!-- toggle switch -->
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check form-switch ms-2"><input id="Status"
                                                    class="form-check-input" type="checkbox" checked></div>
                                        </div><span class="text-danger"></span>
                                    </div>
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
                                        </div>                                </div>
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
                                        </div>                                </div>
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
                                        </div>                                </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center my-5 px-5">
                                    <h5>
                                        <strong>Video Quality</strong>
                                    </h5>
                                    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#video-modal-edit">
                                        <i class="fa-solid fa-square-plus me-2"></i>Edit Video
                                    </button>

                                    <div class="modal fade" id="video-modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="video-modal-label">Edit Video</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="#" class="section-form">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group px-5 d-flex flex-column">
                                                                    <label class="form-label flex-grow-1"
                                                                        for="quality"><strong>Quality:</strong></label>
                                                                    <select id="quality" type="select" class="form-control select2-basic-multiple"
                                                                        placeholder="Select Quality">
                                                                        <option>480p</option>
                                                                        <option selected >720p</option>
                                                                        <option>1080p</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group px-5 ">
                                                                    <label class="form-label flex-grow-1" for="Video">
                                                                        <strong>Video</strong> :
                                                                    </label>

                                                                    <!-- textarea input -->
                                                                    <!-- toggle switch -->
                                                                    <!-- common inputs -->
                                                                    <input id="Video" type="file" class="form-control " placeholder="" value="" min=""
                                                                       multiple="" />
                                                                </div>                        </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group px-5 d-flex justify-content-between">
                                                                    <label class="form-label flex-grow-1" for="Download Link">
                                                                        <strong>Download Link</strong> :
                                                                    </label>

                                                                    <!-- textarea input -->
                                                                    <!-- toggle switch -->
                                                                        <div class="form-check form-switch ms-2">
                                                                            <input id="Download Link" class="form-check-input" type="checkbox" checked />
                                                                        </div>
                                                                </div>                        </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            </div>
                                <div class="row px-5">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Quality</th>
                                                <th>Video URL</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>720P</td>
                                                <td>video_720.mp4</td>
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
                                <div class="d-flex justify-content-between align-items-center my-5 px-5">
                                    <h5>
                                        <strong>Subtitles</strong>
                                    </h5>
                                    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#subtitle-modal-edit">
                                        <i class="fa-solid fa-square-plus me-2"></i>Edit Subtitle
                                    </button>

                                    <div class="modal fade" id="subtitle-modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="subtitle-modal-label">Edit Subtitle</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="#" class="section-form">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group px-5 d-flex flex-column">
                                                                    <label class="form-label flex-grow-1" for="subtitle"><strong>Subtitle:</strong></label>
                                                                    <select id="subtitle" type="select" class="form-control select2-basic-multiple"
                                                                        placeholder="select subtitle">
                                                                        <option>Hindi</option>
                                                                        <option>English</option>
                                                                        <option>French</option>
                                                                        <option>Marathi</option>
                                                                        <option selected>Gujrati</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group px-5 ">
                                                                    <label class="form-label flex-grow-1" for="File">
                                                                        <strong>File</strong> :
                                                                    </label>

                                                                    <!-- textarea input -->
                                                                    <!-- toggle switch -->
                                                                    <!-- common inputs -->
                                                                    <input id="File" type="file" class="form-control " placeholder="" value="" min=""
                                                                       multiple="" />
                                                                </div>                        </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            </div>
                                <div class="row px-5">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Language</th>
                                                <th>URL</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>English</td>
                                                <td>English.txt</td>
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
                            </fieldset>
                        </div>
                    </form>
                </div>
                <div class="offcanvas-footer border-top">
                    <div class="d-grid d-flex gap-3 p-3">
                        <button type="submit" class="btn btn-primary d-block">
                            <i class="fa-solid fa-floppy-disk me-2"></i>Save
                        </button>
                        <button type="button" class="btn btn-outline-primary d-block"
                            data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-angles-left me-2"></i>Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

            </div>

            @endsection
