@extends('layouts.innerpages')

@section('content')
<section id="about" class="page-section section-class container top-sec" >
                  <div class="sec-title centered">
                     <h2><?php echo $post->title?></h2>
                     <div class="separator"><span></span></div>
                  </div>
                  <div class="row gallery">
				   <div class="col-md-8">
				   <?php echo $post->description;?>
				   </div>
                    <div class="col-md-4">
				   <img src="<?php echo url("uploads/".$post->image)?>" style="width:100%">
				   </div>      
                       
                  </div>
               </section>
			   
			   

 
			   @endsection