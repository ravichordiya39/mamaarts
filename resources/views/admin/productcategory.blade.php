@extends('layouts.app')

@section('content')
<style>
.t2image1,.t3image1,.t2image2,.t3image2,.t2image3,.t3image3
{
	
	display:none;
	
}

</style>
<script>
$(document).ready(function(){
	
	$('input[name="template"]').click(function()
	{
		var id=$(this).val();
		if(id=='t2')
		{
		$('.t1image1, .t1image2, .t1image3, .t3image1, .t3image2, .t3image3').hide();
		$('.t2image1,.t2image2,.t2image3').show();
		}
		if(id=='t3')
		{
		$('.t1image1, .t1image2, .t1image3, .t2image1, .t2image2, .t2image3').hide();
		$('.t3image1, .t3image2, .t3image3').show();	
			
		}
		if(id=='t1')
		{
			$('.t3image1, .t3image2, .t3image3, .t2image1, .t2image2, .t2image3').hide();
		$('.t1image1, .t1image2, .t1image3').show();
		}

     });
	 
	 
	
	
});
</script>
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Add Product Category:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("categorymaster");?>" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">Category Page Title:</label>
									<div class="col-sm-8">
										<input name="pagetitle" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Category Page Heading:</label>
									<div class="col-sm-8">
										<input name="pageheading" class="form-control">
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
						<h3 class="title1">Add Category Images:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("product/save");?>" enctype="multipart/form-data">
								@csrf
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Category Title:</label>
									<div class="col-sm-8">
										<input name="title" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Category Description:</label>
									<div class="col-sm-8">
										<input name="description" class="form-control" required>
									</div>
								</div>
						<div class="form-group">
								<label  class="col-sm-2 control-label">Select Product Template:</label>
								<div class="col-sm-8">
										<label class="radio-inline">
										<input type="radio" name="template" checked value="t1">Template 1
										</label>
										<label class="radio-inline">
										<input type="radio" name="template" value="t2">Template 2
										</label>
										<label class="radio-inline">
										<input type="radio" name="template" value="t3">Template 3
										</label>
										 
										
								</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Upload Image 1:</label>
									<div class="col-sm-8">
									  <input type="file" name="image" class="form-control" required>
									   <p class="notice t1image1">(Preferred Image resolution in 700x1000px max 1 Mb)</p>
									   <p class="notice t2image1">(Preferred Image resolution in 700x500px max 1 Mb)</p>
									   <p class="notice t3image1">(Preferred Image resolution in 700x1000px max 1 Mb)</p>
									</div>
								</div>
								
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Upload Image 2:</label>
									<div class="col-sm-8">
									  <input type="file" name="image2" class="form-control" required>
									  <p class="notice t1image2">(Preferred Image resolution in 700x1000px max 1 Mb)</p>
									  <p class="notice t2image2">(Preferred Image resolution in 700x1000px max 1 Mb)</p>
									  <p class="notice t3image2">(Preferred Image resolution in 700x1000px max 1 Mb)</p>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Upload Image 3:</label>
									<div class="col-sm-8">
									  <input type="file" name="image3" class="form-control" required>
									  <p class="notice t1image3">(Preferred Image resolution in 700x1000px max 1 Mb)</p>
									  <p class="notice t2image3">(Preferred Image resolution in 700x1000px max 1 Mb)</p>
									  <p class="notice t3image3">(Preferred Image resolution in 700x500px max 1 Mb)</p>
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
					    <?php foreach($data as $dt)
					    {?>
					    <div class="col-md-3" style="text-align:center">
					        
					        <img src="<?php echo url("thumbnail/".$dt->category_image);?>"  style="height:150px;">
							<img src="<?php echo url("thumbnail/".$dt->category_image2);?>"  style="height:150px;">
							<img src="<?php echo url("thumbnail/".$dt->category_image3);?>"  style="height:150px;">
					        <h4 align="center"><?php echo $dt->category_name;?></h4>
					        <a href="<?php echo url("editcategory/".$dt->id)?>" class="btn btn-success">Edit</a>
					        <a href="<?php echo url("deletecategory/".$dt->id)?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
					    </div>
					    <?php } ?>
					    
					</div>
					
					
					
				</div>
			</div>
		</div>
@endsection
