<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['meetid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from events  where meetid='".$row['meetid']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>roomname: <strong><?php echo $drow['meetid']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deletemeet.php?meetid=<?php echo $row['meetid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['meetid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from events where meetid='".$row['meetid']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="editmeet.php?meetid=<?php echo $erow['meetid']; ?>">
					<div class="row">
  
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Title:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="title" class="form-control" value="<?php echo $erow['title']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">head</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="head" class="form-control" value="<?php echo $erow['head']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">numattend</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="numattend" class="form-control" value="<?php echo $erow['numattend']; ?>">
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">roomid</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="roomid" class="form-control" value="<?php echo $erow['roomid']; ?>">
						</div>
                        <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">start</label>
						</div>
						<div class="col-lg-10">
							<input type="datetime" class="form-control" name="start" value="<?php echo $erow['start'];?>">
						</div>
					</div>		
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">end</label>
						</div>
						<div class="col-lg-10">
							<input type="datetime" class="form-control" name="end" value="<?php echo $erow['end'];?>">
						</div>
					</div>		
					<div style="height:10px;"></div>
					<div class="row">
					</div>

                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->