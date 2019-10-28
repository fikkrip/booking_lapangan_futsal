<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Register</title>
<!--

  <link rel="stylesheet" href="<?php echo base_url('assets/demo.css'); ?>">
-->
  <link rel="stylesheet" href="<?php echo base_url('assets/form-register.css'); ?>">
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/templatemo-style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/project.css" rel="stylesheet">

  </head>
  <body class="tm-gray-bg">
  	<!-- Header -->
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="<?php echo base_url(); ?>index.php/Welcome/index" class="tm-site-name">Tono's Futsal</a>	
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="<?php echo base_url(); ?>index.php/Welcome/index" class="active">Home</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/Welcome/about">About</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Login">Pemesanan</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/Welcome/about">Contact</a></li>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div> 	
    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" action="<?php echo base_url(); ?>index.php/Welcome/aksi_regis" method="post">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Username</span>
                            <input name="username" id="username" required type="text" class="input">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input name="password" id="password" required type="password" class="input" data-type="password">
                        </label>
                    </div>
                    
                    <input name="account" id="account" readonly value="user" type="hidden" class="input">
                    
                    <div class="form-row">
                        <label>
                            <span>Nama</span>
                            <input name="nama" id="nama" type="text" required class="input">
                        </label>
                    </div>
                    
                    <div class="form-row">
                        <label>
                            <span>Alamat</span>
                            <textarea name="alamat" id="alamat" required class="input"></textarea>
                        </label>
                    </div>
                    
                    <div class="form-row">
                        <label>
                            <span>No Telepon</span>
                            <input name="no_telp" id="no_telp" type="text" required class="input">
                        </label>
                    </div>

                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button name="submit" type="submit"value="Submit">Register</button>
                    </div>

                </div>

                <a href="<?php echo base_url(); ?>index.php/Login" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>

            </div>

        </form>

    </div>

</body>

</html>
