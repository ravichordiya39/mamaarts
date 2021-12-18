<!DOCTYPE html>

<html lang="en">

   <head>

      <meta charset="utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <meta name="description" content="">

      <meta name="author" content="">

      <title>MA'AM ARTS:: A Government Recognized Star Export House</title>

            <link rel="apple-touch-icon" sizes="57x57" href="<?php echo url("favicon/apple-icon-57x57.png")?>">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo url("favicon/apple-icon-60x60.png")?>">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo url("favicon/apple-icon-72x72.png")?>">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo url("favicon/apple-icon-76x76.png")?>">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo url("favicon/apple-icon-114x114.png")?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo url("favicon/apple-icon-120x120.png")?>">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo url("favicon/apple-icon-144x144.png")?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo url("favicon/apple-icon-152x152.png")?>">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo url("favicon/apple-icon-180x180.png")?>">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo url("favicon/android-icon-192x192.png")?>">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo url("favicon/favicon-32x32.png")?>">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo url("favicon/favicon-96x96.png")?>">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo url("favicon/favicon-16x16.png")?>">
		<link rel="manifest" href="<?php echo url("favicon/manifest.json")?>">
	
		<meta name="msapplication-TileImage" content="<?php echo url("favicon/ms-icon-144x144.png")?>"> 

      <!-- Bootstrap core CSS -->

      <link href="<?php echo url("front/vendor/bootstrap/css/bootstrap.min.css");?>" rel="stylesheet">

      <!-- Custom styles for this template -->

      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

      

      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

      <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet">

      <link href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" rel="stylesheet">



