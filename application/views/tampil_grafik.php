<html>
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
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/c_admin/index"><span class="glyphicon glyphicon-record"></span> Fakusa Sport Center</a>
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
                        <a href="<?php echo base_url(); ?>index.php/Welcome/tampil_grafik"><b>Rekap Diagram</b></a>
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
    <br>
    <br>
    <br>
      
      
      
<!-- CHART -->
	<style>
 #chart{
   z-index:-10;} 
</style>
<body>
 <div id="chart">
</div>
<script src="<?php echo base_url(); ?>assets/highcharts/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/highcharts/modules/exporting.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/highcharts/modules/offline-exporting.js" type="text/javascript"></script>

<script type="text/javascript">
  jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart',
   type: 'line',
  },
  title: {
   text: 'Grafik Statistik Pemesan',
   x: -20
  },
  subtitle: {
   text: 'Booking Count',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total pengunjung'
   }
  },
  series: [{
   name: 'Data dalam Bulan',
   data: <?php echo json_encode($grafik); ?>
  }]
 });
}); 
</script>

</body>
</html>
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
