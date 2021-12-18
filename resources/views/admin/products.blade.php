@extends('layouts.app')

@section('content')

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Add Product:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("product/addproduct");?>" enctype="multipart/form-data">
								@csrf
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Select category:</label>
									<div class="col-sm-8">
										<select name="category" class="form-control">
										
										<option value="">Select Category</option>
										<?php foreach($productcategory as $pc)
										{?>
										<option value="<?php echo $pc->id; ?>"><?php echo $pc->category_name; ?></option>
										<?php } ?>
										
										</select>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Product Title:</label>
									<div class="col-sm-8">
										<input name="name" class="form-control" >
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Product Description:</label>
									<div class="col-sm-8">
										<input name="description" class="form-control" >
									</div>
								</div>
						       <div class="form-group">
								<label  class="col-sm-2 control-label">Select Product Template:</label>
								<div class="col-sm-8">
										<label class="radio-inline">
										<input type="radio" name="template" class="template" checked value="t1">Template 1
										</label>
										<label class="radio-inline">
										<input type="radio" name="template"  class="template" value="t2">Template 2
										</label>
										<label class="radio-inline">
										<input type="radio" name="template" class="template"  value="t3">Template 3
										</label>
										 
										
								</div>
								</div>
								
								<div class="template1" style="display:">
								    <h3>First Block</h3>
								    <div class="form-group">
									<label  class="col-sm-2 control-label">Base Image:</label>
									<div class="col-sm-8">
										<input name="t1b1baseimage" type="file" class="form-control"  onchange="validateimg(this,1500,1000)" >
										<p class="notice">(Preferred Image resolution in 1500x1000px Max 2 Mb)</p>
									</div>
								</div>
								 <h3>Second Block</h3>
								  <div class="form-group">
									<label  class="col-sm-2 control-label">Heading:</label>
									<div class="col-sm-8">
										<input name="t1b2heading" class="form-control" >
									</div>
								</div>
								
								 <div class="form-group">
									<label  class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-8">
										<input name="t1b2description" class="form-control" >
									</div>
								</div>
								
							
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image 1:</label>
									<div class="col-sm-8">
										<input name="t1b2image1" type="file" class="form-control"  onchange="validateimg(this,600,600)">
										<p class="notice">(Preferred Image resolution in 600x600px max 2 Mb)</p>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image 2:</label>
									<div class="col-sm-8">
										<input name="t1b2image2" type="file" class="form-control"  onchange="validateimg(this,600,600)">
										<p class="notice">(Preferred Image resolution in 600x600px max 2 Mb)</p>
									</div>
								</div>
									<div class="form-group">
									<label  class="col-sm-2 control-label">Image 3:</label>
									<div class="col-sm-8">
										<input name="t1b2image3" type="file" class="form-control" onchange="validateimg(this,600,900)" >
										<p class="notice">(Preferred Image resolution in 600x900px max 2 Mb)</p>
									</div>
								</div>
								
								
								<h3>Third Block</h3>
								  <div class="form-group">
									<label  class="col-sm-2 control-label">Heading:</label>
									<div class="col-sm-8">
										<input name="t1b3heading" class="form-control" >
									</div>
								</div>
								
								 <div class="form-group">
									<label  class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-8">
										<input name="t1b3description" class="form-control" >
									</div>
								</div>
								
								
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image 1:</label>
									<div class="col-sm-8">
										<input name="t1b3image1" type="file" class="form-control"  onchange="validateimg(this,1000,1500)">
										<p class="notice">(Preferred Image resolution in 1000x1500px max 2 Mb)</p>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image 2:</label>
									<div class="col-sm-8">
										<input name="t1b3image2" type="file" class="form-control"  onchange="validateimg(this,1000,1500)">
										<p class="notice">(Preferred Image resolution in 1000x1500px max 2 Mb)</p>
									</div>
								</div>
									<div class="form-group">
									<label  class="col-sm-2 control-label">Image 3:</label>
									<div class="col-sm-8">
										<input name="t1b3image3" type="file" class="form-control"  onchange="validateimg(this,1000,1500)">
										<p class="notice">(Preferred Image resolution in 1000x1500px max 2 Mb)</p>
									</div>
								</div>
								    
								    
								    
								</div>
								
								
								
								
								
								<div class="template2" style="display:none">
								    <h3>First Block</h3>
								    <div class="form-group">
									<label  class="col-sm-2 control-label">Base Image 1:</label>
									<div class="col-sm-8">
										<input name="t2b1baseimage1" type="file" class="form-control"  onchange="validateimg(this,600,900)">
										<p class="notice">(Preferred Image resolution in 600x900px max 2 Mb)</p>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Base Image 2:</label>
									<div class="col-sm-8">
										<input name="t2b1baseimage2" type="file" class="form-control"  onchange="validateimg(this,600,900)">
										<p class="notice">(Preferred Image resolution in 600x900px max 2 Mb)</p>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Base Image 3:</label>
									<div class="col-sm-8">
										<input name="t2b1baseimage3" type="file" class="form-control"  onchange="validateimg(this,600,600)">
										<p class="notice">(Preferred Image resolution in 600x600px max 2 Mb)</p>
									</div>
								</div>
								 <h3>Second Block</h3>
								  <div class="form-group">
									<label  class="col-sm-2 control-label">Heading:</label>
									<div class="col-sm-8">
										<input name="t2b2heading" class="form-control" >
									</div>
								</div>
								
								 <div class="form-group">
									<label  class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-8">
										<input name="t2b2description" class="form-control" >
									</div>
								</div>
								
							
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image 1:</label>
									<div class="col-sm-8">
										<input name="t2b2image1" type="file" class="form-control"  onchange="validateimg(this,1000,1500)">
										<p class="notice">(Preferred Image resolution in 1000x1500px max 2 Mb)</p>
									</div>
								</div>
								
							
								
								
								<h3>Third Block</h3>
								  <div class="form-group">
									<label  class="col-sm-2 control-label">Heading:</label>
									<div class="col-sm-8">
										<input name="t2b3heading" class="form-control" >
									</div>
								</div>
								
								 <div class="form-group">
									<label  class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-8">
										<input name="t2b3description" class="form-control" >
									</div>
								</div>
								
								
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image 1:</label>
									<div class="col-sm-8">
										<input name="t2b3image1" type="file" class="form-control"  onchange="validateimg(this,600,900)">
										<p class="notice">(Preferred Image resolution in 600x900px max 2 Mb)</p>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image 2:</label>
									<div class="col-sm-8">
										<input name="t2b3image2" type="file" class="form-control"  onchange="validateimg(this,600,900)">
										<p class="notice">(Preferred Image resolution in 600x900px max 2 Mb)</p>
									</div>
								</div>
									<div class="form-group">
									<label  class="col-sm-2 control-label">Image 3:</label>
									<div class="col-sm-8">
										<input name="t2b3image3" type="file" class="form-control"  onchange="validateimg(this,600,900)">
										<p class="notice">(Preferred Image resolution in 600x900px max 2 Mb)</p>
									</div>
								</div>
								    
								    
								    
								</div>
								
								
								
								
								<div class="template3" style="display:none">
								    <h3>First Block</h3>
								    <div class="form-group">
									<label  class="col-sm-2 control-label">Base Image 1:</label>
									<div class="col-sm-8">
										<input name="t3b1baseimage1" type="file" class="form-control"  onchange="validateimg(this,1000,1500)">
										<p class="notice">(Preferred Image resolution in 1000x1500px max 2 Mb)</p>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Base Image 2:</label>
									<div class="col-sm-8">
										<input name="t3b1baseimage2" type="file" class="form-control"  onchange="validateimg(this,1000,1500)">
										<p class="notice">(Preferred Image resolution in 1000x1500px max 2 Mb)</p>
									</div>
								</div>
								
								 <h3>Second Block</h3>
								  <div class="form-group">
									<label  class="col-sm-2 control-label">Heading:</label>
									<div class="col-sm-8">
										<input name="t3b2heading" class="form-control" >
									</div>
								</div>
								
								 <div class="form-group">
									<label  class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-8">
										<input name="t3b2description" class="form-control" >
									</div>
								</div>
								
							
							
									<div class="form-group">
									<label  class="col-sm-2 control-label">Image 1:</label>
									<div class="col-sm-8">
										<input name="t3b2image1" type="file" class="form-control"  onchange="validateimg(this,1000,1500)">
										<p class="notice">(Preferred Image resolution in 1000x1500px max 2 Mb)</p>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image 2:</label>
									<div class="col-sm-8">
										<input name="t3b2image2" type="file" class="form-control"  onchange="validateimg(this,1000,1500)">
										<p class="notice">(Preferred Image resolution in 1000x1500px max 2 Mb)</p>
									</div>
								</div>
									<div class="form-group">
									<label  class="col-sm-2 control-label">Image 3:</label>
									<div class="col-sm-8">
										<input name="t3b2image3" type="file" class="form-control"  onchange="validateimg(this,1000,1500)">
										<p class="notice">(Preferred Image resolution in 1000x1500px max 2 Mb)</p>
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
					    <?php foreach($product as $dt)
					    {?>
					    <div class="col-md-3">
					        
					       
					        <h4 align="center" style="font-size: 15px;
    color: red;
    font-weight: bold;"><?php echo $dt->category_name;?></h4>
					        <h4 align="center"><?php echo $dt->product_name;?></h4>
					       
					        <a href="<?php echo url("editproducts/".$dt->id)?>" class="btn btn-danger">Edit</a>
					        <a href="<?php echo url("deleteproducts/".$dt->id)?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
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
		<script>
		    $(document).ready(function(){
		        $('input[name="template"]').click(function(){
		        if($(this).is(':checked'))
{
   var tmp=$(this).val();
   if(tmp=='t1')
   {
       $(".template1").show();
       $(".template2").hide();
       $(".template3").hide();
   }
    if(tmp=='t2')
   {
       $(".template1").hide();
       $(".template2").show();
       $(".template3").hide();
   }
    if(tmp=='t3')
   {
       $(".template1").hide();
       $(".template2").hide();
       $(".template3").show();
   }
}else
{
 // unchecked
}
		    }); })
		    
		    </script>
@endsection
