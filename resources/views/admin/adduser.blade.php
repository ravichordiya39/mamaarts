@extends('layouts.app')

@section('content')
<script type="text/javascript" src="js/nicEdit-latest.js"></script>
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Add Users:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("user/adduser");?>" enctype="multipart/form-data" onsubmit="return validate();">
								@csrf							
								
								<div class="form-group col-md-6">
									<label  class="col-sm-4 control-label">Name:</label>
									<div class="col-sm-8">
										<input name="name" class="form-control" required>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label  class="col-sm-4 control-label">Email:</label>
									<div class="col-sm-8">
										<input name="email" type="email" class="form-control" required>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label  class="col-sm-4 control-label">Mobile:</label>
									<div class="col-sm-8">
										<input name="mobile" class="form-control" required>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label  class="col-sm-4 control-label">Address:</label>
									<div class="col-sm-8">
										<input name="address" class="form-control" required>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label  class="col-sm-4 control-label">Enter Password:</label>
									<div class="col-sm-8">
										<input name="password" class="form-control" type="password" required>
									</div>
								</div>	
								<div class="form-group col-md-6">
									<label  class="col-sm-4 control-label">Confirm Password:</label>
									<div class="col-sm-8">
										<input name="conpassword" class="form-control" type="password" required>
									</div>
								</div>
								<div class="form-group col-md-12">
								<h4>Select Permissions</h4>
								</div>
								
<div class="form-group col-md-12">
<h5>Landing Page</h5>
<hr>
<div class="col-md-12">
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="1"> Home Content 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="2"> About Content 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="3"> Our Business Content 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="4"> We The People 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="5"> Recognition Content	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="6"> Infrastructure Content 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="7"> Complaince Content 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="8"> Contact Content 	</label> </div>
</div>
<h5>CMS</h5>
<hr>

<div class="col-md-12">
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="9"> Add Page 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="10"> Add Links	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="11"> Video Gallery 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="12"> Photo Gallery 	</label> </div>
</div>

<h5>Product</h5>
<hr>

<div class="col-md-12">
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="13"> Product Category  </label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="14"> Product 	</label> </div>
</div>

<h5>Clients</h5>
<hr>

<div class="col-md-12">
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="15"> Header Content 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="16"> Testimonials 	</label> </div> 
</div>

<h5>Enquiry & Subscription</h5>
<hr>

<div class="col-md-12">
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="17"> Enquiry & Subscription 	</label> </div>
</div>
<h5>User Utility</h5>
<hr>

<div class="col-md-12">
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="18"> Add User 	</label> </div>
<div class="form-group col-md-3"><label><input type="checkbox" name="permissions[]" value="19"> View User 	</label> </div></div>




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
