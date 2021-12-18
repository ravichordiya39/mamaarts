@extends('layouts.app')

@section('content')
<script type="text/javascript" src="js/nicEdit-latest.js"></script>
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Add Pages:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("admin/make-page");?>" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">Page Position:</label>
									<div class="col-sm-8">
										
    <label class="radio-inline">
      <input type="radio" name="position" value="0" checked> Quick Links

    </label>
	<label class="radio-inline">
      <input type="radio" name="position"  value="1"> Our Business
    </label>
    <label class="radio-inline">
      <input type="radio" name="position" value="2"> About Us

    </label>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Template:</label>
									<div class="col-sm-8">
										<label class="radio-inline">
											<input type="radio" name="template" checked value="1"> Basic Design
										</label>
										<label class="radio-inline">
											<input type="radio" name="template" value="0"> Advanced Design

										</label>
    
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Page Order:</label>
									<div class="col-sm-8">
										<input name="pageorder" class="form-control" required style="width: 50px;">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Page Title:</label>
									<div class="col-sm-8">
										<input name="title" class="form-control" required>
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
								
						   <div id="normalpage">
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image:</label>
									<div class="col-sm-8">
										<input type="file" name="image" class="form-control" onchange="validateimg(this,1200,400)">
										<p class="notice">(Preferred Image resolution in 1200x400px Max 2 Mb)</p>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Content:</label>
									<div class="col-sm-8">
										<textarea name="description" id="myArea" class="form-control"  rows="6"></textarea>
									</div>
								</div>
								
							    
								<div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>
								</div>
								
								
								
								
								<div id="advancepage" style="display:none"> 
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block one Image:</label>
									<div class="col-sm-8">
										<input name="b1image" type="file"  class="form-control" onchange="validateimg(this,500,350)">
										<p class="notice">(Preferred Image resolution in 500x350px Max 2 Mb)</p>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block one Content:</label>
									<div class="col-sm-8">
										<textarea name="b1content" class="form-control"  rows="6"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block two Heading:</label>
									<div class="col-sm-8">
										<input name="b2heading" type="text"  class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block two Title:</label>
									<div class="col-sm-8">
										<input name="b2title" type="text"  class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block two Image:</label>
									<div class="col-sm-8">
										<input name="b2image" type="file"  class="form-control" onchange="validateimg(this,1000,1000)">
										<p class="notice">(Preferred Image resolution in 1000x1000px Max 2 Mb)</p>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block two Content:</label>
									<div class="col-sm-8">
										<textarea name="b2content" class="form-control"  rows="6"></textarea>
									</div>
								</div> 
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block three Heading:</label>
									<div class="col-sm-8">
										<input name="b3heading" type="text"  class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block three Title:</label>
									<div class="col-sm-8">
										<input name="b3title" type="text"  class="form-control">
										
									</div>
								</div>
								
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block three Image:</label>
									<div class="col-sm-8">
										<input name="b3image" type="file" class="form-control" onchange="validateimg(this,1000,1000)">
										<p class="notice">(Preferred Image resolution in 1000x1000px Max 2 Mb)</p>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block three Content:</label>
									<div class="col-sm-8">
										<textarea name="b3content" class="form-control"  rows="6"></textarea>
									</div>
								</div>
								
<div id='TextBoxesGroup'>

<input type="hidden" id="counter" name="counter" value="2">
	<div id="TextBoxDiv1">
			<div class="form-group">
				<label  class="col-sm-2 control-label">Slider Image 1:</label>
				<div class="col-sm-8">
					<input name="sliderimage1" id="sliderimage1" type="file" onchange="validateimg(this,300,300)"  class="form-control">
					<p class="notice">(Preferred Image resolution in 300x300px Max 1 Mb)</p>
				</div>
			</div>
			
			<div class="form-group">
				<label  class="col-sm-2 control-label">Slider Title 1:</label>
				<div class="col-sm-8">
					<input name="slidertitle1"  id="slidertitle1" type="text"  class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Slider Description 1:</label>
				<div class="col-sm-8">
					<input name="sliderdescription1"  id="sliderdescription1" type="text"  class="form-control">
				</div>
			</div>
								
								
								
	</div>
</div>
<input type='button' value='Add Slider Content' class="btn btn-success" id='addButton' />
<input type='button' value='Remove  Slider Content' class="btn btn-danger"  id='removeButton' />

   
								
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
		
		<script type="text/javascript">
 $(document).ready(function () {
	 bkLib.onDomLoaded(function() {
        new nicEditor({fullPanel : true, maxHeight:100}).panelInstance('myArea');
        $('.nicEdit-panelContain').parent().width('100%');
        $('.nicEdit-panelContain').parent().next().width('98%');
        $('.nicEdit-main').width('100%');
        });
 var counter = 2;
$("#addButton").click(function () {
           
            if (counter > 10) {
                alert("Only 10 textboxes allow");
                return false;
            }
            var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);
			newTextBoxDiv.after().html('<div class="form-group"><label  class="col-sm-2 control-label">Slider Image '+counter+':</label><div class="col-sm-8"><input name="sliderimage'+counter+'" id="sliderimage'+counter+'" type="file"  class="form-control"><p class="notice">(Preferred Image resolution in 300x300px Max 1 Mb)</p></div></div><div class="form-group"><label  class="col-sm-2 control-label">Slider Title '+counter+':</label><div class="col-sm-8"><input name="slidertitle'+counter+'"  id="slidertitle'+counter+'" type="text"  class="form-control"></div></div><div class="form-group"><label  class="col-sm-2 control-label">Slider Description '+counter+':</label><div class="col-sm-8"><input name="sliderdescription'+counter+'"  id="sliderdescription'+counter+'" type="text"  class="form-control"></div></div>');  
         newTextBoxDiv.appendTo("#TextBoxesGroup");
           $("#counter").val(counter);
            counter++;
        });

        $("#removeButton").click(function () {
            if (counter == 1) {
                alert("No more textbox to remove");
                return false;
            }
              counter--;
             $("#TextBoxDiv" + counter).remove();
			  $("#counter").val(counter);
              });
			  
			  
			  
			  $("input[name='template']").click(function(){
				  var id=$(this).val();
				  if(id==1)
				  {
					  
					   $("#advancepage").hide();
					  $("#normalpage").show();
					  
				  }
				  else
				  {
					  $("#advancepage").show();
					  $("#normalpage").hide();
					  
				  }
				  
				  
			  });
        
    });
	
	
	
</script>

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
