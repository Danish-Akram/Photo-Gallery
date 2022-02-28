<form action="{{ route('delete', $images) }}" id="">
    {{ csrf_field() }}
    <div class="modal fade" id="photoDeleteModal{{ $images }}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Confirmation!</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <h6>Are you sure you want to delete this item ?</h6>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-danger">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</form>
