@extends('layout.app')

@push('main')
<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Create Post</div>
                </div>
                <div class="card-body">
                    <div class="mb-10">
                        <label class="required form-label">Title</label>
                        <input id="title" type="text" name="title" class="form-control form-control-solid"
                            placeholder="Enter post title" />
                    </div>
                    <div class="mb-10">
                        <label class="required form-label">Slug</label>
                        <input id="slug" type="text" name="slug" class="form-control form-control-solid"
                            placeholder="Enter post slug" />
                    </div>
                    <div class="mb-10">
                        <label class="required form-label">Content</label>
                        <textarea id="ckeditor" type="text" name="description" class="form-control form-control-solid"
                            placeholder="Enter post content" rows="10" resize="none"></textarea>
                    </div>
                    <div class="mb-10">
                        <label class="required form-label">Excerpt</label>
                        <textarea type="text" name="excerpt" class="form-control form-control-solid"
                            placeholder="Enter post excerpt" rows="3"></textarea>
                    </div>
                    <label class="required form-label">Thumbnail</label>
                    <div>
                        <div class="image-input image-input-empty" data-kt-image-input="true"
                            style="background-image: http://assets.dreamlancer.in/assets/media/thumbnails/blank.png)">
                            <div class="image-input-wrapper w-450px h-200px"></div>
                            <label
                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                title="Change thumbnail">
                                <i class="fas fa-pencil fs-7"></i>
                                <input type="file" name="thumbnail" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="thumbnail_remove" />
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                title="Cancel thumbnail">
                                <i class="fas fa-remove fs-2"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                title="Remove thumbnail">
                                <i class="fas fa-remove fs-2"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            @include('post.partials.publish')
            @include('post.partials.category')
        </div>
    </div>
</form>

@include('category.create')
@endpush

@push('scripts')
<script src="http://assets.dreamlancer.in/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
@endpush

@push('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#ckeditor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

    $("#title").bind('input', function () {
        var title = $(this).val();
        $("#slug").val(title.toLowerCase().replace(/\s+/g, '-'));
    });

</script>
@endpush
