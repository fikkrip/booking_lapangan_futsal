<!--
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tono's Futsal - Home</title>

  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/templatemo-style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/project.css" rel="stylesheet">

  </head>
  <body class="tm-gray-bg">
  	<nav class="navbar navbar-fixed-top" role="navigation" style="background-color:#000;">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Welcome/index"><span class="glyphicon glyphicon-record"></span> Tono Futsal</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/index"><b>Home</b></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/about"><b>About</b></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/ambilSemua"><b>Jadwal</b></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Contact </b><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">085748911866</a>
                            </li>
                            <li>
                                <a href="#">Line</a>
                            </li>
                            <li>
                                <a href="#">Whatsapp</a>
                            </li>
                            <li>
                                <a href="#">Instagram</a>
                            </li>
                            <li>
                                <a href="#">Facebook</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/Login" class="active"><span class="glyphicon glyphicon-user"></span><b> Login</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
      <div class="main-content">

        <form class="form-login" action="<?php echo base_url(); ?>index.php/Login/aksi_login" method="post">

            <div class="form-log-in-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Log in</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Username</span>
                            <input name="username" id="user" type="text" class="input">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input name="password" id="pass" type="password" class="input" data-type="password">
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Log in</button>
                    </div>

                </div>

                <a href="#" class="form-forgotten-password">Forgotten password &middot;</a>
                <a href="<?php echo base_url(); ?>index.php/Welcome/tampil_akun" class="form-create-an-account">Create an account &rarr;</a>

            </div>
        </form>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>      		
  	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moment.js"></script>							
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>					
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
   	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/templatemo-script.js"></script>      		<!-- Templatemo 	<script>
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
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fakusa Sport Center - Login</title>

  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/project.css" rel="stylesheet">

  </head>
  <body class="tm-gray-bg">
  	<!-- navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">          
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Welcome/index"><span class="glyphicon glyphicon-record"></span> Fakusa Sport Center</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li >
                        <a href="<?php echo base_url(); ?>index.php/Welcome/index">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/about">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/ambilSemua">Jadwal</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">085748911866</a>
                            </li>
                            <li>
                                <a href="#">Line</a>
                            </li>
                            <li>
                                <a href="#">Whatsapp</a>
                            </li>
                            <li>
                                <a href="#">Instagram</a>
                            </li>
                            <li>
                                <a href="#">Facebook</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="<?php echo base_url(); ?>index.php/Login" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        <section class="tm-white-bg section-padding-bottom margin-top-a ">
            <div class="container">
                <div class="row ">
                    <div class="login-wrap">
	                   <div class="login-html">
                        <form class="form-login" action="<?php echo base_url(); ?>index.php/Login/aksi_login" method="post" id="log1">
		                  <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		                  <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		                      <div class="login-form">
                                <div class="sign-in-htm">
				                    <div class="group">
					                   <label for="user" class="label">Username</label>
                                        <input name="username" id="user" type="text" class="input">
				                    </div>
				                <div class="group">
					               <label for="pass" class="label">Password</label>
					               <input name="password" id="pass" type="password" class="input" data-type="password">
				                </div>
				                <div class="group">
					               <input id="check" type="checkbox" class="check" checked>
					               <label for="check"><span class="icon"></span> Keep me Signed in</label>
				                </div>
				                <div class="group">
					               <input type="submit" name="submit" class="button" value="Sign In">
				                </div>
                        </form>
				             <div class="hr"></div>
				                <div class="foot-lnk">
                                    <label for="tab-2">Create an account?</label>
				                </div>
			                 </div>
			            <form class="form-register" action="<?php echo base_url(); ?>index.php/Welcome/aksi_regis" method="post"> 
                            <div class="sign-up-htm">
				                <div class="group">
					               <label for="user" class="label">Username</label>
					               <input name="username" id="username" required type="text" class="input">
				                </div>
				                <div class="group">
					               <label for="pass" class="label">Password</label>
					               <input name="password" id="password" required type="password" class="input" data-type="password">
				                </div>
				                <div class="group">
					               <label for="pass" class="label">Nama</label>
					               <input name="nama" id="nama" type="text" required class="input">
				                </div>
				                <div class="group">
					               <label for="pass" class="label">Alamat</label>
					               <textarea name="alamat" id="alamat" required class="input"></textarea>
				                </div>
                                <div class="group">
					               <label for="user" class="label">No.telepon</label>
					               <input name="no_telp" id="no_telp" type="text" required class="input">
				                </div>
                                <input name="account" id="account" readonly value="user" type="hidden" class="input">
				                <div class="group">
					               <input type="submit" name="submit" class="button" value="Sign Up">
				                </div>
			                 </div>
		                  </div>
                        </form>
	                   </div>
                    </div>
                  </div>              
            </div>
        </section>
    <!-- Footer-->
  
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>          <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moment.js"></script>             <!-- moment.js -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>          <!-- bootstrap js -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script> <!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
<!--
  <script src="js/froogaloop.js"></script>
  <script src="js/jquery.fitvid.js"></script>
-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/templatemo-script.js"></script>          <!-- Templatemo Script -->
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