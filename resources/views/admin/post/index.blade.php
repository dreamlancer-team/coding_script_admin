@extends('admin.layout.app')

@push('styles')
    <link rel="stylesheet" href="http://assets.dreamlancer.in/assets/plugins/custom/datatables/datatables.bundle.css">
@endpush

@push('main')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Posts</h3>
            <div class="card-toolbar">
                <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary">
                    New
                </a>
            </div>
        </div>
        <div class="card-body">
            <table id="post_table" class="table table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="fw-bolder fs-6 text-gray-800 px-7">
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>Views</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop -> index + 1 }}</td>
                        <td>
                            @if ($post -> image)                                
                                <img class="w-75px h-50px" src="{{ url('storage/blog/' . $post->image) }}" alt="{{ $post->title }}">
                            @else
                                <img class="w-75px h-50px" src="{{ url('images/image_not_available.png') }}" alt="{{ $post->title }}">
                            @endif
                        </td>
                        <td class="fw-bold">{{ $post -> title }}</td>
                        <td>
                            @foreach ($post -> categories as $category)                            
                               <a href="" class="badge badge-light-primary">{{ $category -> name }}</a>
                            @endforeach
                        </td>
                        <td>{{ $post -> user -> full_name }}</td>
                        <td class="fs-7">{{ $post -> created_at -> diffForHumans() }}</td>
                        <td>{{ $post -> views }}</td>
                        <td class="fs-7">{{ ucFirst($post -> status) }}</td>
                        <td class="d-flex justify-content-between">
                            @include('admin.post.show')
                            @include('admin.post.edit')
                            @include('admin.post.delete')
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
        $("#post_table").DataTable({
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

