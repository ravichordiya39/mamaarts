@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					<div class="row">
						<h3 class="title1">Our Business para:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("ourbusiness/savebusinesspara");?>" enctype="multipart/form-data">
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-8">
										<textarea name="description" class="form-control" required></textarea>
									</div>
								</div>
								@csrf
								<div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>
								
							</form>
						</div>
					</div>
					
					<div class="row">
						<h3 class="title1">Our Business content:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("ourbusiness/save");?>" enctype="multipart/form-data">
							<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Select Order:</label>
									<div class="col-sm-2">
										<select name="position" class="form-control">
										<option value="">Select Order</option>
										<?php for($i=1; $i<=16;$i++)
										{?>
										<option value="<?php echo $i;?>"><?php echo $i;?></option>
										<?php } ?>
										
										</select>
										
									</div>
								
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Upload Image:</label>
									<div class="col-sm-4">
										<input type="file" class="form-control1" onchange="validateimg(this)" id="image" name="image" placeholder="Default Input" required>
									</div>
								
								</div>@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image Heading:</label>
									<div class="col-sm-8">
										<input name="heading" class="form-control" required maxlength="20">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image Para:</label>
									<div class="col-sm-8">
										<textarea name="para" class="form-control" required  maxlength="180"></textarea> 
									</div>
								</div>
								
								
								<div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>
								
							</form>
						</div>
					</div>
					<div class="row">
						<table class="table table-striped">
						
						<tr>
							<th>Sr. No.</th>
							<th>Para</th>
							
							<th>Action</th>
						</tr>
						<?php $i=1;
						foreach($para as $dt)
						{?>
						<tr>
							<td><?php echo $i++;?></td>
							<td><?php echo $dt->para?></td>
							
						<td>
						<a href="<?php echo url("editbusinesspara/".$dt->id);?>" class="btn btn-danger"><i class="fa fa-edit"></i></a>
						
						<a href="<?php echo url("deletebusinesspara/".$dt->id);?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						</td>
						</tr>
						<?php } ?>
						
						</table>
					</div>
					
					<div class="row">
						<table class="table table-striped">
						
						<tr>
							<th>Sr. No.</th>
							
							<th>Image</th>
							<th>Heading</th>
							<th>Para</th>
							<th>Action</th>
						</tr>
						<?php $i=1;
						foreach($data as $dt)
						{?>
						<tr>
							<td><?php echo $i++;?></td>
							
							<td><img src="<?php echo url("thumbnail/".$dt->image);?>" style="width:150px;"></td>
						<td><?php echo $dt->image_heading?></td>
						<td><?php echo $dt->image_para?></td>
						<td>
						<a href="<?php echo url("editbusiness/".$dt->ob_id);?>" class="btn btn-danger"><i class="fa fa-edit"></i></a>
						<a href="<?php echo url("deletebusiness/".$dt->ob_id);?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						
						</td>
						</tr>
						<?php } ?>
						
						</table>
					</div>
					
				</div>
			</div>
		</div>
		
		<script>
		
		function validateimg(ctrl) { 
        var fileUpload = ctrl;
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif)$");
        if (regex.test(fileUpload.value.toLowerCase())) {
            if (typeof (fileUpload.files) != "undefined") {
                var reader = new FileReader();
                reader.readAsDataURL(fileUpload.files[0]);
                reader.onload = function (e) {
                    var image = new Image();
                    image.src = e.target.result;
                    image.onload = function () {
                        var height = this.height;
                        var width = this.width;
                        if (height < 300 || width < 400) {
                            alert("Please upload image greater than 300x400 resolution.");
							fileUpload.value="";
                            return false;
                        }else{
                           
                            return true;
                        }
                    };
                }
            } else {
                alert("This browser does not support HTML5.");
                return false;
            }
        } else {
            alert("Please select a valid Image file.");
            return false;
        }
    }
	
	</script>
@endsection
