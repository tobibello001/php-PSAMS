<div class="modal fade" id="editSchedule" tabindex="-1" role="dialog" aria-labelledby="editSchedule" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSchedule">Edit Day Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="procedures/doEditSchedule.php" method="get">
                <div class="modal-body">
                    <div class="form-group row hidden-xs-up">
                        <label for="id" class="col-2 col-form-label">ID</label>
                        <div class="col-10">
                            <input class="form-control" type="number" min="0" id="id" name="id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="from" class="col-2 col-form-label">Time</label>
                        <div class="col-10">
                            <input class="form-control" type="time" id="from" name="from">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="to" class="col-2 col-form-label">Time</label>
                        <div class="col-10">
                            <input class="form-control" type="time" id="to" name="to">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="maxApp" class="col-2 col-form-label">Number</label>
                        <div class="col-10">
                            <input class="form-control" type="number" min="0" id="maxApp" name="maxApp">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>