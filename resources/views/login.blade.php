<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login : Saudi Executive Contact database </title>

	<meta name="description" content="saudi conatct database directory">
	<meta name="keywords"
		content="middle east, saudi arabia, IPO, trade, investment, companies, money, saudi arabia directory, company directory, profile, officers, quote, commodities, 
	markets, real estate, stocks, shares, construction, oil, gas, telecom, agriculture, metal, gold, silver, islamic, finance, email, e-banking, power, sukuk, mutual funds">

	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- FAV ICON(BROWSER TAB ICON) -->
	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
	<!-- FONTAWESOME ICONS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- ALL CSS FILES -->
	<link href="css/materialize.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="css/responsive.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		.cart_count {
			color: #273a77;
			background: white;
			padding: 0px 8px;
			border-radius: 63%;
			margin-left: 5px;
		}

		input[type=sut] {
			background-color: #7f89ff;
		}
	</style>
</head>

<body data-ng-app="">
	<!--<div id="preloader">
		<div id="status">&nbsp;</div>
	</div> -->
	<!--TOP SEARCH SECTION-->
	<section class="bottomMenu dir-il-top-fix v3-top-menu" style="height:85px;">
		<div class="container top-search-main">
			<div class="row">
				<div class="ts-menu">

					<!--<div class="ts-menu-1">
						<a href="" style="height:50px; width:164px; text-decoration:none;"><img src="images/inner-logo.png" alt="" style="height:50px; width:164px; text-decoration:none;"> </a>
					</div>
					
					<div class="ts-menu-3">
						<div class="">
							&nbsp;
						</div>
					</div>
					
					<div class="ts-menu-4">
						<div class="v3-top-ri">
							<ul>
								<li><a href="login" class="v3-menu-sign"><i class="fa fa-sign-in"></i> Sign In</a> </li>								
								<li><a href="packages"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now</a></li>
							</ul>
						</div>
					</div> -->


					<div class="v3-m-1" style="height:85px;width:30%; padding-top:9.5px;">
						<a href=""><img src="images/taajer_logo.jpg" alt=""> </a>
					</div>
					<div class="v3-m-1">
						&nbsp;
					</div>
					<div class="v3-m-2">
						<div class="v3-top-ri" style="margin-right:-15%; padding-top:15px;">
							<ul>
								<li><a href="register.htm" class="v3-menu-sign"><i class="fa fa-user-plus"></i>
										Register</a> </li>
								<!--<li><a href="login" class="v3-menu-sign"><i class="fa fa-sign-in"></i> Sign In</a> </li>	-->
								<li><a href="packages.htm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy
										Now
									</a></li>
							</ul>
						</div>
					</div>





					<!--MOBILE MENU ICON:IT'S ONLY SHOW ON MOBILE & TABLET VIEW-->
					<div class="ts-menu-5"><span><i class="fa fa-bars" aria-hidden="true"></i></span> </div>
					<!--MOBILE MENU CONTAINER:IT'S ONLY SHOW ON MOBILE & TABLET VIEW-->
					<div class="mob-right-nav" data-wow-duration="0.5s">
						<div class="mob-right-nav-close"><i class="fa fa-times" aria-hidden="true"></i> </div>
						<h5>Business</h5>
						<ul class="mob-menu-icon">
							<li><a href="listing.htm">Add Business</a> </li>
							<li><a href="register.htm" data-toggle="modal" data-target="#register">Register</a> </li>
							<li><a href="login.htm" data-toggle="modal" data-target="#sign-in">Sign In</a> </li>
						</ul>
						<h5>Taajer</h5>
						<ul>
							<li><a href="aboutus.htm"><i class="fa fa-angle-right" aria-hidden="true"></i> About Us</a>
							</li>
							<li><a href="contact.htm"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a>
							</li>
							<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Advance Search</a> </li>
							<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Submit Details</a> </li>
							<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Feedback </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="tz-register">
		<div class="log-in-pop">
			<div class="log-in-pop-left">
				<h1>TAAJER</h1>
				<p>Don't have an account? Create your account. It's take less than a minutes. <a href="register"
						style="color:#ffffff;">Register</a></p>
				<h4>Executive Database</h4>
				<p>Complete Saudi Executive database for businesses of all sizes. <br><br><br></p>
			</div>
			<div class="log-in-pop-right">
				<a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
				</a>
				<h4>Login</h4>
				<!-- <p>This page is restricted</p> -->
				<form class="s12" action="user/auth_user" autocomplete="off" method="post">
					<div>
						<div class="input-field s12">
							<input type="text" data-ng-model="name1" readonly class="validate" autocomplete="off"
								name="email"
								onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }">
							<label>Email</label>
						</div>
					</div>
					<div>
						<div class="input-field s12">
							<input type="password" readonly class="validate" autocomplete="off" name="password"
								onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur(); this.focus();}">
							<label>Password</label>
						</div>
					</div>

					<div>
						<div class="input-field s4">
							<input type="submit" value="Login" class="waves-effect waves-light log-in-btn">
						</div>
					</div>
					<div>

						<div class="input-field s12"> <a href="user/forgetpassword">Forgot Password?</a> </div>
						<div class="input-field s12"> <a href="register">Don't have account ? Register</a> </div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!--MOBILE APP-->
	<!--<section class="web-app com-padd">
		<div class="container">
			<div class="row">
				<div class="col-md-6 web-app-img"> <img src="images/mobile.png" alt="" /> </div>
				<div class="col-md-6 web-app-con">
					<h2>Looking for the Best Saudi Executive Database Provider? <span>Get the App!</span></h2>
					<ul>
						<li><i class="fa fa-check" aria-hidden="true"></i> Find Executuve Database</li>
						<li>&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i> Increase your Sales</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Traget your Customer</li>
						<li>&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i> Get Updates</li>
					</ul> <br><br><br><br>
					<a href="#"><img src="images/android.png" alt="" /> </a>
					<a href="#"><img src="images/apple.png" alt="" /> </a>
				</div>
			</div>
		</div>
	</section> -->
	<!--FOOTER SECTION-->
	<footer id="colophon" class="site-footer clearfix">
		<div id="quaternary" class="sidebar-container " role="complementary">
			<div class="sidebar-inner">
				<div class="widget-area clearfix">
					<div id="azh_widget-2" class="widget widget_azh_widget">
						<div data-section="section">
							<div class="container">
								<div class="row">
									<div class="col-sm-4 col-md-3 foot-logo">
										<!--<img src="images/foot-logo.png" alt="logo">
										<p>Complete Saudi Executive database for businesses of all sizes.</p>-->
										<h4>Payment Options</h4>
										<p class="hasimg"> <img src="images/paypal-secure-payments.png" alt="payment">
										</p>
									</div>
									<div class="col-sm-4 col-md-4">
										<h4>Support & Help</h4>



										<ul class="two-columns">
											<li> <a href="home/about">About Us</a> </li>
											<!--<li><a href="home/how">How to Purchase</a></li> -->
											<li> <a href="register">Register</a> </li>
											<li> <a href="listing">Add Listing</a></li>
											<li> <a href="login">Login</a>
											<li><a href="home/faq">FAQs</a></li>

											<li> <a href="home/contact">Contact</a>
										</ul>



									</div>
									<div class="col-sm-4 col-md-5">
										<h4>Taajer</h4>
										<ul class="two-columns">
											<li> <a href="">Privacy Policy</a> </li>
											<li> <a href="">Terms And Conditions</a> </li>
											<li> <a href="home/refund">Refund / Return Policy</a> </li>
											<li> <a href="">Copyright Statements</a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div data-section="section" class="foot-sec2">
							<div class="container">
								<div class="row">
									<div class="col-sm-3">
										<!--<h4>Payment Options</h4>
										<p class="hasimg"> <img src="images/paypal-secure-payments.png" alt="payment"> </p> -->
										&nbsp;
									</div>
									<div class="col-sm-4">
										<!--<h4>Support</h4>
										<p>Saudi Business Center, King Saud Street, Dammam, Kingdom of Saudi Arabia, Landmark : Next To Panada</p>-->
										<p> <span class="strong">Email: </span> <span class="highlighted"><a
													href="mailto:support@taajer.net"
													class="highlighted">support@taajer.net</a></span> </p>
									</div>
									<div class="col-sm-5 foot-social">
										<h4>Follow with us</h4>
										<!--<p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>-->
										<ul>
											<li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
											</li>
											<li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .widget-area -->
			</div>
			<!-- .sidebar-inner -->
		</div>
		<!-- #quaternary -->
	</footer>
	<!--COPY RIGHTS-->
	<section class="copy">
		<div class="container">
			<p>copyrights &copy; 2018 Taajer. &nbsp;&nbsp;All rights reserved. Powered By: <a
					href="http://www.dslab.in/">Dot Solutions Lab</a> </p>
		</div>
	</section>
	<!--QUOTS POPUP-->
	<section>
		<!-- GET QUOTES POPUP -->
		<div class="modal fade dir-pop-com" id="list-quo" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header dir-pop-head">
						<button type="button" class="close" data-dismiss="modal">�</button>
						<h4 class="modal-title">Get a Quotes</h4>
						<!--<i class="fa fa-pencil dir-pop-head-icon" aria-hidden="true"></i>-->
					</div>
					<div class="modal-body dir-pop-body">
						<form method="post" class="form-horizontal">
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Full Name *</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="fname" placeholder="" required>
								</div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Mobile</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="mobile" placeholder="">
								</div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Email</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="email" placeholder="">
								</div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Message</label>
								<div class="col-md-8 get-quo">
									<textarea class="form-control"></textarea>
								</div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<div class="col-md-6 col-md-offset-4">
									<input type="submit" value="SUBMIT" class="pop-btn">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- GET QUOTES Popup END -->
	</section>
	<!--SCRIPT FILES-->
	<script src="js/jquery.min.js"></script>
	{{-- <script src="js/angular.min.js"></script> --}}
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/materialize.min.js" type="text/javascript"></script>
	<script src="js/custom.js"></script>

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
		(function () {
			var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
			s1.async = true;
			s1.src = 'https://embed.tawk.to/5b2cba36d0b5a54796821182/default';
			s1.charset = 'UTF-8';
			s1.setAttribute('crossorigin', '*');
			s0.parentNode.insertBefore(s1, s0);
		})();
	</script>
	<!--End of Tawk.to Script-->

</body>

</html>