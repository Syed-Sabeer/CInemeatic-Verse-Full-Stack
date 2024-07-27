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
                                class="fa-solid fa-plus me-2"></i>Add Cast</button>
                    </div>
                    <div class="card-body">
                        <div class="table-view table-responsive pt-3 table-space">
                            <table id="seasonTable" class="data-tables table custom-table movie_table" data-toggle="data-table">
                                <thead>
                                    <tr class="text-uppercase">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Date Of Birth</th>
                                        <th>Picture</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($casts as $cast)
                                    <tr data-id="{{ $cast->id }}">
                                        <td>{{ $cast->id }}</td>
                                        <td>{{ $cast->name }}</td>
                                        <td>{{ $cast->dob }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $cast->picture) }}" alt="image" class="rounded-2 avatar avatar-55 img-fluid" />
                                        </td>
                                        <td>
                                            <div class="form-check form-switch ms-2">
                                                <input class="form-check-input" type="checkbox" {{ $cast->status ? 'checked' : '' }} />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center list-user-action">
                                                <button type="button" class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" onclick="editCast({{ $cast->id }})">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                                <a class="btn btn-sm btn-icon btn-danger delete-btn rounded" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $cast->id }}" title="Delete">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Cast Offcanvas -->
            <div class="offcanvas offcanvas-end offcanvas-width-80" tabindex="-1" id="season-offcanvas" aria-labelledby="season-offcanvas-lable">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel1">Add New Cast</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form method="POST" action="{{ route('admin.cast.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="fullname">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="dob">Date of Birth:</label>
                            <input type="date" class="form-control" id="dob" name="dob">
                        </div>
                        <div class="form-group">
                            <label for="picture" class="form-label custom-file-input">Picture</label>
                            <input class="form-control" type="file" id="picture" name="picture">

                        </div>
                        <button type="submit" class="btn btn-primary d-block">
                            <i class="fa-solid fa-floppy-disk me-2"></i>Save
                        </button>
                    </form>
                </div>
                <div class="offcanvas-footer border-top">
                    <div class="d-grid d-flex gap-3 p-3">
                        <button type="button" class="btn btn-outline-primary d-block" data-bs-dismiss="offcanvas"
                            aria-label="Close">
                            <i class="fa-solid fa-angles-left me-2"></i>Close
                        </button>
                    </div>
                </div>
            </div>

            <!-- Edit Cast Offcanvas -->
            <div class="offcanvas offcanvas-end offcanvas-width-80" tabindex="-1" id="season-offcanvas-edit" aria-labelledby="season-offcanvas-edit-lable">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel1">Edit Cast</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form method="POST" action="{{ route('admin.cast.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit_cast_id" name="cast_id">
                        <div class="form-group">
                            <label class="form-label" for="edit_fullname">Full Name</label>
                            <input type="text" class="form-control" id="edit_fullname" name="fullname" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_dob">Date of Birth:</label>
                            <input type="date" class="form-control" id="edit_dob" name="dob">
                        </div>
                        <div class="form-group">
                            <label for="edit_picture" class="form-label custom-file-input">Picture</label>
                            <input class="form-control" type="file" id="edit_picture" name="picture">
                            <label for="edit_picture" class="form-label custom-file-input">Current Picture</label>
                            <img id="edit_picture_preview" alt="Current picture" class="img-fluid mt-2" style="max-width: 20%; height: auto;">
                        </div>
                        <button type="submit" class="btn btn-primary d-block">
                            <i class="fa-solid fa-floppy-disk me-2"></i>Save
                        </button>
                    </form>
                </div>
                <div class="offcanvas-footer border-top">
                    <div class="d-grid d-flex gap-3 p-3">
                        <button type="button" class="btn btn-outline-primary d-block" data-bs-dismiss="offcanvas"
                            aria-label="Close">
                            <i class="fa-solid fa-angles-left me-2"></i>Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this cast member?
            </div>
            <div class="modal-footer">
                <form id="delete-form" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    function editCast(id) {
        console.log('Edit button clicked, ID:', id);
        fetch(`/admin/cast/${id}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Fetched data:', data);

                // Populate form fields
                document.getElementById('edit_cast_id').value = data.id;
                document.getElementById('edit_fullname').value = data.name;
                document.getElementById('edit_dob').value = data.dob;

                const imagePreview = document.getElementById('edit_picture_preview');
                if (data.picture) {
                    imagePreview.src = `${window.location.origin}/storage/${data.picture}`;
                    imagePreview.style.display = 'block'; // Make sure it's visible
                } else {
                    imagePreview.src = '';
                    imagePreview.style.display = 'none'; // Hide if there's no image
                }

                // Show Offcanvas
                const offcanvasElement = document.getElementById('season-offcanvas-edit');
                if (offcanvasElement) {
                    const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
                    offcanvas.show();
                } else {
                    console.error('Offcanvas element not found');
                }
            })
            .catch(error => {
                console.error('Error fetching cast data:', error);
            });
    }

    document.getElementById('edit_picture').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const imagePreview = document.getElementById('edit_picture_preview');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            imagePreview.src = '';
            imagePreview.style.display = 'none';
        }
    });

    document.addEventListener('DOMContentLoaded', () => {
        const deleteButtons = document.querySelectorAll('.delete-btn');
        const deleteForm = document.getElementById('delete-form');
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        deleteButtons.forEach(button => {
            button.addEventListener('click', () => {
                const id = button.getAttribute('data-id');
                const actionUrl = `/admin/cast/${id}`;
                deleteForm.action = actionUrl;
            });
        });

        deleteForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Prevent default form submission

            const actionUrl = deleteForm.action;

            fetch(actionUrl, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    document.querySelector(`tr[data-id="${data.id}"]`).remove(); // Remove the deleted row
                    // Optionally reload the page: window.location.reload();
                } else {
                    alert('Failed to delete. Please try again.');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>





    @endsection
