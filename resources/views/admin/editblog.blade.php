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
					
					
				<h3 class="title1">Edit A Blog:</h3>
					<div class="row">
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url('update-blog');?>" enctype="multipart/form-data">
								@csrf
							
								<div class="form-group">
									<label  class="col-sm-2 control-label">Title:</label>
									<div class="col-sm-8">
										<input name="title" class="form-control" value="<?php echo $blogs->title;?>" required>
										<input name="id" type="hidden" class="form-control" value="<?php echo $blogs->id;?>" required>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Description</label>
									<div class="col-sm-8">
										<textarea name="description" class="form-control"  rows="10"><?php echo $blogs->description;?></textarea>
									</div>
								</div>
								  
								<div class="form-group">
									<label  class="col-sm-2 control-label">Meta Keywords:</label>
									<div class="col-sm-8">
										<input name="metakeywords" class="form-control" value="<?php echo $blogs->metakeywords;?>"  required>
									</div>
								</div>
								
							    <div class="form-group">
									<label  class="col-sm-2 control-label">Meta Description:</label>
									<div class="col-sm-8">
										<input name="metadescription" class="form-control" value="<?php echo $blogs->metadescription;?>" required>
									</div>
								</div>
							<div class="form-group">
									<label  class="col-sm-2 control-label">Upload Image:</label>
									<div class="col-sm-8">
										<input name="image" type="file" class="form-control">
										<input name="oldimage" type="hidden" value="<?php echo $blogs->image?>" class="form-control">
										<img src="<?php echo url("thumbnail/".$blogs->image);?>">
									</div>
								</div>
							<div class="form-group">
									<label  class="col-sm-2 control-label">Page Status:</label>
									<div class="col-sm-8">
										<label class="radio-inline">
      <input type="radio" name="status" <?php if($blogs->status==1){ echo "checked";}?> value="1"> Active
    </label>
    <label class="radio-inline">
      <input type="radio" name="status" <?php if($blogs->status==0){ echo "checked";}?> value="0"> Inactive
    </label>
									</div>
								</div>
								
						 
								<div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Update">
									</div>
								</div>
							
							</div>
								
							</form>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	
		
@endsection
