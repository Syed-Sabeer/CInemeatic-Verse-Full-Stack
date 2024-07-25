@extends('backend.layouts.main')
@section('main-container-admin')

<div class="content-inner container-fluid pb-0" id="page_layout">
    <div>
       <div class="row">
          <div class="col-sm-12">
             <div class="card">
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
                </div>
                <div class="card-body">
                   <div class="table-responsive rounded py-4 table-space">
                      <table id="user-list-table" class="table custom-table" role="grid" data-toggle="data-table">
                         <thead>
                            <tr class="ligth">
                               <th>Profile</th>
                               <th>Name</th>
                               <th>Contact</th>
                               <th>Email</th>
                               <th>Country</th>
                               <th>Status</th>
                               <th>Company</th>
                               <th>Join Date</th>
                               <th style="min-width: 100px">Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td class="text-center"><img class="bg-soft-primary rounded img-fluid avatar-40 me-3"
                                     src="../../assets/images/user/01.jpg" alt="profile" loading="lazy"></td>
                               <td>Anna Sthesia</td>
                               <td>(760) 756 7568</td>
                               <td>annasthesia@gmail.com</td>
                               <td>USA</td>
                               <td><span class="badge bg-primary">Active</span></td>
                               <td>Acme Corporation</td>
                               <td>2019/12/01</td>
                               <td>
                                  <div class="flex align-items-center list-user-action">
                                     <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip"
                                        data-placement="top" title="" data-bs-original-title="Add" href="#">
                                        <span class="btn-inner">
                                           <i class="fa-solid fa-user-plus fa-xs"></i>
                                        </span>
                                     </a>
                                     <a class="btn btn-sm btn-icon btn-danger rounded delete-btn" data-bs-toggle="tooltip"
                                        data-placement="top" title="" data-bs-original-title="Delete" href="#">
                                        <span class="btn-inner">
                                           <i class="fa-solid fa-trash fa-xs"></i>
                                        </span>
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
            </div>

            @endsection
