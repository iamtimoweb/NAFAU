{{-- notifications --}}
<div class="modal fade" id="modal-notifications" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header alert-info">
                <h5 class="modal-title" id="myModalLabel">Notifications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="tbl-notifications" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Read</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="3" class="text-center">There are currently no notices</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
