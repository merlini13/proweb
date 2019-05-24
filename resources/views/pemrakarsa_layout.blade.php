<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>SIPS</title>
	<meta name="description" content="Sistem Informasi Perizinan SPPL">
	<meta name="author" content="Kelompok Joice">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link id="bootstrap-style" href="{{asset('belakang/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('belakang/css/profile2.css')}}" rel="stylesheet">
	<link href="{{asset('belakang/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('belakang/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('belakang/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="belakang/img/favicon.ico">
	<!-- end: Favicon -->




</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Sistem Informasi Perizinan SPPL</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">

						<!-- start: Notifications Dropdown -->
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<!-- end: Message Dropdown -->
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">

								<i class="halflings-icon white user"></i>{{Session::get('nama_pemrakarsa')}}
								<span class="caret"></span>
							</a>

							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span><?php $nama_pemrakarsa?></span>
								</li>
								<?php
								$id=Session::get('id');
								?>
								<?php if($id = NULL) {?>
								<li><a href="{{URL::to('/login-check')}}"><i class="halflings-icon off"></i> Login</a></li>
								<?php }else{?>

								<li><a href="{{URL::to('/pemrakarsa-logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
								<?php } ?>
						 </ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<?php
						$id=Session::get('id');
						?>
						<li><a href="{{URL::to('/')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a href="{{URL::to('/profile-pemrakarsa/'.$id)}}"><i class="icon-envelope"></i><span class="hidden-tablet"> Profile</span></a></li>
						<li><a href="{{URL::to('/add-sppl')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Buat SPPL</span></a></li>
						

					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">

        @yield('pemrakarsa_content')

	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Metro</a></span>
		</p>

	</footer>

	<!-- start: JavaScript-->

	<script src="{{asset('belakang/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('belakang/js/jquery-migrate-1.0.0.min.js')}}"></script>
	<script src="{{asset('belakang/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.ui.touch-punch.js')}}"></script>
	<script src="{{asset('belakang/js/modernizr.js')}}"></script>
	<script src="{{asset('belakang/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.cookie.js')}}"></script>
	<script src="{{asset('belakang/js/fullcalendar.min.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('belakang/js/excanvas.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.flot.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.flot.resize.min.js')}}"></script>
  <script src="{{asset('belakang/js/jquery.chosen.min.js')}}"></script>
  <script src="{{asset('belakang/js/jquery.uniform.min.js')}}"></script>
  <script src="{{asset('belakang/js/jquery.cleditor.min.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.noty.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.elfinder.min.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.raty.min.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.iphone.toggle.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.uploadify-3.1.min.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.gritter.min.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.imagesloaded.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.masonry.min.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.knob.modified.js')}}"></script>
	<script src="{{asset('belakang/js/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('belakang/js/counter.js')}}"></script>
	<script src="{{asset('belakang/js/retina.js')}}"></script>
	<script src="{{asset('belakang/js/custom.js')}}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

	<script>
	$(document).on("click", "#delete", function(e){
		e.preventDefault();
		var link = $(this).attr("href");
		bootbox.confirm("Are you sure you want to delete this?", function(confirmed){
			if (confirmed){
				window.location.href = link;
			};
		});
	});
	</script>

</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
