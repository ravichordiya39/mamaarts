@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">We the people content :</h3>
						<div class="form-three widget-shadow">
							<h4>Edit Team Members:</h4>
								<form class="form-horizontal" method="post" action="<?php echo url("wepeople/updatewpteam");?>" enctype="multipart/form-data">
								<div id='TextBoxesGroup' class="form-group ">
										<div id="TextBoxDiv1" class="form-group team">
										   <div class="row">@csrf
											<label  class="col-sm-2 control-label">Name:</label>
											
											<div class="col-sm-2">
										       <input name="id" type="hidden"  value="<?php echo $weteam->wt_id;?>" class="form-control" required>
										       <input name="name" id="textbox1"  value="<?php echo $weteam->name;?>" class="form-control" required>
									        </div>
											
											<label  class="col-sm-2">Designation:</label>
											
											<div class="col-sm-2">
										       <input name="designation" value="<?php echo $weteam->designation;?>" id="textbox1" class="form-control" >
									        </div>
											
											<label  class="col-sm-2">Qualification:</label>
											
											<div class="col-sm-2">
										       <input name="qualification"  value="<?php echo $weteam->qualification;?>" id="textbox1" class="form-control" >
									        </div>
											
											
										
									        </div>
											<div class="row">
											<label  class="col-sm-2  control-label">Photo:</label>
											
											<div class="col-sm-10">
										       <input name="photo" type="file" id="textbox1" class="form-control">
											   <img src="<?php echo url("uploads/".$weteam->photo);?>" style="width:150px">
										       <input name="oldphoto" type="hidden" id="textbox1" class="form-control" value="<?php echo $weteam->photo;?>">
									        </div>
									        </div>
											<div class="row">
											<label  class="col-sm-2 control-label">Description:</label>
											
											<div class="col-sm-10">
										       <textarea name="description" id="textbox1" class="form-control" required><?php echo $weteam->description;?></textarea>
									        </div>
									        </div>
										</div>
								</div>
                                <div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Update">
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
