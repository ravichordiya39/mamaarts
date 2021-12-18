@extends('layouts.innerpages')

@section('content')
<?php if($page->template==1)
{?>
<section id="about" class="page-section section-class container top-sec about-bg" style="background: linear-gradient(0deg, rgb(52 58 64 / 69%), rgb(52 58 64 / 68%)), url(<?php echo url("uploads/".$page->image);?>); min-height: 40vh; padding-top: 8vh;background-position: center center;    background-repeat: no-repeat;    background-size: cover;} " >
                   <div class="row justify-content-center">
                      <div class="col-md-4 col-sm-8 col-10 title-text" style="text-align:center">
					  
                       <h2 class="text-white" style="margin:25%"><?php echo $page->title; ?></h2>  
                        
                      </div>
                      
                    </div>
                   
               </section>


               <!-- about -->
              <section class="py-5">
                <div class="container">
                  <div class="row  ">
                   <div class="col">
                      <?php echo $page->description; ?>

                  </div>
                </div> 
              </section> 

<?php } 
else
{
	$data=json_decode($page->advancedcontent);
	
	?>			   
              
			   
			   <section id="about" class="page-section section-class container top-sec" >
                  <div class="sec-title centered">
                     <h2><?php echo $page->title; ?></h2>
                     <div class="separator"><span></span></div>
                  </div>
                  <div class="row">
                     <div class="col-md-4 col-sm-12 col-12">
                        <img src="<?php echo url("uploads/".$data->b1image);?>" class="img-fluid"> 
                     </div>
                     <div class="col-md-8 col-sm-12 col-12">
                        <p class="pt-4"><?php echo $data->b1content; ?> </p>
                     </div>
                  </div>
               </section>


               <!-- about -->
              <section class="bg-1">
                <div class="container">
                  <div class="row about-detail align-items-center row align-items-center justify-content-center">
                    <div class="col-md-6 content-box content-left">
                      <p class="lead"><?php echo $data->b2heading; ?></p>
                        <h2 class=" "><?php echo $data->b2title; ?></h2>
                        <p><?php echo $data->b2content; ?></p> 
                      
                    </div>
                    <div class="col-md-6 img-right">
                      <img src="<?php echo url("uploads/".$data->b2image);?>" class="img-fluid" />
                    </div>
                  </div>
                </div> 
              </section>  

              <section class="bg-2">
                <div class="container">
                  <div class="row about-detail align-items-center row align-items-center justify-content-center">
                     
                    <div class="col-md-6 img-left">
                      <img src="<?php echo url("uploads/".$data->b3image);?>" class="img-fluid" />
                    </div>

                    <div class="col-md-6 content-box  content-right">
                      <p class="lead"><?php echo $data->b3heading; ?></p>
                        <h2 class=" "><?php echo $data->b3title; ?></h2>
                        <p><?php echo $data->b3content; ?></p> 
                      
                    </div>
                  </div>
                </div> 
              </section>
 
  
              

               
 

              <!-- TESTIMONIALS -->
              <section class="testimonials py-5">
                <div class="container my-5">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="carousel slide multi-item-carousel" id="theCarousel">
                        <div class="carousel-inner row w-100 mx-auto">
						
						<?php foreach($data->slider as $sl)
						{?>
                          <div class="carousel-item active col-md-4 text-center" >
                            <img src="<?php echo url("uploads/".$sl->sliderimage);?>" class="img-fluid mx-auto d-block img-about">
                              <h5 class="mt-4 text-theme text-uppercase"><b><?php echo $sl->slidertitle;?></b></h5>
                              <p><?php echo $sl->sliderdescription;?></p>

                            </div>
						<?php } ?>
                           
                        </div>
                        <a class="carousel-control-prev" href="#theCarousel" role="button" data-slide="prev">
                          <i class="fa fa-angle-left fa-2x text-theme-arrow" aria-hidden="true"></i>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#theCarousel" role="button" data-slide="next">
                          <i class="fa fa-angle-right fa-2x text-theme-arrow" aria-hidden="true"></i>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
  
                </div>
              </section> 
<?php } ?>  
			   @endsection