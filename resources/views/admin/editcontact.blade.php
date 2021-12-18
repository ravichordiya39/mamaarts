@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Edit Contact content :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("contact/updatecontact");?>" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-10">
										<input name="description" class="form-control" value="<?php echo $data->description;?>" >
										<input name="id" type="hidden" class="form-control" value="<?php echo $data->con_id;?>" required>
									</div>
								</div>
								
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Phone No:</label>
									<div class="col-sm-3">
										<input name="phone" class="form-control" required value="<?php echo $data->phone;?>">
									</div>
									<label  class="col-sm-2 control-label">Phone No 2:</label>
									<div class="col-sm-4">
										<input name="phone2" class="form-control" required value="<?php echo $data->phone2;?>">
									</div>
									
								</div>
								<div class="form-group">
								<label  class="col-sm-2 control-label">Email 1:</label>
									<div class="col-sm-3">
										<input name="email1" class="form-control" required value="<?php echo $data->email1;?>">
									</div>
									<label  class="col-sm-2 control-label">Email 2:</label>
									<div class="col-sm-4">
										<input name="email2" class="form-control" required value="<?php echo $data->email2;?>">
									</div>
									
								</div>
								
								
								
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Address:</label>
									<div class="col-sm-10">
										<input name="address" value="<?php echo $data->address;?>" class="form-control" required>
									</div>
								</div>	
								<div class="form-group">
									<label  class="col-sm-2 control-label">Google Map Embed Code:</label>
									<div class="col-sm-10">
										<input name="google" class="form-control" value='<?php echo $data->google;?>' required>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Enter Facebook Link:</label>
									<div class="col-sm-10">
										<input name="facebook" value="<?php echo $data->facebook;?>" class="form-control" required>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Enter Instagram Link:</label>
									<div class="col-sm-10">
										<input name="instagram"  value="<?php echo $data->instagram;?>" class="form-control" required>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Enter Twitter Link:</label>
									<div class="col-sm-10">
										<input name="twitter"  value="<?php echo $data->twitter;?>" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Enter Youtube Link:</label>
									<div class="col-sm-10">
										<input name="youtube" value="<?php echo $data->youtube;?>" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Enter Linkedin Link:</label>
									<div class="col-sm-10">
										<input name="linkedin" value="<?php echo $data->linkedin;?>" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Enter Google Plus Link:</label>
									<div class="col-sm-10">
										<input name="gplus" value="<?php echo $data->gplus;?>" class="form-control" required>
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
