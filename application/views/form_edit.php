<html>
    <head>
        <title>Data Mahasiswa</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

        <!-- Latest compiled JavaScript -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        
    </head>
    
    <body>
        <div class="container">
        <h1 align="center">Form Data Mahasiswa</h1>
        <?php echo form_open('Mahasiswa/updateMahasiswa');
            foreach($data_mahasiswa as $data){
        ?>
        
        <div class="form-group">
			<label for="nama">Nama :</label>
			<input name="nama" type="text" id="nama" size="40" maxlength="50" value="<?php echo $data->nama; ?>" required="required" type="text" class="form-control">
		</div>
        
        <div class="form-group">
			<label for="nrp">Nrp :</label>
			<input name="nrp" readonly="true" type="text" id="nrp" size="40" maxlength="50" value="<?php echo $data->nrp; ?>" required="required" type="text" class="form-control">
		</div>
       
        <div class="form-group">
			<label for="alamat">Alamat :</label>
			<textarea name="alamat" cols="30" rows="5" id="alamat" required="required" class="form-control"><?php echo $data->alamat; ?></textarea>
		</div>
            
        <div class="form-group">
			<label for="umur">Umur :</label>
			<input name="umur" type="text" id="umur" size="40" maxlength="50" value="<?php echo $data->umur; ?>" required="required" class="form-control">
		</div>

        <div class="form-group">
			<label for="jurusan">Jurusan :</label>
			<select name="jurusan" class="form-control">
                <option <?php if( $data->jurusan=='Teknik_Informatika'){echo "selected"; } ?> value="Teknik_Informatika">Teknik Informatika</option>
                <option <?php if( $data->jurusan=='Teknik_Elektronika'){echo "selected"; } ?> value="Teknik_Elektronika">Teknik Elektronika</option>
                <option <?php if( $data->jurusan=='Teknik_Telekomunikasi'){echo "selected"; } ?> value="Teknik_Telekomunikasi">Teknik Telekomunikasi</option>
                <option <?php if( $data->jurusan=='Teknik_Elektro_Industri'){echo "selected"; } ?> value="Teknik_Elektro_Industri">Teknik Elektro Industri</option>
                <option <?php if( $data->jurusan=='Teknik_Mekatronika'){echo "selected"; } ?> value="Teknik_Mekatronika">Teknik Mekatronika</option>
                <option <?php if( $data->jurusan=='Multimedia_Broadcasting'){echo "selected"; } ?> value="Multimedia_Broadcasting">Multimedia Broadcasting</option>
                <option <?php if( $data->jurusan=='Teknologi_Game'){echo "selected"; } ?> value="Teknologi_Game">Teknologi Game</option>
                <option <?php if( $data->jurusan=='Sistem_Pembangkit_Energi'){echo "selected"; } ?> value="Sistem_Pembangkit_Energi">Sistem Pembangkit Energi</option>
                <option <?php if( $data->jurusan=='Teknik_Komputer'){echo "selected"; } ?> value="Teknik_Komputer">Teknik Komputer</option>
            </select>
		</div>
      
        <div>
            <input name="submit" type="submit" value="Simpan" class="btn btn-success">
            <a href="<?php echo base_url() ?>index.php/Mahasiswa/ambilSemua"><button class="btn btn-danger">Cancel</button></a>
        </div>
    </div>
        <?php };
            echo form_close();
        ?>    
    </body>
</html>