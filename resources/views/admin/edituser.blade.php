@extends('layouts.app')

@section('content')
<script type="text/javascript" src="js/nicEdit-latest.js"></script>
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Edit Users:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("user/updateuser");?>" enctype="multipart/form-data" onsubmit="return validate();">
								@csrf							
								
								<div class="form-group col-md-6">
									<label  class="col-sm-4 control-label">Name:</label>
									<div class="col-sm-8">
										<input name="name" class="form-control" required value="<?php echo $user->name; ?>">
									</div>
								</div>
								<div class="form-group col-md-6">
									<label  class="col-sm-4 control-label">Email:</label>
									<div class="col-sm-8">
										<input name="email" type="email" class="form-control" required value="<?php echo $user->email; ?>">
									</div>
								</div>
								<div class="form-group col-md-6">
									<label  class="col-sm-4 control-label">Mobile:</label>
									<div class="col-sm-8">
										<input name="mobile" class="form-control" required value="<?php echo $user->mobile; ?>">
									</div>
								</div>
								<div class="form-group col-md-6">
									<label  class="col-sm-4 control-label">Address:</label>
									<div class="col-sm-8">
										<input name="address" class="form-control" required value="<?php echo $user->address; ?>">
										<input name="id" type="hidden" class="form-control" required value="<?php echo $user->id; ?>">
									</div>
								</div>
								<div class="form-group col-md-6">
									<label  class="col-sm-4 control-label">Enter Password:</label>
									<div class="col-sm-8">
										<input name="password" class="form-control" type="password" >
									</div>
								</div>	
								<div class="form-group col-md-6">
									<label  class="col-sm-4 control-label">Confirm Password:</label>
									<div class="col-sm-8">
										<input name="conpassword" class="form-control" type="password" >
									</div>
								</div>
								<div class="form-group col-md-12">
								<h4>Select Permissions</h4>
								</div>
<?php $permission=explode(',',$user->permissions);?>								
<div class="form-group col-md-12">
<h5>Landing Page</h5>
<hr>
<div class="col-md-12">
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="1" <?php if(in_array(1,$permission)){ echo "checked";}?>> Home Content 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="2" <?php if(in_array(2,$permission)){ echo "checked";}?>> About Content 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="3" <?php if(in_array(3,$permission)){ echo "checked";}?>> Our Business Content 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="4" <?php if(in_array(4,$permission)){ echo "checked";}?>> We The People 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="5" <?php if(in_array(5,$permission)){ echo "checked";}?>> Recognition Content	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="6" <?php if(in_array(6,$permission)){ echo "checked";}?>> Infrastructure Content 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="7" <?php if(in_array(7,$permission)){ echo "checked";}?>> Complaince Content 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="8" <?php if(in_array(8,$permission)){ echo "checked";}?>> Contact Content 	</label> </div>
</div>
<h5>CMS</h5>
<hr>

<div class="col-md-12">
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="9" <?php if(in_array(9,$permission)){ echo "checked";}?>> Add Page 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="10" <?php if(in_array(10,$permission)){ echo "checked";}?>> Add Links	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="11" <?php if(in_array(11,$permission)){ echo "checked";}?>> Video Gallery 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="12" <?php if(in_array(12,$permission)){ echo "checked";}?>> Photo Gallery 	</label> </div>
</div>

<h5>Product</h5>
<hr>

<div class="col-md-12">
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="13" <?php if(in_array(13,$permission)){ echo "checked";}?>> Product Category  </label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="14" <?php if(in_array(14,$permission)){ echo "checked";}?>> Product 	</label> </div>
</div>

<h5>Clients</h5>
<hr>

<div class="col-md-12">
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="15" <?php if(in_array(15,$permission)){ echo "checked";}?>> Header Content 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="16" <?php if(in_array(16,$permission)){ echo "checked";}?>> Testimonials 	</label> </div> 
</div>

<h5>Enquiry & Subscription</h5>
<hr>

<div class="col-md-12">
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="17" <?php if(in_array(17,$permission)){ echo "checked";}?>> Enquiry & Subscription 	</label> </div>
</div>
<h5>User Utility</h5>
<hr>

<div class="col-md-12">
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="18" <?php if(in_array(18,$permission)){ echo "checked";}?>> Add User 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="19" <?php if(in_array(19,$permission)){ echo "checked";}?>> View User 	</label> </div></div>




</div>
								
<div class="form-group col-md-6">
								<input name="Submit" type="submit" class="btn btn-success">
								</div>								
								
								
								
								<div class="clearfix"></div>
								
						   
								
								
								
								
								
								
							</form>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	<script>
	function validate(){
    if ($('input[name=permissions[]]:checked').length <= 0) {
        alert("Not active");
		return false;
    }else{
        alert("active");
    }
}
	</script>	
		
		
@endsection
