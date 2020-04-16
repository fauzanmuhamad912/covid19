<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
<body class="p1">
<div align=" center" >
    <h1>Pertanyaan</h1>
    <?php
            include 'cn/config.php';
            
            if(isset($_POST['selesai']))
            {
                $con = "SELECT * FROM masuk ORDER BY id DESC LIMIT 1";
                $result = mysqli_query($db, $con);
                $row = mysqli_fetch_array($result);
                $wq = $row['id'];
                $m1 = $_POST['a1'];
                $m2 = $_POST['a2'];
                $m3 = $_POST['a3'];
                $m4 = $_POST['a4'];
                $m5 = $_POST['a5'];
                $m6 = $_POST['a6'];
                $m7 = $_POST['a7'];
                $m8 = $_POST['a8'];
                $m9 = $_POST['a9'];
                $m10 = $_POST['a10'];
                $m11 = $_POST['a11'];
                $m12 = $_POST['a12'];
                $m13 = $_POST['a13'];
                $m14 = $_POST['a14'];
                $m15 = $_POST['a15'];
                $m16 = $_POST['a16'];
                $m17 = $_POST['a17'];
                $m18 = $_POST['a18'];
                $m19 = $_POST['a19'];
                $m20 = $_POST['a20'];
                $m21 = $_POST['a21'];
                $m = $m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10+$m11+$m12+$m13+$m14+$m15+$m16+$m17+$m18+$m19+$m20+$m21;
                $a = "INSERT INTO survey (user_id, jawaban) VALUE ($wq, $m)";
                $result = mysqli_query($db, $a);
                if($result){
                    echo "<script>alert
			document.location.href='pertanyaan.php'</script>";
                }
                else{
                    echo "<script>alert('gagal menginput data, silahkan login kembali');
            document.location.href='menjawab.php'</script>";
                }
            }
    ?>
<form method="post">
    <table class="table table-hover">
        <tr>
            <th>Saya pergi keluar rumah</th>
            <th><input type="radio" name = "a1" value="1" required>Ya</th>
            <th><input type="radio" name = "a1" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya menggunakan transportasi umum: online, angkot, bus, taksi, kereta api</th>
            <th><input type="radio" name = "a2" value="1" required>Ya</th>
            <th><input type="radio" name = "a2" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya tidak memakai masker pada saat berkumpul dengan orang lain</th>
            <th><input type="radio" name = "a3" value="1" required>Ya</th>
            <th><input type="radio" name = "a3" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya berjabat tangan dengan orang lain</th>
            <th><input type="radio" name = "a4" value="1" required>Ya</th>
            <th><input type="radio" name = "a4" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya tidak membersihkan tangan dengan hand sanitizer / tissue basah sebelum pegang kemudi mobil/motor</th>
            <th><input type="radio" name = "a5" value="1" required>Ya</th>
            <th><input type="radio" name = "a5" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya menyentuh benda / uang yang juga disentuh orang lain</th>
            <th><input type="radio" name = "a6" value="1" required>Ya</th>
            <th><input type="radio" name = "a6" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya tidak menjaga jarak 1.5 meter dengan orang lain ketika: belanja, bekerja, belajar, beribadah</th>
            <th><input type="radio" name = "a7" value="1" required>Ya</th>
            <th><input type="radio" name = "a7" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya makan diluar rumah (warung / restaurant)</th>
            <th><input type="radio" name = "a8" value="1" required>Ya</th>
            <th><input type="radio" name = "a8" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya tidak minum hangat dan cuci tangan dengan sabun setelah tiba di tujuan</th>
            <th><input type="radio" name = "a9" value="1" required>Ya</th>
            <th><input type="radio" name = "a9" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya berada di wilayah kelurahan tempat pasien tertular</th>
            <th><input type="radio" name = "a10" value="1" required>Ya</th>
            <th><input type="radio" name = "a10" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah</th>
            <th><input type="radio" name = "a11" value="1" required>Ya</th>
            <th><input type="radio" name = "a11" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya tidak mencuci tangan dengan sabun setelah tiba di rumah</th>
            <th><input type="radio" name = "a12" value="1" required>Ya</th>
            <th><input type="radio" name = "a12" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya tidak menyediakan: tissue basah/antiseptic, masker, sabun antiseptic bagi keluarga di rumah</th>
            <th><input type="radio" name = "a13" value="1" required>Ya</th>
            <th><input type="radio" name = "a13" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya tidak segera merendam baju dan celana bekas pakai di luar rumah kedalam air panas/sabun</th>
            <th><input type="radio" name = "a14" value="1" required>Ya</th>
            <th><input type="radio" name = "a14" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya tidak segera mandi keramas setelah saya tiba dirumah</th>
            <th><input type="radio" name = "a15" value="1" required>Ya</th>
            <th><input type="radio" name = "a15" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah</th>
            <th><input type="radio" name = "a16" value="1" required>Ya</th>
            <th><input type="radio" name = "a16" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya dalam sehari tidak kena cahaya matahari minimal 15 menit</th>
            <th><input type="radio" name = "a17" value="1" required>Ya</th>
            <th><input type="radio" name = "a17" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya tidak jalan kaki / berolah raga minimal 30 menit setiap hari</th>
            <th><input type="radio" name = "a18" value="1" required>Ya</th>
            <th><input type="radio" name = "a18" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya jarang minum vitamin C dan E, dan kurang tidur</th>
            <th><input type="radio" name = "a19" value="1" required>Ya</th>
            <th><input type="radio" name = "a19" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Usia saya diatas 60 tahun</th>
            <th><input type="radio" name = "a20" value="1" required>Ya</th>
            <th><input type="radio" name = "a20" value="0" required>Tidak</th>
        </tr>
        <tr>
            <th>Saya mempunyai penyakit: jantung/diabetes/gangguan pernafasan kronik</th>
            <th><input type="radio" name = "a21" value="1" required>Ya</th>
            <th><input type="radio" name = "a21" value="0" required>Tidak</th>
        </tr>
    </table>
    <input type="submit" name="selesai" value="Selesai" class="btn btn-danger">
</form>

</body>
</html>