@extends('layouts.app')

@section('content')
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
				
					<div class="row">
						<h3 class="title1">List of Enquiries/Subscription:</h3>
						<div class="form-three widget-shadow">
							
							<table class="table table-triped">
								<tr>
									<th>Sr. No</th>
									<th>Type</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Subject</th>
									<th>Query</th>
									<td>Date</td>
									<th>Delete</th>
								</tr>
							<?php $i=1;
							foreach($data as $dt)
							{?>
							<tr>
									<td><?php echo $i++;?></td>
									<td><?php if($dt->type=='1'){ echo "Enquiry";}else { echo "Subscription";}?></td>
									<td><?php echo $dt->name; ?></td>
									<td><?php echo $dt->email; ?></td>
									<td><?php echo $dt->phone; ?></td>
									<td><?php echo $dt->subject; ?></td>
									
									<td><?php echo $dt->message; ?></td>
									<td width="200"><?php echo date("d-M-Y H:i:s",strtotime($dt->created_at)); ?></td> 
									<td><a href="<?php echo url("deleteenquiry/".$dt->id);?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
								</tr>
							
							<?php } ?>
							
							
							
							</table>


{{ $data->links() }}
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
@endsection
