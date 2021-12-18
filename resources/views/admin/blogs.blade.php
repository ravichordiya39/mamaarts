@extends('layouts.app')

@section('content')
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
				<h3 class="title1">Post A Blog:</h3>
					<div class="row">
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url('post-blog');?>" enctype="multipart/form-data">
								@csrf
							
								<div class="form-group">
									<label  class="col-sm-2 control-label">Title:</label>
									<div class="col-sm-8">
										<input name="title" class="form-control" required>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Description</label>
									<div class="col-sm-8">
										<textarea name="description" class="form-control"  rows="10"></textarea>
									</div>
								</div>
								  
								<div class="form-group">
									<label  class="col-sm-2 control-label">Meta Keywords:</label>
									<div class="col-sm-8">
										<input name="metakeywords" class="form-control" required>
									</div>
								</div>
								
							    <div class="form-group">
									<label  class="col-sm-2 control-label">Meta Description:</label>
									<div class="col-sm-8">
										<input name="metadescription" class="form-control" required>
									</div>
								</div>
							    <div class="form-group">
									<label  class="col-sm-2 control-label">Upload Image:</label>
									<div class="col-sm-8">
										<input name="image" type="file" class="form-control" required onchange="validateimg(this,500,281)">
										 <p class="notice">(Preferred Image resolution in 500x281px Max 1 Mb)</p>
									</div>
								</div>
							
							<div class="form-group">
									<label  class="col-sm-2 control-label">Page Status:</label>
									<div class="col-sm-8">
										<label class="radio-inline">
      <input type="radio" name="status" checked value="1"> Active
    </label>
    <label class="radio-inline">
      <input type="radio" name="status" value="0"> Inactive
    </label>
									</div>
								</div>
								
						 
								<div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>
							
							</div>
								
							</form>
						</div>
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
