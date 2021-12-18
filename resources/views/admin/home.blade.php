@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="inline-form widget-shadow">
						<div class="form-title">
							<h4>Home Content :</h4>
						</div>
						<div class="form-body">
						<div data-example-id="simple-form-inline">
							<form class="form-inline" method="post" action="<?php echo url("video/save");?>" enctype="multipart/form-data"> 
							@csrf
								<div class="form-group">
								 <label>Upload Video:</label>
								<input type="file" class="form-control" name="video" id="exampleInputPassword3" placeholder="Password"> 
								</div> 
								
								<button type="submit" class="btn btn-default">Submit</button> 
							</form> 
						</div>
						</div>
					</div>
					
					<div class="row">
					<?php foreach($data as $dt)
					{?>
								<div class="col-md-4">
									<div>
										<video width="100%" height="250" controls="controls" poster="image" preload="true">
											
											<source src="<?php echo url("video/".$dt->home_video);?>" type="video/mp4" />
											
										Your browser does not support the video tag.
										</video>
									</div>
									<div class="col-md-6">
									<?php if($dt->status==1)
									{?>
									<a href="<?php echo url("updatehome/0/".$dt->home_id);?>" class="btn btn-success">Active</a>
									<?php } else{?>
									<a href="<?php echo url("updatehome/1/".$dt->home_id);?>" class="btn btn-danger">Inactive</a>
									<?php }?>
									</div>
									<div class="col-md-6" align="right">
									
									<a href="<?php echo url("deletehome/".$dt->home_id);?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
									
									</div>
								</div>
					<?php } ?>
					</div>
					
				</div>
			</div>
		</div>
@endsection
