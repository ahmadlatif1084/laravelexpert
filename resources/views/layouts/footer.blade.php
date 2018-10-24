<!-- Modal Patient-->
<div class="modal fade" id="addpatient" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Patient Details</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{ url('patient') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Age:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="age" placeholder="Enter age" name="age" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Gender:</label>
                        <div class="col-sm-10">
                            <select name="gender" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Address:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Phone:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Mobile:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Paid Amount:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="paidamount" placeholder="Enter paid amount" name="paidamount" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Remaining Amount:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="remainingamount" placeholder="Enter remaining amount" name="remainingamount" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Patient Picture:</label>
                        <div class="col-sm-10">
                            <input type="file" class="" id="filebutton-normal" name="filebutton-normal" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<!-- Modal Appointment-->
<div class="modal fade" id="addappointment" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title appointment_content">Add Apointment Details For </h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{ url('appointment') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" class="input_patient hide" name="patient_id">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Appointment Start Time/Date:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="datetimepicker" name="start_time" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Appointment End Time/Date:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="datetimepicker2" name="end_time"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>