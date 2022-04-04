<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from events  where id='".$row['id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>roomname: <strong><?php echo $drow['id']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deletemeet.php?meetid=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from events where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="editmeet.php?meetid=<?php echo $erow['id']; ?>">
					<div class="row">
  
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">Title:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" name="title" class="form-control" value="<?php echo $erow['title']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">head</label>
						</div>
						<div class="col-lg-9">
						<select name="head" id="" class="form-control">
					
									<?php $arr = [
										"head1"=>"นายกเทศมนตรี",
										"head2"=>"รองนายกเทศมนตรี1",
										"head3"=>"รองนายกเทศมนตรี2",
										"head4"=>"รองนายกเทศมนตรี3"
									];
								
									foreach($arr as $x){
									?>
									<?php if($erow['head']==$x){ ?>
										<option value="<?php echo $erow['head']?>" selected><?php echo $erow['head']?></option>
									<?php }else{ ?>
										<option value="<?php echo $x?>"><?php echo $x?></option>

									<?php }?>
									<?php }?>
					

								
							</select>
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label style="position:relative; top:7px;">numattend</label>
						</div>
						<div class="col-lg-9">
							<input type="text" name="numattend" class="form-control" value="<?php echo $erow['numattend']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">roomid</label>
						</div>
						<div class="col-lg-9">
							
							<select name="roomid" id="" class="form-control">
								<?php 		$query1=mysqli_query($conn,"select * from room");
											while($rowx=mysqli_fetch_array($query1)){?>
									<?php if($rowx['roomid'] == $erow['roomid']){ ?>
										<option value="<?php echo $rowx['roomid']?>" selected><?php echo $rowx['roomname']?></option>
									<?php }else{ ?>
										<option value="<?php echo $rowx['roomid']?>"><?php echo $rowx['roomname']?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
					</div>
					<div style="height:10px;"></div>
		
					<div class="row">
						
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">start</label>
						</div>
						<div class="col-lg-9">
							<input type="datetime" class="form-control" name="start" value="<?php echo $erow['start'];?>">
						</div>
					</div>		
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">end</label>
						</div>
						<div class="col-lg-9">
							<input type="datetime" class="form-control" name="end" value="<?php echo $erow['end'];?>">
						</div>
					</div>	
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">addequipment</label>
						</div>
						<div class="col-lg-9">
							<input type="datetime" class="form-control" name="addequipment" value="<?php echo $erow['addequipment'];?>">
						</div>
					</div>		
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">remark</label>
						</div>
						<div class="col-lg-9">
							<input type="datetime" class="form-control" name="remark" value="<?php echo $erow['remark'];?>">
						</div>
					</div>		
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">remark</label>
						</div>
						<div class="col-lg-9">
							<input type="color" class="form-control" name="color" value="<?php echo $erow['color'];?>">
						</div>
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