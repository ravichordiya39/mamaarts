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
					
					
					
					<div class="row">
						<h3 class="title1">Edit About content :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("about/update");?>" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Upload Image:</label>
									<div class="col-sm-4">
										<input type="file" class="form-control1" id="image" name="image" placeholder="Default Input">
										<img src="<?php echo url("uploads/".$data->about_image);?>" style="height:200px;">
										<input type="hidden" name="oldimg" value="<?php echo $data->about_image?>">									
										<input type="hidden" name="id" value="<?php echo $data->about_id;?>">									</div>
								
								</div>@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">About Content</label>
									<div class="col-sm-8">
										<textarea name="about" class="form-control" required rows="10"><?php echo $data->about_content;?></textarea>
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
					
	
					
				</div>
			</div>
		</div>
@endsection
