
<!DOCTYPE html>
<html>

<?php $this->load->view('frontEnd/includes/header_css_js');?>

<body>
	
<!-- header -->
<div class="header">
	<div class="agileits_top_menu">
		<div class="container">
			<div class="w3l_header_left">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +112 223 3345</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> 3241 USA, New York City</li>
				</ul>
			</div>
			<div class="w3l_header_right">
				<div class="w3ls-social-icons text-left">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="login" href="#" data-toggle="modal" data-target="#myModal1">Login</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="content white agile-info">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
					<a class="navbar-brand" href="index.html">
						<h1>Corporation</h1>
					</a>
				</div>
				<!--/.navbar-header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="codes.html">Short Codes</a></li>
									<li><a href="icons.html">Icons</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
				<!--/.navbar-collapse-->
				<!--/.navbar-->
			</div>
		</nav>
	</div>
</div>
<!-- //header -->


<?php if($page_path && isset($page_path)){ $this->load->view($page_path);}?>


<!-- footer -->
<div class="footer_top_agileits">
	<div class="container-fluid">
		<div class="col-md-3 footer_grid">
			<h3>About Us</h3>
			<p>Sagittis quis turpis vel, facilisis posuere erat. Nulla facilisi. Proin vel commodo leo. Ut mauris tortor, cursus ut massa vitae, iaculis vehicula turpis. Nam libero tempore cum vulputate id posuere erat.</p>
			<div class="read">
				<a href="about.html">Read more »</a>
			</div>
		</div>
		<div class="col-md-3 footer_grid">
			<h3>Latest News</h3>
			<ul class="footer_grid_list">
				<li><i class="fa fa-chevron-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque vulputate </a>
				</li>
				<li><i class="fa fa-chevron-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
				</li>
				<li><i class="fa fa-chevron-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
				</li>
				<li><i class="fa fa-chevron-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
				</li>
				<li><i class="fa fa-chevron-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
				</li>
			</ul>
		</div>
		<div class="col-md-3 footer_grid">
			<h3>Contact Info</h3>
			<ul class="address">
				<li><i class="fa fa-map-marker" aria-hidden="true"></i>3241 USA, Collection building, <span>New York City.</span></li>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>+0123 2279 3241</li>
				<li><i class="fa fa-globe" aria-hidden="true"></i><a href="#">info@website.com</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid_agileits_w3 footer_grid">
				<h3>Recent Works</h3>
			<div class="footer-list">
				<div class="flickr-grid">
					<a href="#"><img src="images/p1.jpg" alt=" " ></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p2.jpg" alt=" "></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p3.jpg" alt=" " ></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p4.jpg" alt=" "></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p5.jpg" alt=" "></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p6.jpg" alt=" "></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p1.jpg" alt=" "></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p2.jpg" alt=" "></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="footer_w3ls">
	<div class="container">
		<div class="footer_bottom1">
			<p>© 2018 Corporation. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
</div>
<!-- //footer -->

<!-- signin Model -->
<!-- Modal1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body modal-body-sub_agile">
				<div class="main-mailposi">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
				<div class="modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign">Login To Your Account</h3>
					<form action="#" method="post">
						<div class="styled-input agile-styled-input-top">
							<input type="text" placeholder="User Name" name="Name" required="">
						</div>
						<div class="styled-input">
							<input type="password" placeholder="Password" name="password" required="">
						</div>
						<input type="submit" value="Login">
					</form>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
</div>
<!-- //Modal1 -->
<!-- //signin Model -->
	
<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				Corporation
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<div class="modal-body">
				<img src="images/banner1.jpg" alt=" " class="img-responsive" />
				<p>Ut enim ad minima veniam, quis nostrum 
					exercitationem ullam corporis suscipit laboriosam, 
					nisi ut aliquid ex ea commodi consequatur? Quis autem 
					vel eum iure reprehenderit qui in ea voluptate velit 
					esse quam nihil molestiae consequatur, vel illum qui 
					dolorem eum fugiat quo voluptas nulla pariatur.
					<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
						esse quam nihil molestiae consequatur.</i></p>
			</div>
		</div>
	</div>
</div>
<!-- //bootstrap-modal-pop-up --> 
	<?php $this->load->view('frontEnd/includes/footer_css_js');?>
</body>
</html>