<a href="{{route('category.edit',$category->slug)}}" class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#modal-edit-category{{ $category->slug }}" id="modal-edit">
    <i class="fas fa-edit"></i>
</a>
<div class="modal fade" tabindex="-1" id="modal-edit-category{{ $category->slug}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Category</h5>
            </div>

            <form action="{{ route('category.update', $category->slug) }}" method="POST" autocomplete="off">
            <div class="modal-body">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="mb-10">
                        <label class="required form-label">Name</label>
                        <input type="text" name="name" value="{{ $category -> name }}" class="form-control form-control-solid" placeholder="Enter Category" required/>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

        </div>
    </div>
</div>