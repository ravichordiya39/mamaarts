@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Recognition content :</h3>
						<div class="form-three widget-shadow">
							
								<h4>Edit Recognitions:</h4>
								<form class="form-horizontal" method="post" action="<?php echo url("recognition/updateteam");?>" enctype="multipart/form-data">
								<div id='TextBoxesGroup' class="form-group ">
										<div id="TextBoxDiv1" class="form-group team">
										   <div class="row">@csrf
											<label  class="col-sm-2 control-label">Title:</label>
											
											<div class="col-sm-2">
										       <input name="title" id="textbox1" class="form-control" value="<?php echo $recognitions->title?>">
										       <input name="id" id="id" type="hidden" class="form-control" value="<?php echo $recognitions->re_id?>">
									        </div>
										
											<label  class="col-sm-1 ">Photo:</label>
											
											<div class="col-sm-2">
										       <input name="photo" type="file" id="textbox1" class="form-control" >
										       <input name="oldphoto" type="hidden" id="textbox1" value="<?php echo $recognitions->photo; ?>" class="form-control" >
											   <img src="<?php echo url("uploads/".$recognitions->photo);?>" style="width:200px">
									        </div>
									        </div>
											
											<label  class="col-sm-2 control-label">Description:</label>
											
											<div class="col-sm-6">
										       <textarea name="description" id="textbox1" class="form-control"  maxlength="210"><?php echo $recognitions->description;?></textarea>
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
