@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Edit We the people content :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("wepeople/updatewecontent");?>" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Upload Banner Image:</label>
									<div class="col-sm-4">
										<input type="file" class="form-control1" id="image" name="image" placeholder="Default Input"  onchange="validateimg(this)" >
										<img src="<?php echo url("uploads/".$data->banner);?>" style="max-width:400px;">
										
										<input name="id" class="form-control" type="hidden" required value="<?php echo $data->w_id?>">
										
										<input name="oldimg" class="form-control" type="hidden" required value="<?php echo $data->banner?>">
									</div>
								
								</div>@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">Banner Description:</label>
									<div class="col-sm-8">
										<input name="heading" class="form-control" required value="<?php echo $data->description?>">
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
						console.log(width+"ssdsd"+height); 
                        if (height < 630 || width < 1920) {
                            alert("Please upload image greater than 1920x630 resolution.");
							//fileUpload.value="";
                            return true;
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
