@extends('layouts.product')

@section('content')

<section class="story-bg2 top-sec">
                <div class="container">
                  <div class="row  ">
                     
                    <div class="col-md-12   ">
                       <div class="sec-title2 text-center">
                         <h1 class="story-title0 story-title text-white "><?php echo $categorymaster->page_title?></h1>
                         
                         <h2><?php echo $categorymaster->page_heading?></h2> 
                         
                      </div>
                    </div>

                     
                  </div>
                </div> 
              </section>
              <?php foreach($product as $pr)
              {
				 ?>
              <section   class="page-section  story-sec" onclick="viewmore('<?php echo $pr->slug; ?>');">
                <div class="container story-bg2"> 
                  <div class="row  mt-5">
                     
                    <div class="col-12 story-head text-right"> 
                       <h2 class="story-title0 "><?php echo $pr->category_name;?></h2> 
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3 ">
                       <img src="<?php echo url("uploads/".$pr->category_image);?>" class="img-fluid story-img">  
                    </div>
                    <div class="col-md-3 mb-3 d-md-block d-none">
                       <img src="<?php echo url("uploads/".$pr->category_image2);?>" class="img-fluid story-img">  
                    </div>
                    <div class="col-md-3 mb-3 d-md-block d-none ">
                       <img src="<?php echo url("uploads/".$pr->category_image3);?>" class="img-fluid story-img">  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 title-2">
                      <h1 class="story-title0 story-title-2 "> <?php echo $pr->description;?> </h1>
                    </div>
                    <div class="col-md-6 text-right">
                      <a class="more" href="<?php echo url("get-products/".$pr->slug);?>"> VIEW MORE<i class="fa fa-angle-double-right ml-3" aria-hidden="true"></i></a> 
                    </div>
                  </div> 
                </div> 
              </section>
              <?php }?>




<script>

function viewmore(thes)
{
	
	window.location ='<?php echo url("get-products");?>/'+thes;
	
}
  
</script>

@endsection