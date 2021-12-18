@extends('layouts.app')

@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
										
					<div class="row">
					<h3 class="title1">View Pages:</h3>
						<table class="table table-striped">
						
						<tr>
							<th>Sr. No.</th>
							<th>Title</th>
							<th>Description</th>
							<th>Meta Keywords</th>
							<th>Meta Description</th>
							<th>Action</th>
						</tr>
						<?php $i=1;
						foreach($pages as $dt)
						{?>
						<tr>
							<td><?php echo $i++;?></td>
							<td style="max-width:300px; word-break: break-all;"><?php echo $dt->title;?></td>
							<td style="max-width:300px; word-break: break-all;" title='<?php echo strip_tags($dt->description);?>'><?php echo substr(strip_tags($dt->description),0,100);?> .....</td>
							<td style="max-width:300px; word-break: break-all;"><?php echo $dt->metakeywords;?></td>
							<td style="max-width:300px; word-break: break-all;"><?php echo $dt->metadescription;?></td>
							
						<td>
						<a href="<?php echo url("editpage/".$dt->id);?>" class="btn btn-danger"><i class="fa fa-edit"></i></a>
						
						<a href="<?php echo url("deletepage/".$dt->id);?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						</td>
						</tr>
						<?php } ?>
						
						</table>
					</div>
					
				</div>
			</div>
		</div>
@endsection