<style> .goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
body {
    top: 0px !important; 
    }
	
	a{ color:#fff;}</style>

      <link href="<?php echo url("front/css/simple-sidebar.css");?>" rel="stylesheet">

	  

	  <link href="<?php echo url("front/css/product-page.css");?>" rel="stylesheet"> 

      <link href="<?php echo url("front/css/client.css");?>" rel="stylesheet"> 
      <link href="<?php echo url("front/css/about.css");?>" rel="stylesheet">   

      <link href="<?php echo url("front/css/in-page.css");?>" rel="stylesheet"> 
	  <link href="<?php echo url("front/css/custom.css")?>" rel="stylesheet"> 
	  <link href="<?php echo url("front/css/gallery.css")?>" rel="stylesheet"> 

	  <link href="https://bxslider.com/lib/jquery.bxslider.css" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">



   </head>

<body onLoad="window.scroll(0,0)">

<main  class="">

         <div class="d-flex  " id="wrapper"   >

         

            <!-- Page Content -->

            <div id="page-content-wrapper">

              


<div id="alertModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     
      <div class="modal-body">
        <p>Your Query has been submitted successfully! Thanks for the Interest!</p>
      </div>
     
    </div>

  </div>
</div>
<div id="errorModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     
      <div class="modal-body">
        <p style="color:red">You have already subscribed!</p>
      </div>
     
    </div>

  </div>
</div>

 @yield('content')

   

<section class="footer  ">
                  <div class="container-fluid  ">
                     <div class="text-center pb-4">
                         <a href="<?php echo url("/");?>"><img src="<?php echo url("images/logo3.png");?>" class="mb-4" height="180px"></a>
                        <br>
						<?php if($contact)
						{?>
                        <a href="<?php echo $contact->facebook;?>" target="_blank"> <i class="fa fa-facebook-square fa-2x "></i></a>
                        <a href="<?php echo $contact->instagram;?>" target="_blank"> <i class="fa fa-instagram fa-2x"></i></a>
                        <a href="<?php echo $contact->twitter;?>" target="_blank"> <i class="fa fa-twitter fa-2x"></i></a>
                        <a href="<?php echo $contact->youtube;?>" target="_blank"> <i class="fa fa-youtube fa-2x"></i></a>
                        <a href="<?php echo $contact->linkedin;?>" target="_blank"> <i class="fa fa-linkedin fa-2x"></i></a>
                        <a href="<?php echo $contact->gplus;?>" target="_blank"> <i class="fa fa-google fa-2x"></i></a>
						<?php } ?>
<a href="https://api.whatsapp.com/send?phone=918094452052" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a>						
                     </div>
					 
					  <div class="container">
       
         <div class="row page-section">
            <div class="col-12 col-md-8 col-lg pt-5 m-auto pt-lg-0 ">
			<h2 align="">Feel free to contact us!</h2>
			<p class="contactmsg">Your Query has been submitted successfully! Thanks for the Interest! </p>
               <form id="confrm">
                  <div class="row">
                     <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Enter Full Name">
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col">
                        <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                     </div>
                  </div>@csrf
                  <div class="row mt-2">
                     <div class="col">
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        <input type="hidden" name="type"  id="type" class="form-control" value="1">
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col">
                        <input type="text" name="mobile" class="form-control" placeholder="Enter Phone">
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col">
                        <textarea class="form-control" name="message" rows="8" placeholder="How can we help?"></textarea>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
            <?php if($contact)
               {?>
            <div class="col-12 col-md-8 col-lg pt-5 m-auto pt-lg-0">
               <p class="text-left"><strong>Address:</strong></p>
               <p class="text-left">
                  <?php echo $contact->address;?>
               </p>
               <p class="text-left"><a href="mailto: <?php echo $contact->email1;?>"><i class="fa fa-envelope-open-o"></i>   <?php echo $contact->email1;?></a></p>
               <p class="text-left"> <a href="tel: <?php echo $contact->phone;?>"><i class="fa fa-phone"></i>  <?php echo $contact->phone;?></a></p>
               <p class="text-left"><a href="mailto:<?php echo $contact->email2;?>"><i class="fa fa-envelope-open-o"></i>  <?php echo $contact->email2;?></a></p>
               <p class="text-left"> <a href="tel: <?php echo $contact->phone2;?>"><i class="fa fa-phone"></i>  <?php echo $contact->phone2;?></a></p>
               <?php echo $contact->google;?>
            </div>
            <?php } ?>
         </div>
      </div>
        
                     
                  </div>
                  <div class="container-fluid  mt-4">
                     <div>
                        <p>© 2020 MA'AM ARTS. All Rights Reserved | Designed &amp; Developed by  DZONE India </p>
                     </div>
                  </div>
               </section>

            </div>

            <!-- /#page-content-wrapper -->

         </div>

      </main>

      <!-- /#wrapper -->

      <!-- Bootstrap core JavaScript -->

      <script src="<?php echo url("front/vendor/jquery/jquery.min.js");?>"></script>

      <script src="<?php echo url("front/js/custom.js");?>"></script>

      <script src="<?php echo url("front/vendor/bootstrap/js/bootstrap.bundle.min.js");?>"></script> 

    <script type="text/javascript">
    /* function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }

	function triggerHtmlEvent(element, eventName) {
	  var event;
	  if (document.createEvent) {
		event = document.createEvent('HTMLEvents');
		event.initEvent(eventName, true, true);
		element.dispatchEvent(event);
	  } else {
		event = document.createEventObject();
		event.eventType = eventName;
		element.fireEvent('on' + event.eventType, event);
	  }
	}

	jQuery('.lang-select').click(function() {
	  var theLang = jQuery(this).attr('data-lang');
	  jQuery('.goog-te-combo').val(theLang);

	// alert(jQuery(this).attr('href'));  
	  window.location = jQuery(this).attr('href');
	  location.reload();

	}); */
  </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
	
	$("#confrm").submit(function(){
		$.ajax({
            type: "POST",
			
            data: $(this).serialize(),
            url: "<?php echo url('send-enquiry');?>",
            success: function(data){
               if(data==1001)
			  {
				  if($("#type").val()==1)
				  {
				  $(".contactmsg").show();
				   setTimeout(function() { $(".contactmsg").hide();}, 3000);
				  }
				  else{
					$(".subsmsg").show();  
					 setTimeout(function() { $(".subsmsg").hide();}, 3000);
				  }
				 
			  }
			  if(data==1003)
			  {
				  
				  $(".subsmsgalert").show();
				  setTimeout(function() {$('.subsmsgalert').hide();}, 3000);
			  }

                }
            });
		  
	return false;	
	});
	
	
});
</script>

      <!-- Menu Toggle Script -->

      <script>

         $("#menu-toggle").click(function(e) {

           e.preventDefault();

           $("#wrapper").toggleClass("toggled");

         });

 $(document).ready(function () {

         $('.client-single').on('click', function (event) {
            event.preventDefault();

            var active = $(this).hasClass('active');

            var parent = $(this).parents('.testi-wrap');

            if (!active) {
                var activeBlock = parent.find('.client-single.active');

                var currentPos = $(this).attr('data-position');

                var newPos = activeBlock.attr('data-position');

                activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(currentPos);
                activeBlock.attr('data-position', currentPos);

                $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(newPos);
                $(this).attr('data-position', newPos);

            }
        });
   
   }(jQuery));




$('.bxslider').bxSlider({

  autoHover: true,

  auto: true,

  slideWidth: 250,

  minSlides: 2,

  maxSlides: 6,

  controls: true,

  pager: true,

  speed: 500,

  captions: true,

  slideMargin: 5,

});





$('.owl-carousel').owlCarousel({

    loop:true,

    margin:10,

   autoplay:true,

    nav:true,

    responsive:{

        0:{

            items:1

        },

        600:{

            items:1

        },

        1000:{

            items:2

        }

    }

})

  $(document).ready(function () {



         $('.client-single').on('click', function (event) {

            event.preventDefault();



            var active = $(this).hasClass('active');



            var parent = $(this).parents('.testi-wrap');



            if (!active) {

                var activeBlock = parent.find('.client-single.active');



                var currentPos = $(this).attr('data-position');



                var newPos = activeBlock.attr('data-position');



                activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(currentPos);

                activeBlock.attr('data-position', currentPos);



                $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(newPos);

                $(this).attr('data-position', newPos);



            }

        });

   

   }(jQuery));

      </script>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

               <script type="text/javascript">
        
          jQuery("#carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});


      </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.6/venobox.min.js"></script>	   

      <script>
         $("#menu-toggle").click(function(e) {
           e.preventDefault();
           $("#wrapper").toggleClass("toggled");
         });

 
         $(document).ready(function(){
    $('.venobox').venobox(); 
});
      </script>
   </body>

</html>