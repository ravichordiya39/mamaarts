@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Edit Our Business content:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("ourbusiness/updateourbusiness");?>" enctype="multipart/form-data">
							<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Select Order:</label>
									<div class="col-sm-2">
										<select name="position" class="form-control" required>
										<option value="">Select Order</option>
										<?php for($i=1; $i<=16;$i++)
										{?>
										<option value="<?php echo $i;?>" <?php if($data->position==$i){ echo "selected";}?>><?php echo $i;?></option>
										<?php } ?>
										
										</select>
										
									</div>
								
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Upload Image:</label>
									<div class="col-sm-4">
										<input type="file" class="form-control1" onchange="validateimg(this)" id="image" name="image" placeholder="Default Input">
										<img src="<?php echo url("thumbnail/".$data->image);?>">
										<input type="hidden" name="oldimg" value="<?php echo $data->image;?>">
										<input type="hidden" name="id" value="<?php echo $data->ob_id;?>">
									</div>
								
								</div>@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image Heading:</label>
									<div class="col-sm-8">
										<input name="heading" value="<?php echo $data->image_heading;?>" class="form-control" required maxlength="20">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image Para:</label>
									<div class="col-sm-8">
										<textarea name="para" class="form-control" required  maxlength="180"><?php echo $data->image_para;?></textarea> 
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
                        if (height < 400 || width < 300) {
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
