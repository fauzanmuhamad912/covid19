<?php include("cn/config.php");?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Akhir</title>
</head>
<body class="p1">
    <center>
    <div>
    <?php
        $con = "SELECT * FROM masuk ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($db, $con);
        $row = mysqli_fetch_array($result);
    ?>
    <div>
        Nama : <?php echo $row['nama']; ?>
        <br>
        Resiko Anda terjangkit covid-19 : 
    </div>
    </div>
    <?php
        $jawaban = "SELECT jawaban FROM survey ORDER BY id DESC LIMIT 1";
        $g = mysqli_query($db,$jawaban);
        $r = mysqli_fetch_array($g);
            if ($r['jawaban'] >= 15) {
            echo "Tinggi";
            }
            else if ($r['jawaban'] >= 8) {
            echo "Sedang";
            }
            else if($r['jawaban'] <= 7){
            echo "Rendah";
            }
    ?> 
    <form action="index.php">
    <input type="submit" name="keluar" value="Keluar" class="btn btn-danger">
    </form>
</center>
    
</body>
</html>
