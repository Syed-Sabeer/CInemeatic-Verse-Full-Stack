
@extends('backend.layouts.main')
@section('main-container-admin')

<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center pb-3">
                    <div class="card-title">
                        <h4>Comment List</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-view table-responsive table-space">
                        <table id="commentTable" class="data-tables table custom-table movie_table" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Description</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        Lorem ipsum dolor
                                    </td>
                                    <td>Nick Allen</td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a
                                                            scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        21 Jul, 2020
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        Lorem ipsum dolor
                                    </td>
                                    <td>Hans Olo</td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a
                                                            scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        12 Jun, 2020
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        Lorem ipsum dolor
                                    </td>
                                    <td>Lynn Guini</td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a
                                                            scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        01 Jan, 2020
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        Lorem ipsum dolor
                                    </td>
                                    <td>Aaronottix</td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a
                                                            scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        19 Mar, 2020
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        Lorem ipsum dolor
                                    </td>
                                    <td>Marge Arita</td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a
                                                            scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        21 Aug, 2020
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        Lorem ipsum dolor
                                    </td>
                                    <td>Bill Dabear</td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a
                                                            scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        15 May, 2020
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        Lorem ipsum dolor
                                    </td>
                                    <td>Brock Lee</td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a
                                                            scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        07 Jul, 2020
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        Lorem ipsum dolor
                                    </td>
                                    <td>Nick Allen</td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a
                                                            scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        21 Jul, 2020
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>
                                        Lorem ipsum dolor
                                    </td>
                                    <td>Hans Olo</td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a
                                                            scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        12 Jun, 2020
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>
                                        Lorem ipsum dolor
                                    </td>
                                    <td>Lynn Guini</td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a
                                                            scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        01 Jan, 2020
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>
                                        Lorem ipsum dolor
                                    </td>
                                    <td>Aaronottix</td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a
                                                            scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        19 Mar, 2020
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>
                                        Lorem ipsum dolor
                                    </td>
                                    <td>Marge Arita</td>
                                    <td>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a
                                                            scelerisque. Etiam feugiat
                                                            luctus est, vel commodo odio rhoncus sit amet</p>
                                    </td>
                                    <td>
                                        21 Aug, 2020
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="#">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
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
        </div>
            </div>
        </div>
@endsection
