<!DOCTYPE html>
<html lang="en"> 
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
     <title>MA'AM ARTS:: A Government Recognized Star Export House</title>
      <link rel="icon" href="images/favicon.png">
      <!-- Bootstrap core CSS -->
      <link href="<?php echo url("front/vendor/bootstrap/css/bootstrap.min.css");?>" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
      
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet">
      <link href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> <link href="<?php echo url("front/css/custom.css")?>" rel="stylesheet"> 

      <link href="<?php echo url("front/css/simple-sidebar.css");?>" rel="stylesheet">
      
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
	




   </head>
<body onLoad="window.scroll(0,0)">


		 
		 
		
            @yield('content')
 <div style="    position: absolute;
    float: right;
    bottom: 50px;
    position: fixed;  
    z-index: 1000;
    right: 10px;"><a href="https://api.whatsapp.com/send?phone=918094452052" target="_blank"><img src="<?php echo url("images/whatsapp.png");?>"></a></div>  
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
                     <div class="row align-items-top    text-md-left">
                        <div class="col-12 col-sm-12 col-md-3">
                           <h4><strong>Connect With us</strong></h4>
                           <form id="contactfrm">
						   <p class="subsmsg">Thanks for subscribing us! </p>
						   <p class="subsmsgalert">You have already subscribed! </p>
                              <input type="text" name="name" class="formStyle" placeholder="Name (required)" required="">
                              <input type="email" name="email" class="formStyle" placeholder="Email (required)" required="">@csrf
							  <input type="hidden" name="type" class="form-control" value="0">
							  <input type="hidden" name="subject" class="form-control" value="">
                              <input type="text" name="mobile" class="formStyle" onkeypress="return isNumber(event)"  placeholder="Phone (required)" required="">
                              <textarea class="formStyle" name="message" rows="2" placeholder="How can we help?"></textarea> 
                              <button type="submit" class="btn btn-primary px-5">Subscribe</button>
                           </form>
                        </div>
                        <div class="col-sm-12 col-md-3 mt-4 mt-sm-0">
                           <h4><strong>About Us</strong></h4>
						     
						    
						    
                           <?php foreach($aboutpages as $cl)
						   {?>
                           <p><a href="<?php echo url('pages/'.$cl->slug);?>" class="text-white text-muted"><?php echo $cl->title;?></a></p>
                           <?php } ?>
						   <p><a href="<?php echo url('our-video-gallery');?>" class="text-white text-muted">Video Gallery</a></p>
						     <p><a href="<?php echo url('our-photo-gallery');?>" class="text-white text-muted">Photo Gallery</a></p>
							   <p><a href="<?php echo url("blogs");?>" class="text-white text-muted">Blog</a></p>
                        </div>
                        <div class="col-sm-12 col-md-3 mt-4 mt-sm-0">
                           <h4><strong>Our Business</strong></h4>
						   <?php foreach($complaincelinks as $cl)
						   {?>
                           <p><a href="<?php echo $cl->link;?>" target="_blank" class="text-white text-muted"><?php echo $cl->title;?></a></p>
                           <?php } ?>
						   <?php foreach($complaincepages as $cl)
						   {?>
                           <p><a href="<?php echo url('pages/'.$cl->slug);?>" target="_blank" class="text-white text-muted"><?php echo $cl->title;?></a></p>
                           <?php } ?>
						   
                        </div>
                        <div class="col-sm-12 col-md-3 mt-4 mt-sm-0">
                           <h4><strong>Quick Link</strong></h4>
                            <?php foreach($quicklinks as $cl)
						   {?>
                           <p><a href="<?php echo $cl->link;?>" target="_blank" class="text-white text-muted"><?php echo $cl->title;?></a></p>
                           <?php } ?>
						   <?php foreach($quicklinks2 as $cl)
						   {?>
                          <p><a href="<?php echo url('pages/'.$cl->slug);?>" class="text-white text-muted"><?php echo $cl->title;?></a></p>
                           <?php } ?>
						   <p><a href="<?php echo url('sitemap.xml');?>" class="text-white text-muted">Sitemap</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid  mt-4">
                     <div>
                        <p>© 2020 MA'AM ARTS. All Rights Reserved | Designed &amp; Developed by  <a href="https://dzoneindia.co.in" target="_blank">DZONE India</a></p>
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
<script>
$(document).ready(function(){
	
	$("#confrm,#contactfrm").submit(function(){
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
		  $(this)[0].reset();
	return false;	
	});
	
	
});
</script>

<script type="text/javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.6/venobox.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
             $('.venobox').venobox(); 
         });
      </script>
      

      <!-- Menu Toggle Script -->
      <script>
         $("#menu-toggle").click(function(e) {
           e.preventDefault();
           $("#wrapper").toggleClass("toggled");
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
            items:1
        }
    }
})
var st=0;
 $('body').on('mousewheel', function(e){
        if(e.originalEvent.wheelDelta > 0) {
			st--;
            if(st<3)
			{
				
				$("#video-bg").prop("muted", false);
			}
        }
        else {
			st++; 
            if(st>=3)
			{
				
				$("#video-bg").prop("muted", true);
			}
        }
    });
      </script>
   </body>
</html>