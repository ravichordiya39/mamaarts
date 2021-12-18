@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Contact content :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("contact/save");?>" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-10">
										<input name="description" class="form-control" >
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Phone No:</label>
									<div class="col-sm-3">
										<input name="phone" class="form-control" required>
									</div>
									<label  class="col-sm-2 control-label">Phone No 2:</label>
									<div class="col-sm-4">
										<input name="phone2" class="form-control" required>
									</div>
									
								</div>
								<div class="form-group">
								<label  class="col-sm-2 control-label">Email 1:</label>
									<div class="col-sm-3">
										<input name="email1" class="form-control" required>
									</div>
									<label  class="col-sm-2 control-label">Email 2:</label>
									<div class="col-sm-4">
										<input name="email2" class="form-control" required>
									</div>
									
								</div>
								
									<div class="form-group">
							
									<label  class="col-sm-2 control-label">Address:</label>
									<div class="col-sm-10">
										<input name="address" class="form-control" required>
									</div>
									
								</div>
								
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Google Map Embed Code:</label>
									<div class="col-sm-10">
										<input name="google" class="form-control" required>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Enter Facebook Link:</label>
									<div class="col-sm-10">
										<input name="facebook" class="form-control" required>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Enter Instagram Link:</label>
									<div class="col-sm-10">
										<input name="instagram" class="form-control" required>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Enter Twitter Link:</label>
									<div class="col-sm-10">
										<input name="twitter" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Enter Youtube Link:</label>
									<div class="col-sm-10">
										<input name="youtube" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Enter Linkedin Link:</label>
									<div class="col-sm-10">
										<input name="linkedin" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Enter Google Plus Link:</label>
									<div class="col-sm-10">
										<input name="gplus" class="form-control" required>
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
							<th>Description</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Email 1</th>
							<th>Email 2</th>
							<th>Google</th>
							<th>Action</th>
						</tr>
						<?php $i=1;
						foreach($data as $dt)
						{?>
							<tr>
							<td><?php echo $i++;?></td>
							<td style="max-width:200px;"><?php echo $dt->description?></td>
							<td><?php echo $dt->address?></td>
							<td><?php echo $dt->phone?></td>
							<td><?php echo $dt->email1?></td>
							<td><?php echo $dt->email2?></td>
							<td><?php echo $dt->google?></td>
							<td>
							<a href="<?php echo url("editcontact/".$dt->con_id);?>" class="btn btn-danger"><i class="fa fa-edit"></i></a>
							<a href="<?php echo url("deletecontact/".$dt->con_id);?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
							</td>
							</tr>
						<?php } ?>
						
						</table>
					</div>
					
				</div>
			</div>
		</div>
		
		
		
@endsection
