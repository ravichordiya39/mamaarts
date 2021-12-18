@extends('layouts.innerpages')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.6/venobox.min.css" rel="stylesheet">
<section id="about" class="page-section section-class container top-sec" >
                  <div class="sec-title centered">
                     <h2>Photo Gallery</h2>
                     <div class="separator"><span></span></div>
                  </div>
                  <div class="row"> 
                      <?php foreach($pg as $p)
					  {?>
					  <div class="col-md-3">
                       <a class="venobox col-md-3 col-sm-6 col-6 mb-3" data-gall="myGallery" href="<?php echo url("uploads/".$p->photo);?>"><img src="<?php echo url("thumbnail/".$p->photo);?>" class="img-fluid" /></a>
                      <h4 align="center"><?php echo $p->caption;?></h4>
                      </div>
					  <?php } ?>

 
 
                       
                  </div>
               </section>
			   

			   @endsection