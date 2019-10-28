<html>
    <head>
        <title>Data Mahasiswa</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

        <!-- Latest compiled JavaScript -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <style>
            .jumbotron {
                background-color: #66c2ff; 
                color: #fff;
            }
           
        </style>
    </head>
    
    <body>
        <div class="container">
        <div class="jumbotron text-center">
            <h1>Data Mahasiswa</h1>
            <p>Form Inputan Data Mahasiswa PENS</p>
        </div>
            <?php echo form_open('Mahasiswa/save'); ?>
        
        <div class="form-group">
			<label for="nama">Nama :</label>
			<input name="nama" type="text" id="nama" size="40" maxlength="50" required="required" type="text" class="form-control">
		</div>
        
        <div class="form-group">
			<label for="nrp">Nrp :</label>
			<input name="nrp" type="text" id="nrp" size="40" maxlength="50" required="required" type="text" class="form-control">
		</div>
       
        <div class="form-group">
			<label for="alamat">Alamat :</label>
			<textarea name="alamat" cols="30" rows="5" id="alamat" required="required" class="form-control"></textarea>
		</div>
            
        <div class="form-group">
			<label for="umur">Umur :</label>
			<input name="umur" type="text" id="umur" size="40" maxlength="50" required="required" class="form-control">
		</div>

        <div class="form-group">
			<label for="jurusan">Jurusan :</label>
			<select name="jurusan" class="form-control">
                <option value="Teknik_Informatika">Teknik Informatika</option>
                <option value="Teknik_Elektronika">Teknik Elektronika</option>
                <option value="Teknik_Telekomunikasi">Teknik Telekomunikasi</option>
                <option value="Teknik_Elektro_Industri">Teknik Elektro Industri</option>
                <option value="Teknik_Mekatronika">Teknik Mekatronika</option>
                <option value="Multimedia_Broadcasting">Multimedia Broadcasting</option>
                <option value="Teknologi_Game">Teknologi Game</option>
                <option value="Sistem_Pembangkit_Energi">Sistem Pembangkit Energi</option>
                <option value="Teknik_Komputer">Teknik Komputer</option>
            </select>
		</div>
      
        <div>
            <input name="submit" type="submit"value="Submit" class="btn btn-success">
            <a href="<?php echo base_url() ?>index.php/Mahasiswa/ambilSemua"><button class="btn btn-info">Lihat Data</button></a>
        </div>
    </div>
        <?php echo form_close();?>    
    </body>
</html>