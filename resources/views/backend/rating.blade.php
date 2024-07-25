
@extends('backend.layouts.main')
@section('main-container-admin')

<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center pb-3">
                    <div class="card-title">
                        <h4>Rating List</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-view table-responsive table-space">
                        <table id="commentTable" class="data-tables table custom-table movie_table" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Release Date</th>
                                    <th>Rating</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        Movie
                                    </td>
                                    <td>
                                        <p class="mb-0"> Man of Street</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        2017
                                    </td>
                                    <td><i className="fa-solid fa-star text-primary"></i> 9.2</td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        Show
                                    </td>
                                    <td>
                                        <p class="mb-0"> Cursed</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        2012
                                    </td>
                                    <td><i className="fa-solid fa-star text-primary"></i> 8.5</td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        Movie
                                    </td>
                                    <td>
                                        <p class="mb-0"> Veronica</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        2018
                                    </td>
                                    <td><i className="fa-solid fa-star text-primary"></i> 7.0</td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        Movie
                                    </td>
                                    <td>
                                        <p class="mb-0"> Troll Hunters</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        2020
                                    </td>
                                    <td><i className="fa-solid fa-star text-primary"></i> 9.5</td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        Show
                                    </td>
                                    <td>
                                        <p class="mb-0"> Gran Torino</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        2019
                                    </td>
                                    <td><i className="fa-solid fa-star text-primary"></i> 7.5</td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        Movie
                                    </td>
                                    <td>
                                        <p class="mb-0"> Man of Street</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        2017
                                    </td>
                                    <td><i className="fa-solid fa-star text-primary"></i> 9.2</td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        Show
                                    </td>
                                    <td>
                                        <p class="mb-0"> Cursed</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        2012
                                    </td>
                                    <td><i className="fa-solid fa-star text-primary"></i> 8.5</td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        Movie
                                    </td>
                                    <td>
                                        <p class="mb-0"> Veronica</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        2018
                                    </td>
                                    <td><i className="fa-solid fa-star text-primary"></i> 7.0</td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>
                                        Movie
                                    </td>
                                    <td>
                                        <p class="mb-0"> Troll Hunters</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        2020
                                    </td>
                                    <td><i className="fa-solid fa-star text-primary"></i> 9.5</td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>
                                        Show
                                    </td>
                                    <td>
                                        <p class="mb-0"> Gran Torino</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        2019
                                    </td>
                                    <td><i className="fa-solid fa-star text-primary"></i> 7.5</td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
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
    </div>
            </div>

            @endsection
