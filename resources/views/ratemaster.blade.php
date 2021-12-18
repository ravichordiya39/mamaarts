@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="inline-form widget-shadow">
						<div class="form-title">
							<h4>Rate Master :</h4>
						</div>
						<div class="form-body">
						<div data-example-id="simple-form-inline">
							<form class="form-inline" method="post" action="<?php echo url("rates/save");?>" enctype="multipart/form-data"> 
								<div class="form-group">
								@csrf
                                <label>Item Name:</label>								
								<input type="text" class="form-control" name="name" id="exampleInputEmail3" placeholder="Item Rate">								
								</div> 
								<div class="form-group">
								 <label>Enter Rate/Kg:</label>
								<input type="number" class="form-control" name="rates" id="exampleInputPassword3" placeholder="Ex. 10.00"> 
								</div> 
								<div class="form-group">
								 <label>Upload Icon:</label>
								<input type="file" class="form-control" name="icon" id="exampleInputPassword3" placeholder="Password"> 
								</div> 
								
								<button type="submit" class="btn btn-default">Submit</button> 
							</form> 
						</div>
						</div>
					</div>
					
					<div class="row">
						<div class="form-title">
							<h4>Rate List :</h4>
							<table class="table table-striped">
							<tr>
								<td>#</td>
								<td>Item Name</td>
								<td>Rates /KG</td>
								<td>Icon</td>
								<td>Action</td>
							</tr>
							<?php $i=1;
							foreach($rates as $rt)
							{?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo $rt->name;?></td>
								<td><?php echo $rt->rate;?></td>
								<td><img src="<?php echo url("icons/".$rt->icon);?>" height="80px"></td>
								<td>
								<a href="<?php echo url("edit-rate/".$rt->rateId);?>"><i class="fa fa-edit fa-2x"></i></a>
								<a href="<?php echo url("delete-rate/".$rt->rateId);?>" onclick="return confirm('Are you sure to delete?');"><i class="fa fa-trash fa-2x"></i></a>
								</td>
							</tr>
							<?php } ?>
							</table>
						</div>
					</div>
					
				</div>
			</div>
		</div>
@endsection
