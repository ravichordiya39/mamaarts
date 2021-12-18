@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">We the people content :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("wepeople/save");?>" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Upload Banner Image:</label>
									<div class="col-sm-4">
										<input type="file" class="form-control1" id="image" name="image" placeholder="Default Input" required onchange="validateimg(this,1900,930)"  >
										<p class="notice">(Preferred Image resolution in 1900x930px max 1 Mb)</p>
									</div>
								
								</div>@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">Banner Description:</label>
									<div class="col-sm-8">
										<input name="heading" class="form-control" required onchange="validateimg(this,1000,1500)">
									</div>
								</div>
								<div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>
								
								</form>
								<h4>Add Team Members:</h4>
								<form class="form-horizontal" method="post" action="<?php echo url("wepeople/saveteam");?>" enctype="multipart/form-data">
								<div id='TextBoxesGroup' class="form-group ">
										<div id="TextBoxDiv1" class="form-group team">
										   <div class="row">@csrf
											<label  class="col-sm-2 control-label">Name:</label>
											
											<div class="col-sm-2">
										       <input name="name" id="textbox1" class="form-control" required>
									        </div>
											
											<label  class="col-sm-2">Designation:</label>
											
											<div class="col-sm-2">
										       <input name="designation" id="textbox1" class="form-control" >
									        </div>
											
											<label  class="col-sm-2">Qualification:</label>
											
											<div class="col-sm-2">
										       <input name="qualification" id="textbox1" class="form-control" >
									        </div>
											
											
										
									        </div>
											<div class="row">
											<label  class="col-sm-2  control-label">Photo:</label>
											
											<div class="col-sm-10">
										       <input name="photo" type="file" id="textbox1" class="form-control" onchange="validateimg(this,400,900)" required> 
											   <p class="notice">(Preferred Image resolution in 400x900px max 1 Mb)</p>
									        </div>
									        </div>
											<div class="row">
											<label  class="col-sm-2 control-label">Description:</label>
											
											<div class="col-sm-10">
										       <textarea name="description" id="textbox1" class="form-control" ></textarea>
									        </div>
									        </div>
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
							<th>Image</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
						<?php $i=1;
						foreach($wepeople as $wp)
						{?>
						<tr>
						<td><?php echo $i++;?></td>
						<td><img src="<?php echo url("thumbnail/".$wp->banner);?>" style="width:150px;"></td>
						<td style="max-width:400px;"><?php echo $wp->description;?></td>
						<td>
						<a href="<?php echo url("editwepeople/".$wp->w_id);?>" class="btn btn-danger"><i class="fa fa-edit"></i></a>
						
						<a href="<?php echo url("deletewepeople/".$wp->w_id);?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						</td>
						
						</tr>
						
						<?php } ?>
						</table>
						
					</div>
					<div class="row">
					<?php foreach($weteam as $wt)
					{?>
					<div class="col-md-3 teampic">
					<img src="<?php echo url("uploads/".$wt->photo);?>" style="width:100%; height:300px;">
					<p><b>Name:</b><?php echo $wt->name;?></p>
					<p><b>Designation: </b><?php echo $wt->designation;?></p>
					<p><b>Description: </b><?php echo $wt->description;?></p>
					<a href="<?php echo url("editweteam/".$wt->wt_id);?>" class="btn btn-danger">Edit</a>
					<a href="<?php echo url("deleteweteam/".$wt->wt_id);?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
					</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
		
	<script>
		
		function validateimg(ctrl,uwidth,uheight) { 
		
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
                        if (height != uheight || width != uwidth) {
                            alert("Please upload image with "+uwidth+"x"+uheight+" resolution.");
							fileUpload.value="";
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
