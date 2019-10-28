<?php
session_start();
?>
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
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Welcome/index"><span class="glyphicon glyphicon-record"></span> Fakusa Sport Center</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/index" class="active"><b>Home</b></a>
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Cara Pemesanan </b><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">1. Login/Sign Up terlebih dahulu untuk melakukan pemesanan</a>
                            </li>
                            <li>
                                <a href="#">2. Masuk ke menu "Pesan" yang ada pada halaman member</a>
                            </li>
                            <li>
                                <a href="#">3. Isi form data pemesanan lapangan sesuai dengan jadwal yang diinginkan</a>
                            </li>
                            <li>
                                <a href="#">4. Jika berhasil, lakukan pembayaran sesuai nominal yang ada pada harga lapangan yang anda pesan</a>
                            </li>
                            <li>
                                <a href="#">5. Jika pembayaran selesai, silahkan langsung menghubungi admin melalui Whatsapp: 089620679146 untuk<br> melakukan konfirmasi pembayaran</a>
                            </li>
                            <li>
                                <a href="#">6. Tunggu konfirmasi balasan dari admin, jika sudah silahkan cek pada menu jadwal yang ada di website kami</a>
                            </li>
                            <li>
                                <a href="#">7. Pemesanan berhasil!!!</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/Login"><span class="glyphicon glyphicon-user"></span><b> Login</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>

    <div class="container">
<div class="text-center" style="color: black; margin-top: 10px">
    <h3>Tabel Pemesan dan Jadwal Lapangan</h3>
</div>

        <br><table class="table" style="color: black">
    <thead>
        <tr>
            <th bgcolor="#4CAF50">NO</th>
            <th bgcolor="#4CAF50">NAMA</th>
            <th bgcolor="#4CAF50">NAMA LAPANGAN</th>
            <th bgcolor="#4CAF50">JENIS</th>
            <th bgcolor="#4CAF50">TANGGAL</th>
            <th bgcolor="#4CAF50">JAM</th>
            <th bgcolor="#4CAF50">LAMA SEWA</th>
            <th bgcolor="#4CAF50">STATUS</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $i=0;
        foreach($query as $row){
    ?>
        <tr>
            <td><?php echo $i+1; $i++;?>
            </td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo str_replace("_", " ", $row->lapangan); ?></td>
            <td><?php  
                    if($row->kode_lap == 1){
                        echo "Sintetis";
                    }else{
                        echo "Matras";
                    }
                ?>
            </td>
            <td><?php echo $row->tgl_sewa; ?></td>
            <td><?php echo $row->jam_sewa; ?></td>
            <td><?php echo $row->lama_sewa; ?> Jam</td>
            <td><?php  
                    if($row->status == 1){
                ?>
                        <a><input class="btn btn-success" type="button" value="Booked"></a>
                <?php
                    }else{
                ?>
                        <a><input class="btn btn-danger" type="button" value="Belum"></a>
                <?php
                    }
                ?>
            </td>
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