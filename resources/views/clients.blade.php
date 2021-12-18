@extends('layouts.innerpages')



@section('content')

<section id="about" class="page-section section-class container top-sec"  >

                  <div class="sec-title centered">

                     <h2>Our Clients</h2>

                     <div class="separator"><span></span></div>

					 <?php if($clients)

					 {?>

                     <p class="pt-4"><?php echo $clients->para;?></p>

					 <?php } ?> 

                  </div>



                  <div class="row pb-5" >

                    <div class="col-md-12">


                        <div class="owl-slider">
                          <div id="carousel" class="owl-carousel">
                            <?php foreach($clientslogo as $logo)

                                {?>
                            <div class="item">
                              <img class="owl-lazy" data-src="<?php echo url("thumbnail/".$logo->logo);?>" style="height:150px; width:auto" alt="">
                            </div> 

                            <?php }  ?>   
                          </div>
                      </div>   


                        



                    </div>

                  </div>

                </section>





                <section class="page-section bg-light" id="testimonial-area">

    <div class="container py-5">

        <div class="row">

          

            <div class="col-md-8 offset-md-2">



              <div class="sec-title centered">

                     <h2>A Word From Our Customers</h2>

                     <div class="separator"><span></span></div> 

                  </div> 

            </div>

         

        </div>

        <div class="testi-wrap">

          <?php if(isset($testimonial[0]->photo))

		  {?>

            <div class="client-single active position-1" data-position="position-1">

                <div class="client-img">

                    <img src="<?php echo url("thumbnail/".$testimonial[0]->photo);?>" alt=""> 

                </div>

                <div class="client-comment">

                    <h3><?php echo $testimonial[0]->testimonial; ?></h3>

                    <span><i class="fa fa-quote-left"></i></span>

                </div>

                <div class="client-info">

                    <p><a href=""><?php echo $testimonial[0]->name; ?></a></p>

                </div>

            </div>

          <?php } ?>

		  <?php if(isset($testimonial[1]->photo))

		  {?>

            <div class="client-single inactive position-2" data-position="position-2">

                <div class="client-img">

                    <img src="<?php echo url("thumbnail/".$testimonial[1]->photo);?>" alt="">

                </div>

                <div class="client-comment">

                    <h3><?php echo $testimonial[1]->testimonial; ?></h3>

                    <span><i class="fa fa-quote-left"></i></span>

                </div>

                <div class="client-info">

                    <p><a href=""><?php echo $testimonial[1]->name; ?></a></p>

                </div>

            </div>

		  <?php } ?>

		  <?php if(isset($testimonial[2]->photo))

		  {?>

            <div class="client-single inactive position-21" data-position="position-21">

                <div class="client-img">

                    <img src="<?php echo url("thumbnail/".$testimonial[2]->photo);?>" alt="">

                </div>

                <div class="client-comment">

                    <h3><?php echo $testimonial[2]->testimonial; ?></h3>

                    <span><i class="fa fa-quote-left"></i></span>

                </div>

                <div class="client-info">

                    <p><a href=""><?php echo $testimonial[2]->name; ?></a></p>

                </div>

            </div>

        <?php } ?>

		  <?php if(isset($testimonial[3]->photo))

		  {?>

            <div class="client-single inactive position-3" data-position="position-3">

                <div class="client-img">

                    <img src="<?php echo url("thumbnail/".$testimonial[3]->photo);?>" alt="">

                </div>

                <div class="client-comment">

                    <h3><?php echo $testimonial[3]->testimonial; ?></h3>

                    <span><i class="fa fa-quote-left"></i></span>

                </div>

                <div class="client-info">

                    <p><a href=""><?php echo $testimonial[3]->name; ?></a></p>

                </div>

            </div>

           <?php } ?>

		  <?php if(isset($testimonial[4]->photo))

		  {?>

            <div class="client-single inactive position-4" data-position="position-4">

                <div class="client-img">

                    <img src="<?php echo url("thumbnail/".$testimonial[4]->photo);?>" alt="">

                </div>

                <div class="client-comment">

                    <h3><?php echo $testimonial[4]->testimonial; ?></h3>

                    <span><i class="fa fa-quote-left"></i></span>

                </div>

                <div class="client-info">

                    <p><a href=""><?php echo $testimonial[4]->name; ?></a></p>

                </div>

            </div>

          <?php } ?>

		  <?php if(isset($testimonial[5]->photo))

		  {?>

            <div class="client-single inactive position-5" data-position="position-5">

                <div class="client-img">

                    <img src="<?php echo url("thumbnail/".$testimonial[5]->photo);?>" alt="">

                </div>

                <div class="client-comment">

                    <h3><?php echo $testimonial[5]->testimonial; ?></h3>

                    <span><i class="fa fa-quote-left"></i></span>

                </div>

                <div class="client-info">

                    <p><a href=""><?php echo $testimonial[5]->name; ?></a></p>

                </div>

            </div>

          <?php } ?>

		  <?php if(isset($testimonial[6]->photo))

		  {?>

            <div class="client-single inactive position-6" data-position="position-6">

                <div class="client-img">

                    <img src="<?php echo url("thumbnail/".$testimonial[6]->photo);?>" alt="">

                </div>

                <div class="client-comment">

                    <h3><?php echo $testimonial[6]->testimonial; ?> </h3>

                    <span><i class="fa fa-quote-left"></i></span>

                </div>

                <div class="client-info">

                    <p><a href=""><?php echo $testimonial[6]->name; ?></a></p>

                </div>

            </div>

          <?php } ?>

		  <?php if(isset($testimonial[7]->photo))

		  {?>

            <div class="client-single inactive position-7" data-position="position-7">

                <div class="client-img">

                    <img src="<?php echo url("thumbnail/".$testimonial[7]->photo);?>" width="40px" alt="">

                </div>

                <div class="client-comment">

                    <h3><?php echo $testimonial[7]->testimonial; ?> </h3>

                    <span><i class="fa fa-quote-left"></i></span>

                </div>

				<div class="client-info">

                    <p><a href=""><?php echo $testimonial[7]->name; ?></a></p>

                </div>

                 

            </div>

           <?php } ?>

		  

        </div>

    </div>

</section>

  



			   @endsection