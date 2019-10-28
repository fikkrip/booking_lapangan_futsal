<html>
    <head>
        <title>Edit Data Mahasiswa</title>
    </head>
    
    <body>
        <h1 align="center">Form Edit Data Mahasiswa</h1>
        <?php echo form_open('Mahasiswa/formEdit'); ?>
            <table width="500" align="center" cellpadding="5" cellspacing="5" border="0" bgcolor="#CCCCCC">     
<tr>
        <td>NRP</td>
        <td>:</td>
        <td><input name="nrp" type="text" id="nrp" size="40" maxlength="50" required="required"/></td>
</tr>
<tr>
        <td colspan="3" align="center">
        <input name="submit" type="submit"value="Cari">
        <a href="ambil"><input type="button" name="lihat" value="Lihat Data"></a>
</td>
</tr>
        <?php echo form_close();?>    
    </body>
</html>