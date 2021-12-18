@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Infrastructure content:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("infrastructure/saveinfra");?>" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-8">
										<input name="description" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Yotube Embed Code:</label>
									<div class="col-sm-8">
										<input name="youtube" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>
								
								</form>
								<!---<h4>Add Images:</h4>
								<form class="form-horizontal" method="post" action="<?php echo url("infrastructure/saveimages");?>" enctype="multipart/form-data">
								<div id='TextBoxesGroup' class="form-group ">
										<div id="TextBoxDiv1" class="form-group team">
										   <div class="row">@csrf
																				
											<label  class="col-sm-2  control-label">Photo:</label>
											
											<div class="col-sm-4">
										       <input name="photo[]" type="file" id="textbox1" class="form-control" required multiple>
									        </div>
											
											
											
									        </div>
										
										</div>
								</div>
                                <div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>


								
								
								
							</form>--->
						</div>
					</div>
					
					<div class="row">
						<div class="row">
						<table class="table table-striped">
						<tr>
							<th>Sr. No.</th>
							
							<th>Video</th>
							<th>Para</th>
							<th>Action</th>
						</tr>
						<?php $i=1;
						foreach($infravideo as $wp)
						{?>
						<tr>
						<td><?php echo $i++;?></td>
						
						<td><?php echo $wp->video;?></td>
						<td style="max-width:500px"><?php echo $wp->para;?></td>
						<td>
						<a href="<?php echo url("editinfra/".$wp->v_id);?>" class="btn btn-danger"><i class="fa fa-edit"></i></a>
						<a href="<?php echo url("deletevideo/".$wp->v_id);?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						</td>
						
						</tr>
						
						<?php } ?>
						</table>
						
					</div>
					<!----<div class="row">
					<?php foreach($infraphoto as $wt)
					{?>
					<div class="col-md-3 teampic">
					<img src="<?php echo url("thumbnail/".$wt->photo);?>" style="width:100%">
					
					
					<a href="<?php echo url("deletephoto/".$wt->p_id);?>" class="btn btn-danger">Delete</a>
					</div>
					<?php } ?>
					</div>-->
					</div>
					
				</div>
			</div>
		</div>
		
		
		
@endsection
