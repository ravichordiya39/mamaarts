@extends('layouts.product')
@section('content')
<?php foreach($product as $pr)
   {
   
    
   
   if($pr->template=='t1')
   
   {
   
   $tdata=json_decode($pr->templatedata);
   
   
   
   ?>
<section class="story-bg2 top-sec">
   <div class="container">
      <div class="row  ">
         <div class="col-md-12   ">
            <div class="sec-title2 text-center">
               <h1 class="story-title0 story-title text-white "><?php echo $pr->product_name ?></h1>
               <h2><?php echo $pr->product_description ?></h2>
            </div>
         </div>
      </div>
   </div>
</section>
<section   class="page-section  story-sec" >
   <div class="container  ">
      <div class="row  ">
         <a class=" col-md-12 text-center venobox" data-gall="productgal1" href="<?php echo url("uploads/".$tdata->t1b1baseimage);?>"> 
             <img src="<?php echo url("uploads/".$tdata->t1b1baseimage);?>" class="img-fluid story-img0">
         </a>
         <div class="col-md-12  ">
            <div class="row  justify-content-center ">
               <div class="col-md-12 col-sm-12 col-12">
                  <h1 class="story-title0 story-title-3"><?php echo $tdata->t1b2heading; ?></h1>
               </div>
               <div class="col-md-8 col-sm-8 col-8">
                  <p class="text-center "><?php echo $tdata->t1b2description; ?></p>
               </div>
            </div>
         </div>
         <a class="col-md-4 col-sm-4 col-12 align-self-start venobox" data-gall="productgal1" href="<?php echo url("uploads/".$tdata->t1b2image1);?>"> 
             <img src="<?php echo url("uploads/".$tdata->t1b2image1);?>" class="img-fluid story-img0">
         </a>
         <a class="col-md-4 col-sm-4 col-12 venobox" data-gall="productgal1" href="<?php echo url("uploads/".$tdata->t1b2image2);?>"> 
             <img src="<?php echo url("uploads/".$tdata->t1b2image2);?>" class="img-fluid story-img0">
         </a>
         <a class="col-md-4 col-sm-4 col-12 align-self-end venobox" data-gall="productgal1" href="<?php echo url("uploads/".$tdata->t1b2image3);?>"> 
             <img src="<?php echo url("uploads/".$tdata->t1b2image3);?>" class="img-fluid story-img0">
         </a>

         <div class="col-md-12  ">
               <div class="row  justify-content-center ">
                  <div class="col-md-12 col-sm-12 col-12">
                     <h1 class="story-title0 story-title-3"><?php echo $tdata->t1b3heading?></h1>
                  </div>
                  <div class="col-md-8 col-sm-8 col-8">
                     <p class="text-center "><?php echo $tdata->t1b3description; ?></p>
                  </div>
               </div>
         </div>

         <a class="col-md-12 col-sm-12 col-12 mt-5 venobox" data-gall="productgal1" href="<?php echo url("uploads/".$tdata->t1b3image1);?>" >
            <img src="<?php echo url("uploads/".$tdata->t1b3image1);?>" class="img-fluid story-img0">
         </a>
         <a class="col-md-12 col-sm-12 col-12 mt-5 venobox" data-gall="productgal1" href="<?php echo url("uploads/".$tdata->t1b3image2);?>" >
            <img src="<?php echo url("uploads/".$tdata->t1b3image2);?>" class="img-fluid story-img0">
         </a>
         <a class="col-md-12 col-sm-12 col-12 mt-5 venobox" data-gall="productgal1" href="<?php echo url("uploads/".$tdata->t1b3image3);?>" >
            <img src="<?php echo url("uploads/".$tdata->t1b3image3);?>" class="img-fluid story-img0">
         </a>
      </div>
   </div>
</section>
 
 
<?php }
   if($pr->template=='t2')
   
   {
   
      
   
   $tdata=json_decode($pr->templatedata);
   
   
   
   ?>
<section class="story-bg2 top-sec layout2">
   <div class="container">
      <div class="row  ">
         <div class="col-md-12   ">
            <div class="sec-title2 text-center">
               <h1 class="story-title0 story-title text-white "><?php echo $pr->product_name ?></h1>
               <h2><?php echo $pr->product_description ?></h2>
            </div>
         </div>
      </div>
   </div>
</section>


<section   class="page-section story-sec" >
   <div class="container  ">
      <div class="row  justify-content-center mt-5 ">
         <a class="col-md-4 col-sm-4  align-self-start venobox" data-gall="productgal2" href="<?php echo url("uploads/".$tdata->t2b1baseimage1);?>">
            <img src="<?php echo url("uploads/".$tdata->t2b1baseimage1);?>" class="img-fluid story-img0">
         </a>
         <a class="col-md-4 col-sm-4  align-self-start venobox" data-gall="productgal2" href="<?php echo url("uploads/".$tdata->t2b1baseimage2);?>">
            <img src="<?php echo url("uploads/".$tdata->t2b1baseimage2);?>" class="img-fluid story-img0">
         </a>
         <a class="col-md-4 col-sm-4  align-self-end venobox" data-gall="productgal2" href="<?php echo url("uploads/".$tdata->t2b1baseimage3);?>">
            <img src="<?php echo url("uploads/".$tdata->t2b1baseimage3);?>" class="img-fluid story-img0">
         </a>
         <div class="col-md-12">
            <div class="row  justify-content-center ">
               <div class="col-md-12 col-sm-12 col-12">
                  <h1 class="story-title0 story-title-3"><?php echo $tdata->t2b2heading; ?></h1>
               </div>
               <div class="col-md-8 col-sm-8 col-8">
                  <p class="text-center "><?php echo $tdata->t2b2description; ?></p>
               </div>
            </div> 
         </div>
         <a class=" col-md-12 col-sm-12 col-12 align-self-end venobox" data-gall="productgal2" href="<?php echo url("uploads/".$tdata->t2b2image1);?>">
            <img src="<?php echo url("uploads/".$tdata->t2b2image1);?>" class="img-fluid story-img0">
         </a>
         <div class="col-md-12">
            <div class="row  justify-content-center ">
               <div class="col-md-12 col-sm-12 col-12">
                  <h1 class="story-title0 story-title-3"><?php echo $tdata->t2b3heading; ?></h1>
               </div>
               <div class="col-md-8 col-sm-8 col-8">
                  <p class="text-center "><?php echo $tdata->t2b3description; ?></p>
               </div>
            </div>
         </div> 
         <a class=" col-md-12 col-sm-12 col-12 align-self-start venobox" data-gall="productgal2" href="<?php echo url("uploads/".$tdata->t2b3image1);?>">
            <img src="<?php echo url("uploads/".$tdata->t2b3image1);?>" class="img-fluid story-img0"> 
         </a>
         <a class=" col-md-12 col-sm-12 col-12 align-self-start venobox" data-gall="productgal2" href="<?php echo url("uploads/".$tdata->t2b3image2);?>">
            <img src="<?php echo url("uploads/".$tdata->t2b3image2);?>" class="img-fluid story-img0"> 
         </a>
         <a class=" col-md-12 col-sm-12 col-12 align-self-end venobox" data-gall="productgal2" href="<?php echo url("uploads/".$tdata->t2b3image3);?>">
            <img src="<?php echo url("uploads/".$tdata->t2b3image3);?>" class="img-fluid story-img0"> 
         </a>  
      </div>
   </div>
</section> 
 
<?php }
   if($pr->template=='t3')
   
   {
   
      
   
    $tdata=json_decode($pr->templatedata);
   
    
   
    ?>
<section class="story-bg2 top-sec layout3">
   <div class="container">
      <div class="row  ">
         <div class="col-md-12   ">
            <div class="sec-title2 text-center">
               <h1 class="story-title0 story-title text-white "><?php echo $pr->product_name ?></h1>
               <h2><?php echo $pr->product_description ?></h2>
            </div>
         </div>
      </div>
   </div>
</section>
<section   class="page-section story-sec" >
   <div class="container  ">
      <div class="row  justify-content-center mt-5 ">
         <a class="col-md-12 col-12 align-self-start venobox" data-gall="productgal3" href="<?php echo url("uploads/".$tdata->t3b1baseimage1);?>">
            <img src="<?php echo url("uploads/".$tdata->t3b1baseimage1);?>" class="img-fluid story-img0"> 
         </a>
         <a class="col-md-12 col-12 align-self-end venobox" data-gall="productgal3" href="<?php echo url("uploads/".$tdata->t3b1baseimage2);?>">
            <img src="<?php echo url("uploads/".$tdata->t3b1baseimage2);?>" class="img-fluid story-img0"> 
         </a>
         <div class="col-md-12">
            <div class="row  justify-content-center ">
               <div class="col-md-12 col-sm-12 col-12">
                  <h1 class="story-title0 story-title-3"><?php echo $tdata->t3b2heading; ?></h1>
               </div>
               <div class="col-md-8 col-sm-8 col-8">
                  <p class="text-center "><?php echo $tdata->t3b2description; ?></p>
               </div>
            </div> 
         </div>
         <a class="col-md-12 col-12 align-self-end venobox" data-gall="productgal3" href="<?php echo url("uploads/".$tdata->t3b2image1);?>">
            <img src="<?php echo url("uploads/".$tdata->t3b2image1);?>" class="img-fluid story-img0"> 
         </a>
         <a class="col-md-12 col-12 align-self-end venobox" data-gall="productgal3" href="<?php echo url("uploads/".$tdata->t3b2image2);?>">
            <img src="<?php echo url("uploads/".$tdata->t3b2image2);?>" class="img-fluid story-img0"> 
         </a>
         <a class="col-md-12 col-12 align-self-end venobox" data-gall="productgal3" href="<?php echo url("uploads/".$tdata->t3b2image3);?>">
            <img src="<?php echo url("uploads/".$tdata->t3b2image3);?>" class="img-fluid story-img0"> 
         </a>

      </div>
   </div>
</section>
 
<?php }}?>
@endsection