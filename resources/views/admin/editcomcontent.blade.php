@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Add Compliances:</h3>
						<div class="form-three widget-shadow">
							
								
								<form class="form-horizontal" method="post" action="<?php echo url("compliance/updatecomplaince");?>" enctype="multipart/form-data">
								<div id='TextBoxesGroup' class="form-group ">
										<div id="TextBoxDiv1" class="form-group team">
										   <div class="row">@csrf
											<label  class="col-sm-2 control-label">Title:</label>
											
											<div class="col-sm-2">
										       <input name="title" id="textbox1" class="form-control" value="<?php echo $data->title; ?>">
										       <input name="id" type="hidden" class="form-control" value="<?php echo $data->c_id; ?>">
									        </div>
										
											<label  class="col-sm-1 ">Photo:</label>
											
											<div class="col-sm-2">
										       <input name="photo" type="file" id="textbox1" class="form-control">
									        </div>
											<div class="col-sm-2">
											<img src="<?php echo url("uploads/".$data->image);?>" style="width:150px">
											
											<input name="oldphoto" type="hidden" id="textbox1" class="form-control" value="<?php echo $data->image; ?>">
									        </div>
											
											
									        </div>
											
											<label  class="col-sm-2 control-label">Description:</label>
											
											<div class="col-sm-6">
										       <textarea name="description" id="textbox1" class="form-control"><?php echo $data->description; ?></textarea>
									        </div>
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
