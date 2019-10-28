<html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fakusa Sport Center - Data Lapangan</title>

    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/templatemo-style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/project.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/datatables.min.css"/>

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
    <br>

    <div class="container">
    <div style="margin-top: 10px" class="text-center">
        <h3 style="color: black">Tabel Daftar Data Lapangan</h3>
    </div>
        <br><table class="table" style="color: black">
    <thead>
        <tr>
            <th bgcolor="#4CAF50">NO</th>
            <th bgcolor="#4CAF50">NAMA LAPANGAN</th>
            <th bgcolor="#4CAF50">DESKRIPSI</th>
            <th bgcolor="#4CAF50">HARGA</th>
            <th bgcolor="#4CAF50">JENIS</th>
            <th bgcolor="#4CAF50">ACTION</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $i=0;
        foreach($query as $row){
    ?>
        <tr>
            <td><?php echo $i+1; $i++;?></td>
            <td><?php echo $row->nama_lap; ?></td>
            <td><?php echo $row->deskripsi; ?></td>
            <td><?php echo $row->harga; ?></td>
            <td><?php
                if($row->jenis == 1){
                    echo "Sintetis";
                }else{
                    echo "Matras";
                }
                ?>
            </td>
            <td><a  href="<?php echo base_url(); ?>index.php/Welcome/ambil2/<?php echo $row->kode; ?>"><input class="btn btn-info" type="button" value="View"></a></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table><br>
    </div>
<br>
</body>
<footer class="tm-black-bg">
    <div class="container">
        <div class="row">
            <p class="tm-copyright-text">Copyright &copy; 2018 Fakusa Sport Center</p>
        </div>
    </div>
</footer>
</html>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moment.js"></script>							<!-- moment.js -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/datatables.min.js"></script>
   	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
    <script>
        // HTML document is loaded. DOM is ready.
        $(function() {
            $('.table').DataTable();
        });
    </script>