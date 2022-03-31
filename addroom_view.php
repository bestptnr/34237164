<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <h4 class="modal-title" id="myModalLabel"><b>เพิ่มห้องประชุม</b> </h4>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addroom_model.php">
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">ชื่อห้อง:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="roomname">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">สถานที่:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="location">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">ความจุ:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="capacity">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">มีโปรเจคเตอร์:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="projector">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">มีไมโครโฟน:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="microphone">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">อื่นๆ:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="others">
						</div>
					</div>
					<div style="height:10px;"></div>

                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
