@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Add Testimonials :</h3>
						<div class="form-three widget-shadow">
							
							
							
							
								<form class="form-horizontal" method="post" action="<?php echo url("clients/savetestimonials");?>" enctype="multipart/form-data">
								<div id='TextBoxesGroup' class="form-group ">
										<div id="TextBoxDiv1" class="form-group team">
										   <div class="row">@csrf
											<label  class="col-sm-2 control-label">Name:</label>
											
											<div class="col-sm-2">
										       <input name="name" id="textbox1" class="form-control" required>
									        </div>
										
											<label  class="col-sm-1 ">Photo:</label>
											
											<div class="col-sm-2">
										       <input name="photo" type="file" id="textbox1" class="form-control" required>
									        </div>
									        </div>
											<div class="row">
											<label  class="col-sm-2 control-label">Name:</label>
											
											<div class="col-sm-6">
										       <textarea name="testimonial" id="textbox1" class="form-control" required></textarea>
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
					
					
					
					
					
					<div class="row">
					<h3>Client Testimonials</h3>
						<table class="table table-striped">
						<tr>
							<th>Sr. No.</th>
							
							<th>Name</th>
							<th>Photo</th>
							<th>Testominial</th>
							<th>Action</th>
						</tr>
						
						<?php $i=1;
						foreach($testimonials as $cl)
						{?>
						<tr>
							<td><?php echo $i++;?></td>
							
							<td style=""><?php echo $cl->name; ?></td>
							<td style=""><img src="<?php echo url("thumbnail/".$cl->photo);?>" style="width:150px"></td>
							<td style="max-width:400px"><?php echo $cl->testimonial; ?></td>
							<td>
							<a href="<?php echo url("edittestimonial/".$cl->id);?>" class="btn btn-primary">Edit</a>
					<a href="<?php echo url("deletetestimonial/".$cl->id);?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						<?php } ?>
						</table>
						
					</div>
					
					
					
				</div>
			</div>
		</div>
		
		
		
@endsection
