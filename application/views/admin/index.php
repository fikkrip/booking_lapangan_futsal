<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fakusa Sport Center - Home</title>

  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/templatemo-style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/project.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel="stylesheet">

  </head>
  <body class="tm-gray-bg">
  	<!-- Header -->
  	<nav class="navbar navbar-fixed-top" role="navigation" style="background-color:#000;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/c_admin/index"><span class="glyphicon glyphicon-record"></span> Fakusa Sport Center </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/c_admin/index" class="active"><b>Home</b></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/ambilAdmin"><b>Pesanan</b></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/dataUser"><b>Data User</b></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/dataLapangan"><b>Data Lapangan</b></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('nama');?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('c_admin/logout'); ?>">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
			    <div class="tm-banner-inner">
                    <ul>
                      <a href="#more2" class="tm-banner-link">Deskripsi Lapangan</a>
                    </ul>	
				</div>
				<img src="<?php echo base_url(); ?>assets/img/2banner.png" alt="Image" />	
		    </li>
		    <li>
			    <div class="tm-banner-inner">
                    <ul>
                      <a href="#more2" class="tm-banner-link">Deskripsi Lapangan</a>
                    </ul>
				</div>
		      <img src="<?php echo base_url(); ?>assets/img/1banner.png" alt="Image" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<ul>	
                      <a href="#more2" class="tm-banner-link">Deskripsi Lapangan</a>
                    </ul>	
				</div>
		      <img src="<?php echo base_url(); ?>assets/img/3banner.png" alt="Image" />
		    </li>
		  </ul>
		</div>	
        <br><br><br><br><br><br><br><br>
	</section>

    <!-- gray bg -->
    <section class="container tm-home-section-0" id="more">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-left">
                    <img src="<?php echo base_url(); ?>assets/img/sintesis.jpg" alt="image" class="img-responsive">
                    <div class="tm-green-gradient-bg tm-city-price-container">
                        <span>Sintetis</span>
                        <span>IDR 150K</span>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-right">
                    </br></br></br></br></br></br></br></br></br>
                    <h2 class="tm-section-title">Pilih Jenis Lapangan</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-right">
                    <img src="<?php echo base_url(); ?>assets/img/matras.jpg" alt="image" class="img-responsive">
                    <div class="tm-red-gradient-bg tm-city-price-container">
                        <span>Matras</span>
                        <span>IDR 175K</span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="tm-white-bg section-padding-bottom" id="more2">
        <div class="container">
            <div class="row">
                <div class="tm-section-header section-margin-top">
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Deskripsi Lapangan</h2></div>
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                </div>
                <div class="col-lg-6">
                    <div class="tm-home-box-3">
                        <div class="tm-home-box-3-img-container">
                            <img src="<?php echo base_url(); ?>assets/img/index7.jpg" alt="image" class="img-responsive">
                        </div>
                        <div class="tm-home-box-3-info">
                            <p class="tm-home-box-3-description">Lapangan ini adalah lapangan Sintetis yang di import langsung dari Spanyol, dengan karakteristik lembutnya yang khas lapangan ini banyak dipilih oleh Para Pemain Timnas Futsal Indonesia saat berlaga</p>
                            <div class="tm-home-box-3-container">
                                <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-right"></i></a>
                                <span class="tm-home-box-2-description box-3">Lapangan A</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tm-home-box-3">
                        <div class="tm-home-box-3-img-container">
                            <img src="<?php echo base_url(); ?>assets/img/index8.jpg" alt="image" class="img-responsive">
                        </div>
                        <div class="tm-home-box-3-info">
                            <p class="tm-home-box-3-description">Lapangan ini adalah lapangan Matras yang di import langsung dari Inggris, dengan karakteristik halusnya tapi tidak licin lapangan ini banyak dipilih oleh Pemain Timnas Futsal Indonesia saat berlaga</p>
                            <div class="tm-home-box-2-container">
                                <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-right"></i></a>
                                <span class="tm-home-box-2-description box-3">Lapangan B</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2018 Fakusa Sport Center</p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moment.js"></script>							<!-- moment.js -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
<!--
	<script src="js/froogaloop.js"></script>
	<script src="js/jquery.fitvid.js"></script>
-->
   	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {

			$('#hotelCarTabs a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})

        	$('.date').datetimepicker({
            	format: 'MM/DD/YYYY'
            });
            $('.date-time').datetimepicker();

			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
		  	$('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
		  	});
		});
		$(window).load(function() {	  		
		    $('.flexslider').flexslider({
			    controlNav: false
		    });
	  	});
	</script>
 </body>
 </html>