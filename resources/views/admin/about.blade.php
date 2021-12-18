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
						<h3 class="title1">About content :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("about/save");?>" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Upload Image:</label>
									<div class="col-sm-4">
										<input type="file" class="form-control1" id="image" name="image" placeholder="Default Input" required>
										
										
									</div>
								
								</div>@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">About Content</label>
									<div class="col-sm-8">
										<textarea name="about" class="form-control" required  rows="10"></textarea>
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
						<div class="dol-md-12">
							<table class="table table-striped">
							<tr>
							   <th>Sr. No.</th><th>Image</th><th>Content</th><th>Action</th>
							</tr>
							<?php $i=1;
							foreach($data as $dt)
							{?>
							<tr>
							   <td><?php echo $i++; ?></td><td><img src="<?php echo url("thumbnail/".$dt->about_image);?>" class="img-responsive" style="max-width:300px"></td>
							   <td style="max-width:400px;"><?php echo $dt->about_content;?></td>
							   
							   <td>
							   <a href="<?php echo url("editabout/".$dt->about_id);?>" class="btn btn-danger"><i class="fa fa-edit lg-x"></i></a>
							   
							   <a href="<?php echo url("deleteabout/".$dt->about_id);?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fa fa-trash lg-x"></i></a>
							   </td>
							</tr>
							<?php } ?>
							</table>
						</div>
					</div>
					
				</div>
			</div>
		</div>
@endsection
