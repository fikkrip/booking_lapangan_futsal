<html>
<head>
<title>Tampil Data Mahasiswa</title>
<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

        <!-- Latest compiled JavaScript -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<style>
    .jumbotron {
                background-color: #66c2ff; 
                color: #fff;
            }
    table {
    border-collapse: collapse;
    width: 100%;
}

th, td  {
    text-align: left;
    padding: 8px;
}

th{
    color:#fff;
}

tr:nth-child(even){background-color: #e2e2e2}
</style>
</head>

<body>
    <div class="container">
<div class="jumbotron text-center">
    <h1>Data Mahasiswa</h1>
    <p>Tabel Daftar Mahasiswa PENS</p>
</div>
    
<table>
    <td>Jurusan</td>
        <td>:</td>
        <td><select name="jurusan">
        <option onclick="window.location.assign('<?php echo site_url("Mahasiswa/ambilSemua"); ?>')">Semua Jurusan</option>
        <option onclick="window.location.assign('<?php echo site_url("Mahasiswa/ambil/Teknik_Informatika"); ?>')">Teknik Informatika</option>
        <option onclick="window.location.assign('<?php echo site_url("Mahasiswa/ambil/Teknik_Elektronika"); ?>')">Teknik Elektronika</option>
        <option onclick="window.location.assign('<?php echo site_url("Mahasiswa/ambil/Teknik_Telekomunikasi"); ?>')">Teknik Telekomunikasi</option>
        <option onclick="window.location.assign('<?php echo site_url("Mahasiswa/ambil/Teknik_Elektro_Industri"); ?>')">Teknik Elektro Industri</option>
        <option onclick="window.location.assign('<?php echo site_url("Mahasiswa/ambil/Teknik_Mekatronika"); ?>')">Teknik Mekatronika</option>
        <option onclick="window.location.assign('<?php echo site_url("Mahasiswa/ambil/Multimedia_Broadcasting"); ?>')">Multimedia Broadcasting</option>
        <option onclick="window.location.assign('<?php echo site_url("Mahasiswa/ambil/Teknologi_Game"); ?>')">Teknologi Game</option>
        <option onclick="window.location.assign('<?php echo site_url("Mahasiswa/ambil/Sistem_Pembangkit_Energi"); ?>')">Sistem Pembangkit Energi</option>
        <option onclick="window.location.assign('<?php echo site_url("Mahasiswa/ambil/Teknik_Komputer"); ?>')">Teknik Komputer</option>
        </select></td>
</table>

        <br><table class="table">
    <thead>
        <tr>
            <th bgcolor="#4CAF50">NRP</th>
            <th bgcolor="#4CAF50">NAMA</th>
            <th bgcolor="#4CAF50">ALAMAT</th>
            <th bgcolor="#4CAF50">UMUR</th>
            <th bgcolor="#4CAF50">JURUSAN</th>
            <th bgcolor="#4CAF50">ACTION</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach($query as $row){
    ?>
        <tr>
            <td><?php echo $row->nrp; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->alamat; ?></td>
            <td><?php echo $row->umur; ?></td>
            <td><?php echo str_replace("_", " ", $row->jurusan);?></td>
            <td><a class="btn btn-danger" href="<?php echo base_url().'index.php/Mahasiswa/delete/'.$row->nrp; ?>/">Hapus</a> <a class="btn btn-info" href="<?php echo base_url().'index.php/Mahasiswa/edit/'.$row->nrp; ?>/">Edit</a></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table><br>
    </div>
<div align="center"><a href="<?php echo base_url().'index.php/Mahasiswa/kokindex'?>"><input class="btn btn-success" type="button" value="Tambah Data"</a></div></div><br>
</body>
</html>