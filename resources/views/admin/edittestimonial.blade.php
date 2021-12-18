@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Edit Testimonial :</h3>
						<div class="form-three widget-shadow">
							
							
							
							
								<form class="form-horizontal" method="post" action="<?php echo url("clients/updatetestimonials");?>" enctype="multipart/form-data">
								<div id='TextBoxesGroup' class="form-group ">
										<div id="TextBoxDiv1" class="form-group team">
										   <div class="row">@csrf
											<label  class="col-sm-2 control-label">Name:</label>
											
											<div class="col-sm-2">
										       <input name="name" id="textbox1" class="form-control" value="<?php echo $data->name;?>"> 
									        </div>
										
											<label  class="col-sm-1 ">Photo:</label>
											
											<div class="col-sm-2">
										       <input name="photo" type="file" id="textbox1" class="form-control">
										       <input name="oldphoto" type="hidden" id="textbox1" class="form-control" required value="<?php echo $data->photo;?>">
										       <input name="id" type="hidden" id="textbox1" class="form-control" required value="<?php echo $data->id;?>">
									        </div>
											
											<div class="col-sm-2">
										       <img src="<?php echo url("thumbnail/".$data->photo)?>">
									        </div>
									        </div>
											<div class="row">
											<label  class="col-sm-2 control-label">Testimonial:</label>
											
											<div class="col-sm-6">
										       <textarea name="testimonial" id="textbox1" class="form-control" required><?php echo $data->testimonial;?></textarea>
									        </div>
											
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
					
					
					
				</div>
			</div>
		</div>
		
		
		
@endsection
