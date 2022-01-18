<div class="card">
    <div class="card-header">
        <div class="card-title">Category</div>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal"
                data-bs-target="#kt_modal_1">
                New
            </button>
        </div>
    </div>
    <div class="card-body">
        <select class="form-select form-select-solid" data-control="select2" name="category[]"
            data-placeholder="Select category" data-allow-clear="true" multiple="multiple">
            <option></option>
            @foreach ($categories as $category)
            <option value="{{ $category -> id }}">{{ $category -> name }}</option>
            @endforeach
        </select>
    </div>
</div>