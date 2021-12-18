@extends('layouts.innerpages')

@section('content')
<section id="about" class="page-section section-class container top-sec" >
                  <div class="sec-title centered">
                     <h2>Our Blogs</h2>
                     <div class="separator"><span></span></div>
                  </div>
                  <div class="row gallery">
				   <?php foreach($vg as $v)
				 {?><?php 
                   ?>
                          <div class="single-video col-md-4">
                           <a href="<?php echo url("read-post/".$v->slug);?>"><img src="<?php echo url("uploads/".$v->image)?>" style="width:100%"></a>
                            <a href="<?php echo url("read-post/".$v->slug);?>"><h4><?php echo $v->title;?></h4></a>
                            <a href="<?php echo url("read-post/".$v->slug);?>"><p style="color:#000;height:60px;"><?php echo mb_strimwidth($v->description, 0, 100, "...");?></p></a>
							<a href="<?php echo url("read-post/".$v->slug);?>" class="btn btn-danger">Read More..</a>
                          </div>
					 <?php } ?>
                          




 
 
                       
                  </div>
               </section>
			   
			   

 
			   @endsection