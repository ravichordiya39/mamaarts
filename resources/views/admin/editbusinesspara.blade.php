@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					<div class="row">
						<h3 class="title1">Edit Our Business para:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("ourbusiness/updatebusinesspara");?>" enctype="multipart/form-data">
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-8">
									<input type="hidden" name="id" value="<?php echo $para->id;?>">
										<textarea name="description" class="form-control" required><?php echo $para->para;?></textarea>
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
