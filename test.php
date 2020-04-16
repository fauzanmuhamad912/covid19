<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<body class="p1">
<?php include("cn/config.php");
if(isset($_POST['masuk'])){
    $sql = mysqli_query($db,"INSERT INTO masuk (nama,umur,jk) VALUE ('$_POST[nama]','$_POST[umur]','$_POST[jk]')");
    if($sql){
        echo "<script>alert('data berhasil disimpan');document.location.href = 'menjawab.php';</script>";
    }else{
        echo "<script>alert('data gagal disimpan');</script>";
    }
}
?>
<form method="post"  align="center" class="form2">
<table align="center">
<tr>
    <th>Nama :</th>
    <th><input type="text" name="nama" required class="form-control"></th>
</tr>
<tr>
    <th>Umur:</th>
    <th><input type="text" name="umur" required class="form-control"></th>
</tr>
<tr>
    <th>Jenis Kelamin :</th>
    <th><select name="jk" required class="form-control">
				<option value="P">Perempuan</option>
				<option value="L">Laki-laki</option>
		</select></th>
</tr>
<tr>
    <th></th>
    <th><input type="submit" name='masuk' value="Masuk"  class="btn btn-danger"></th>
</tr>
</table>
</form>

</body>
</html>