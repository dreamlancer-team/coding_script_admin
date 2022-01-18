<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Category</h5>
            </div>

            <form action="{{ route('category.store') }}" method="POST" autocomplete="off">
                <div class="modal-body">
                    @csrf
                    <div class="mb-10">
                        <label class="required form-label">Name</label>
                        <input type="text" name="name" class="form-control form-control-solid" placeholder="Enter Category" required/>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>