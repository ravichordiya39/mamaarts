
<!DOCTYPE HTML>
<html>
<head>
<title>Online Kabadi :: Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="<?php echo url("css/bootstrap.css");?>" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?php echo url("css/style.css");?>" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="<?php echo url("css/font-awesome.css");?>" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='<?php echo url("css/SidebarNav.min.css");?>' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="<?php echo url("js/jquery-1.11.1.min.js");?>"></script>
<script src="<?php echo url("js/modernizr.custom.js");?>"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="">
<div class="main-content">

		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form  method="POST" action="{{ route('login') }}">
						 @csrf
							<input id="email" type="email" class="user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							<input id="password" type="password" class="lock @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							<div class="forgot-grid">
								
								<div class="forgot">
									<a href="#">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" name="Sign In" value="Sign In">
							
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; <?php echo date("Y");?>. All Rights Reserved | Developed by <a href="https://rkstechnicalservices.in/" target="_blank">RKS Technical Services</a></p>		</div>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='<?php echo url("js/SidebarNav.min.js");?>' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="<?php echo url("js/jquery.nicescroll.js");?>"></script>
	<script src="<?php echo url("js/scripts.js");?>"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo url("js/bootstrap.js");?>"> </script>
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>