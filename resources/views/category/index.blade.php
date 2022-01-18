@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="http://assets.dreamlancer.in/assets/plugins/custom/datatables/datatables.bundle.css">
@endpush

@push('main')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                    New
                </button>
            </div>
            @include('category.create')
        </div>
        <div class="card-body">
            <table id="category_table" class="table table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="fw-bolder fs-6 text-gray-800 px-7">
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Posts Count</th>
                        <td>Created By</td>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop -> index + 1 }}</td>
                        <td>{{ $category -> name }}</td>
                        <td>{{ $category -> slug }}</td>
                        <td>
                            <span class="badge badge-light-primary">{{ $category -> posts_count }}</span>
                        </td>
                        <td>{{ $category -> user -> full_name }}</td>
                        <td>
                            @include('category.edit')
                            @include('category.delete')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endpush

@push('scripts')
    <script src="http://assets.dreamlancer.in/assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush

@push('scripts')
    <script>
        $("#category_table").DataTable({
 "language": {
  "lengthMenu": "Show _MENU_",
 },
 "dom":
  "<'row'" +
  "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
  "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
  ">" +

  "<'table-responsive'tr>" +

  "<'row'" +
  "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
  "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
  ">"
});
    </script>
@endpush

