@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Edit Clients Logo:</h3>
						<div class="form-three widget-shadow">
							
								
								<form class="form-horizontal" method="post" action="<?php echo url("clients/updateclientslogo");?>" enctype="multipart/form-data">
								<div id='TextBoxesGroup' class="form-group ">
										<div id="TextBoxDiv1" class="form-group team">
										   <div class="row">@csrf
											<label  class="col-sm-2 control-label">Title:</label>
											
											<div class="col-sm-2">
										       <input name="title" id="textbox1" class="form-control"  value="<?php echo $clientslogo->title?>">
										       <input name="id" type="hidden" id="textbox1" class="form-control"  value="<?php echo $clientslogo->id?>">
									        </div>
										
											<label  class="col-sm-1 ">Photo:</label>
											
											<div class="col-sm-2">
										       <input name="photo" type="file" id="textbox1" class="form-control" >
										       <input name="oldlogo" type="text" id="textbox1" class="form-control" value="<?php echo $clientslogo->logo; ?>">
									        </div>
											<div class="col-sm-2">
										       <img src="<?php echo url("thumbnail/".$clientslogo->logo);?>"  class="img-responsive">
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
