@extends('layouts.innerpages')

@section('content')
<section id="about" class="page-section section-class container top-sec" >
                  <div class="sec-title centered">
                     <h2>Video Gallery</h2>
                     <div class="separator"><span></span></div>
                  </div>
                  <div class="row gallery">
				   <?php foreach($vg as $v)
				 {?><?php  $link=explode("v=",$v->video);
                   ?>
                          <div class="single-video col-md-4">
                            <figure>
                              <iframe src="https://www.youtube.com/embed/<?php echo $link[1];?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" width="100%" height="220px" allowfullscreen></iframe>
                            </figure>
                            <h4><?php echo $v->caption;?></h4>
                          </div>
					 <?php } ?>
                          




 
 
                       
                  </div>
               </section>
			   
			   

 
			   @endsection