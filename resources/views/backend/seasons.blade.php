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
                        <i class="fa-solid fa-plus me-2"></i>Add Seasaon
                    </button>
                </div>
               <div class="card-body">
                    <div class="table-view table-responsive pt-3 table-space">
                        <table id="seasonTable" class="data-tables table custom-table movie_table" data-toggle="data-table">
                            <thead>
                                <tr class="text-uppercase">
                                    <th class="text-center">
                                        <input type="checkbox" class="form-check-input" />
                                    </th>
                                    <th>Show</th>
                                    <th>Quality</th>
                                    <th>Category</th>
                                    <th>Publish Date</th>
                                    <th>Show Access</th>
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
                    <h5 id="offcanvasRightLabel1">Add New Season</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form action="#" class="section-form">
                        <fieldset>
                            <legend>Seasons</legend>
                            <div class="form-group px-3">
                                <div class="form-group px-5 ">
                                    <label class="form-label flex-grow-1" for="Seasons">
                                        <strong>Seasons</strong> :
                                    </label>

                                    <!-- textarea input -->
                                    <!-- toggle switch -->
                                    <!-- common inputs -->
                                    <input id="Seasons" type="number" class="form-control " placeholder="1" value="" min="1"
                                       multiple="" />
                                </div>                            <div class="form-group px-5 ">
                                    <label class="form-label flex-grow-1" for="Description">
                                        <strong>Description</strong> :
                                    </label>

                                    <!-- textarea input -->
                                    <textarea id="Description" class="form-control" placeholder="Description"></textarea>
                                </div>
                                <label class="form-label flex-grow-1" for="show"><strong>Show:</strong></label>
                                <select id="show" type="select" class="form-control">
                                    <option>abc</option>
                                    <option>xyz</option>
                                    <option>mno</option>
                                    <option>stu</option>
                                </select>
                            </div>
                        </fieldset>
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
            <div class="offcanvas offcanvas-end offcanvas-width-80" tabindex="-1" id="season-offcanvas-edit"
                aria-labelledby="season-offcanvas-lable">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel1">Edit Season</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form action="#" class="section-form">
                        <fieldset>
                            <legend>Seasons</legend>
                            <div class="form-group px-3">
                                <div class="form-group px-5 ">
                                    <label class="form-label flex-grow-1" for="Seasons">
                                        <strong>Seasons</strong> :
                                    </label>

                                    <!-- textarea input -->
                                    <!-- toggle switch -->
                                    <!-- common inputs -->
                                    <input id="Seasons" type="number" class="form-control " placeholder="1" value="07" min="1"
                                       multiple="" />
                                </div>                            <div class="form-group px-5 ">
                                    <label class="form-label flex-grow-1" for="Description">
                                        <strong>Description</strong> :
                                    </label>

                                    <!-- textarea input -->
                                    <textarea id="Description" class="form-control" placeholder="Description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</textarea>
                                </div>
                                <label class="form-label flex-grow-1" for="show"><strong>Show:</strong></label>
                                <select id="show" type="select" class="form-control">
                                    <option>abc</option>
                                    <option selected>xyz</option>
                                    <option>mno</option>
                                    <option>stu</option>
                                </select>
                            </div>
                        </fieldset>
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

            </div>

@endsection
