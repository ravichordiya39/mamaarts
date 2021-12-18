@extends('layouts.app')

@section('content')

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Edit Product Category:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("product/updatecategory");?>" enctype="multipart/form-data">
								@csrf
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Category Title:</label>
									<div class="col-sm-8">
										<input name="title" class="form-control" required value="<?php echo $data->category_name; ?>">
									</div>
								</div>
						<div class="form-group">
									<label  class="col-sm-2 control-label">Category Description:</label>
									<div class="col-sm-8">
										<input name="description" class="form-control"  value="<?php echo $data->description; ?>">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Upload Image 1:</label>
									<div class="col-sm-8">
									  <input type="file" name="image" class="form-control">
									  <input type="hidden" name="id" class="form-control" required value="<?php echo $data->id; ?>">
									  <input type="hidden" name="oldphoto" class="form-control" required value="<?php echo $data->category_image; ?>">
									  <img src="<?php echo url("thumbnail/".$data->category_image); ?>" style="width:150px;">
									  <p><?php echo $data->category_image;?></p>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Upload Image 2:</label>
									<div class="col-sm-8">
									  <input type="file" name="image2" class="form-control">
									 
									  <input type="hidden" name="oldphoto2" class="form-control" required value="<?php echo $data->category_image2; ?>">
									  <img src="<?php echo url("thumbnail/".$data->category_image2); ?>" style="width:150px;">
									   <p><?php echo $data->category_image2;?></p>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Upload Image 3:</label>
									<div class="col-sm-8">
									  <input type="file" name="image3" class="form-control">
									 
									  <input type="hidden" name="oldphoto3" class="form-control" required value="<?php echo $data->category_image3; ?>">
									  <img src="<?php echo url("thumbnail/".$data->category_image3); ?>" style="width:150px;">
									   <p><?php echo $data->category_image3;?></p>
									</div>
								</div>
								<div class="form-group">
								<label  class="col-sm-2 control-label">Select Product Template:</label>
								<div class="col-sm-8">
										<label class="radio-inline">
										<input type="radio" name="template" <?php if($data->template=='t1'){ echo "checked";}?> value="t1">Template 1
										</label>
										<label class="radio-inline">
										<input type="radio" name="template" <?php if($data->template=='t2'){ echo "checked";}?> value="t2">Template 2
										</label>
										<label class="radio-inline">
										<input type="radio" name="template"  <?php if($data->template=='t3'){ echo "checked";}?> value="t3">Template 3
										</label>
										 
										
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
@endsection
