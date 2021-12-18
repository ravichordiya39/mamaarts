@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Edit Complaince content :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("compliance/updatecompara");?>" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-8">
										<input name="description" class="form-control" value="<?php echo $complaincepara->complaince_para; ?>">
										<input type="hidden" name="id" class="form-control" value="<?php echo $complaincepara->c_id; ?>">
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
