@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Complaince content :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("compliance/savepara");?>" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-8">
										<input name="description" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>
								
								</form>
								<h4>Add Compliances:</h4>
								<form class="form-horizontal" method="post" action="<?php echo url("compliance/save");?>" enctype="multipart/form-data">
								<div id='TextBoxesGroup' class="form-group ">
										<div id="TextBoxDiv1" class="form-group team">
										   <div class="row">@csrf
											<label  class="col-sm-2 control-label">Title:</label>
											
											<div class="col-sm-2">
										       <input name="title" id="textbox1" class="form-control" required>
									        </div>
										
											<label  class="col-sm-1 ">Photo:</label>
											
											<div class="col-sm-2">
										       <input name="photo" type="file" id="textbox1" class="form-control" required>
									        </div>
									        </div>
											
											<label  class="col-sm-2 control-label">Description:</label>
											
											<div class="col-sm-6">
										       <textarea name="description" id="textbox1" class="form-control" required></textarea>
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
						<table class="table table-striped">
						<tr>
							<th>Sr. No.</th>
							
							<th>Para</th>
							<th>Action</th>
						</tr>
						<?php $i=1;
						foreach($complaincepara as $wp)
						{?>
						<tr>
						<td><?php echo $i++;?></td>
						
						<td style="max-width:400px;"><?php echo $wp->complaince_para;?></td>
						<td>
						<a href="<?php echo url("editcompara/".$wp->c_id);?>" class="btn btn-danger"><i class="fa fa-edit"></i></a>
						<a href="<?php echo url("deletecompara/".$wp->c_id);?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						</td>
						
						</tr>
						
						<?php } ?>
						</table>
						
					</div>
					<div class="row">
					<?php foreach($complaincecontent as $wt)
					{?>
					<div class="col-md-3 teampic">
					<img src="<?php echo url("uploads/".$wt->image);?>" style="width:100%">
					
					<p><b>Title: </b><?php echo $wt->title;?></p>
					<p><b>Description: </b><?php echo $wt->description;?></p>
					<a href="<?php echo url("editcomcontent/".$wt->c_id);?>" class="btn btn-primary">Edit</a>
					<a href="<?php echo url("deletecomcontent/".$wt->c_id);?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
					</div>
					<?php } ?>
					</div>
					
				</div>
			</div>
		</div>
		
		
		
@endsection
