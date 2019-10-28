<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Register</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/form-register.css'); ?>">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/templatemo-style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/project.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel="stylesheet">

    <script>
        function hitungHarga() {
            var lap = $("#lapangan").val();
            var lama = $("#lama_sewa").val();
            var total;

            if(lap !== "0"){
                if(lap === "Lapangan_A"){
                    total = 150000*lama;

                    if(total === 150000){
                        $("#harga").val("Rp.150.000");
                    }else if(total === 300000){
                        $("#harga").val("Rp.300.000");
                    }else if(total === 450000) {
                        $("#harga").val("Rp.450.000");
                    }
                }else if(lap === "Lapangan_B"){
                    total = 175000*lama;

                    if(total === 175000){
                        $("#harga").val("Rp.175.000");
                    }else if(total === 350000){
                        $("#harga").val("Rp.350.000");
                    }else if(total === 525000) {
                        $("#harga").val("Rp.525.000");
                    }
                }
            }else {
                $("#lama_sewa").val("0");
            }
        }
    </script>

</head>
<?php
session_start();
?>

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
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/c_member/index"><span class="glyphicon glyphicon-record"></span> Fakusa Sport Center</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/c_member/index" class="active"><b>Home</b></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/ambilUser"><b>Jadwal</b></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/sewa"><b>Pesan</b></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Contact </b><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">085748911866</a>
                            </li>
                            <li>
                                <a href="#">Line : @jx67y56u</a>
                            </li>
                            <li>
                                <a href="#">Instagram : @tonfuts</a>
                            </li>
                            <li>
                                <a href="#">Facebook : OA Tono's Futsal</a>
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
        
        <div class="main-content">

        <form class="form-register" action="<?php echo base_url(); ?>index.php/Welcome/aksi_sewa" method="post">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Pesan Lapangan</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Lapangan</span>
                            <select name="lapangan" id="lapangan" class="input" onchange="hitungHarga()">
                                <option value="0">--Pilih Lapangan--</option>
                                <option value="Lapangan_A">Lapangan A</option>
                                <option value="Lapangan_B">Lapangan B</option>
                            </select>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Tanggal Sewa</span>
                            <input name="tanggal" id="tanggal" placeholder="YYYY/MM/DD" required type="date" class="input">
                            <p id="pesan_t"></p>
                        </label>
                    </div>
                    
                    <div class="form-row">
                        <label>
                            <span>Jam Sewa</span>
                            <input name="jam" id="jam" placeholder="HH:MM" type="time" required class="input">
                        </label>
                    </div>
                    
                    <div class="form-row">
                        <label>
                            <label>
                                <span>Durasi Waktu</span>
                                <select name="lama_sewa" id="lama_sewa" class="input" onchange="hitungHarga()">
                                    <option value="1">1 Jam</option>
                                    <option value="2">2 Jam</option>
                                    <option value="3">3 Jam</option>
                                </select>
                            </label>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <label>
                                <span>Harga Total</span>
                                <input name="harga" id="harga" type="text" readonly class="input">
                            </label>
                        </label>
                    </div>

                    <?php 
                        $nama = $this->db->get('pelanggan');
                        foreach($nama->result() as $row){
                            if($row->username == $this->session->userdata('nama')){
                    ?>
                                <input name="nama" type="hidden" value="<?php echo $row->nama_pel; ?>">
                    <?php
                            }
                        }
                    ?>
                    <input name="default" type="hidden" value="0">
                    <input name="username" type="hidden" value="<?php echo $this->session->userdata('nama'); ?>">
                    <div class="form-row">
                        <button name="submit" type="submit" value="Submit">Booking</button>
                    </div>

                </div>

            </div>

        </form>

    </div>

</body>


</html>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moment.js"></script>							<!-- moment.js -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>					<!-- bootstrap js -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/templatemo-script.js"></script>      		<!-- Templatemo Script -->