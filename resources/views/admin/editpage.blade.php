@extends('layouts.app')

@section('content')
<script type="text/javascript" src="<?php echo url("js/nicEdit-latest.js");?>"></script>
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					
					<div class="row">
						<h3 class="title1">Edit Pages:</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post" action="<?php echo url("cms/updatepage");?>" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label  class="col-sm-2 control-label">Page Position:</label>
									<div class="col-sm-8">
										
    <label class="radio-inline">
      <input type="radio" name="position" value="0" <?php if($page->position=='0'){ echo "checked";} ?>> Quick Links

    </label>
	<label class="radio-inline">
      <input type="radio" name="position"  value="1" <?php if($page->position=='1'){ echo "checked";} ?>> Our Business
    </label>
    <label class="radio-inline">
      <input type="radio" name="position" value="2" <?php if($page->position=='2'){ echo "checked";} ?>> About Us

    </label>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Template:</label>
									<div class="col-sm-8">
										<label class="radio-inline">
											<input type="radio" name="template" <?php if($page->template=='1'){ echo "checked";} ?> value="1"> Basic Design
										</label>
										<label class="radio-inline">
											<input type="radio" name="template" <?php if($page->template=='0'){ echo "checked";} ?>  value="0"> Advanced Design

										</label>
    
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Page Order:</label>
									<div class="col-sm-8">
										<input name="pageorder" class="form-control" style="width: 50px;" required value="<?php echo $page->pageorder?>">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Page Title:</label>
									<div class="col-sm-8">
										<input name="title" class="form-control" required value="<?php echo $page->title;?>">
										<input name="id" type="hidden" class="form-control" required value="<?php echo $page->id;?>">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Meta Keywords:</label>
									<div class="col-sm-8">
										<input name="metakeywords" class="form-control" required value="<?php echo $page->metakeywords;?>">
									</div>
								</div>
							    <div class="form-group">
									<label  class="col-sm-2 control-label">Meta Description:</label>
									<div class="col-sm-8">
										<input name="metadescription" class="form-control" required value="<?php echo $page->metadescription;?>">
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Page Status:</label>
									<div class="col-sm-8">
										<label class="radio-inline">
      <input type="radio" name="status" <?php if($page->status==1){ echo "checked";}?> value="1"> Active
    </label>
    <label class="radio-inline">
      <input type="radio" name="status" value="0" <?php if($page->status==0){ echo "checked";}?>> Inactive
    </label>
									</div>
								</div>
								
						   <div id="normalpage" style="display: <?php if($page->template=='1'){ echo "block";}else { echo "none";}?>">
								<div class="form-group">
									<label  class="col-sm-2 control-label">Image:</label>
									<div class="col-sm-8">
										<input type="file" name="image" class="form-control" >
										<img src="<?php echo url("uploads/".$page->image);?>" style="width:200px"> 
										<input type="hidden" name="oldimage" value="<?php echo $page->image?>">
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Content:</label>
									<div class="col-sm-8">
										<textarea name="description" id="myArea" class="form-control"  rows="6"><?php echo $page->description?></textarea>
									</div>
								</div>
								
							    
								<div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>
								</div>
								
								
								
								<?php if($page->advancedcontent!='')
								{?>
								<div id="advancepage" style="display: <?php if($page->template=='0'){ echo "block";}else { echo "none";}?>"> 
								<?php 
									$data=json_decode($page->advancedcontent);
								
									
								?>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block one Image:</label>
									<div class="col-sm-8">
										<input name="b1image" type="file"  class="form-control">
										<?php if($data->b1image!='')
										{?>
										<img src="<?php echo url("uploads/".$data->b1image);?>" style="width:100px;">
										<input type="hidden" name="oldb1image" value="<?php echo $data->b1image?>">
										<?php  } ?>
										
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block one Content:</label>
									<div class="col-sm-8">
										<textarea name="b1content" class="form-control"  rows="6"><?php echo $data->b1content?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block two Heading:</label>
									<div class="col-sm-8">
										<input name="b2heading" type="text"  class="form-control" value="<?php echo $data->b2heading?>">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block two Title:</label>
									<div class="col-sm-8">
										<input name="b2title" type="text"  class="form-control" value="<?php echo $data->b2title?>">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block two Image:</label>
									<div class="col-sm-8">
										<input name="b2image" type="file"  class="form-control" >
										<img src="<?php echo url("uploads/".$data->b2image);?>"  style="width:100px;">
										<input type="hidden" name="oldb2image" value="<?php echo $data->b2image?>">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block two Content:</label>
									<div class="col-sm-8">
										<textarea name="b2content" class="form-control"  rows="6"><?php echo $data->b2content?></textarea>
									</div>
								</div> 
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block three Heading:</label>
									<div class="col-sm-8">
										<input name="b3heading" type="text"  class="form-control" value="<?php echo $data->b3heading?>">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block three Title:</label>
									<div class="col-sm-8">
										<input name="b3title" type="text"  class="form-control" value="<?php echo $data->b3title?>">
									</div>
								</div>
								
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block three Image:</label>
									<div class="col-sm-8">
										<input name="b3image" type="file" class="form-control">
										<img src="<?php echo url("uploads/".$data->b3image);?>"  style="width:100px;">
										<input type="hidden" name="oldb3image" value="<?php echo $data->b3image?>">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block three Content:</label>
									<div class="col-sm-8">
										<textarea name="b3content" class="form-control"  rows="6"><?php echo $data->b3content?></textarea>
									</div>
								</div>
								
<div id='TextBoxesGroup'>

<input type="hidden" id="counter" name="counter" value="<?php echo count($data->slider)?>">
<?php $i=1; foreach($data->slider as $sl)
{?>
	<div id="TextBoxDiv<?php echo $i;?>">
			<div class="form-group">
				<label  class="col-sm-2 control-label">Slider Image <?php echo $i;?>:</label>
				<div class="col-sm-8">
					<input name="sliderimage<?php echo $i;?>" id="sliderimage<?php echo $i;?>" type="file"  class="form-control">
					<img src="<?php echo url("uploads/".$sl->sliderimage);?>"  style="width:100px;">
					<input type="text" name="oldsliderimage<?php echo $i;?>" value="<?php echo $data->b3image?>">
				</div>
			</div>
			
			<div class="form-group">
				<label  class="col-sm-2 control-label">Slider Title <?php echo $i;?>:</label>
				<div class="col-sm-8">
					<input name="slidertitle<?php echo $i;?>"  id="slidertitle<?php echo $i;?>" type="text"  class="form-control" value="<?php echo $sl->slidertitle;?>">
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Slider Description <?php echo $i;?>:</label>
				<div class="col-sm-8">
					<input name="sliderdescription<?php echo $i;?>"  id="sliderdescription<?php echo $i;?>" type="text"  class="form-control" value="<?php echo $sl->sliderdescription;?>">
				</div>
			</div>
								
								
								
	</div>
<?php $i++; } ?>
</div>
<input type='button' value='Add Slider Content' class="btn btn-success" id='addButton' />
<input type='button' value='Remove  Slider Content' class="btn btn-danger"  id='removeButton' />

   
								
							<div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>	    
								
								</div>
								
								<?php } 
								else{?>
								
								<div id="advancepage" style="display:none"> 
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block one Image:</label>
									<div class="col-sm-8">
										<input name="b1image" type="file"  class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block one Content:</label>
									<div class="col-sm-8">
										<textarea name="b1content" class="form-control"  rows="6"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block two Heading:</label>
									<div class="col-sm-8">
										<input name="b2heading" type="text"  class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block two Title:</label>
									<div class="col-sm-8">
										<input name="b2title" type="text"  class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block two Image:</label>
									<div class="col-sm-8">
										<input name="b2image" type="file"  class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block two Content:</label>
									<div class="col-sm-8">
										<textarea name="b2content" class="form-control"  rows="6"></textarea>
									</div>
								</div> 
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block three Heading:</label>
									<div class="col-sm-8">
										<input name="b3heading" type="text"  class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block three Title:</label>
									<div class="col-sm-8">
										<input name="b3title" type="text"  class="form-control">
									</div>
								</div>
								
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block three Image:</label>
									<div class="col-sm-8">
										<input name="b3image" type="file" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Block three Content:</label>
									<div class="col-sm-8">
										<textarea name="b3content" class="form-control"  rows="6"></textarea>
									</div>
								</div>
								
<div id='TextBoxesGroup'>

<input type="hidden" id="counter" name="counter" value="2">
	<div id="TextBoxDiv1">
			<div class="form-group">
				<label  class="col-sm-2 control-label">Slider Image 1:</label>
				<div class="col-sm-8">
					<input name="sliderimage1" id="sliderimage1" type="file"  class="form-control">
				</div>
			</div>
			
			<div class="form-group">
				<label  class="col-sm-2 control-label">Slider Title 1:</label>
				<div class="col-sm-8">
					<input name="slidertitle1"  id="slidertitle1" type="text"  class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label  class="col-sm-2 control-label">Slider Description 1:</label>
				<div class="col-sm-8">
					<input name="sliderdescription1"  id="sliderdescription1" type="text"  class="form-control">
				</div>
			</div>
								
								
								
	</div>
</div>
<input type='button' value='Add Slider Content' class="btn btn-success" id='addButton' />
<input type='button' value='Remove  Slider Content' class="btn btn-danger"  id='removeButton' />

   
								
							<div class="form-group">
								
									<div class="col-sm-10" style="text-align:right">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>	    
								
								</div>
								
								<?php } ?>
								
							</form>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
 $(document).ready(function () {
	 bkLib.onDomLoaded(function() {
        new nicEditor({fullPanel : true, maxHeight:100}).panelInstance('myArea');
        $('.nicEdit-panelContain').parent().width('100%');
        $('.nicEdit-panelContain').parent().next().width('98%');
        $('.nicEdit-main').width('100%');
        });
 var counter = parseInt($("#counter").val())+1;
$("#addButton").click(function () {
           
            if (counter > 10) {
                alert("Only 10 textboxes allow");
                return false;
            }
            var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);
			newTextBoxDiv.after().html('<div class="form-group"><label  class="col-sm-2 control-label">Slider Image '+counter+':</label><div class="col-sm-8"><input name="sliderimage'+counter+'" id="sliderimage'+counter+'" type="file"  class="form-control"></div></div><div class="form-group"><label  class="col-sm-2 control-label">Slider Title '+counter+':</label><div class="col-sm-8"><input name="slidertitle'+counter+'"  id="slidertitle'+counter+'" type="text"  class="form-control"></div></div><div class="form-group"><label  class="col-sm-2 control-label">Slider Description '+counter+':</label><div class="col-sm-8"><input name="sliderdescription'+counter+'"  id="sliderdescription'+counter+'" type="text"  class="form-control"></div></div>');  
         newTextBoxDiv.appendTo("#TextBoxesGroup");
           $("#counter").val(counter);
            counter++;
        });

        $("#removeButton").click(function () {
            if (counter == 1) {
                alert("No more textbox to remove");
                return false;
            }
              counter--;
             $("#TextBoxDiv" + counter).remove();
			  $("#counter").val(counter);
              });
			  
			  
			  
			  $("input[name='template']").click(function(){
				  alert("asd");
				  var id=$(this).val();
				  if(id==1)
				  {
					  
					   $("#advancepage").hide();
					  $("#normalpage").show();
					  
				  }
				  else
				  {
					  $("#advancepage").show();
					  $("#normalpage").hide();
					  
				  }
				  
				  
			  });
        
    });
</script>
		
@endsection
