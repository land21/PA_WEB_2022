
<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                document.location.href = 'login.php'
            </script>";
    }
    date_default_timezone_set("Asia/Makassar");
    $mindate = date("Y-m-d");
    $mintime = date("h:i");
    $min = $mindate."T".$mintime;
    $maxdate = date("Y-m-d", strtotime("+7 Days"));
    $maxtime = date("h:i");
    $max = $maxdate."T".$maxtime;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Jadwal</title>
    <link rel="stylesheet" href="stylebooking.css">
</head>
<body>
    <div class="form" >
        <h3>BUAT JADWAL PERAWATAN KUCING</h3><br>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="">Nama</label><br>
            <input type="text" name="bnama" id=""> <br><br>
            <label for="">Jenis Perawatan</label><br>
            <select name="rawat" class="select">
                <option value="GROOMING">Grooming</option>
                <option value="VACCINATION">Vaksin</option>
                <option value="STERILIZATION">Steril</option>
                <option value="SEMUA PERAWATAN">All.</option>
            </select><br><br>
            <label for="">Nama Kucing</label><br>
            <input type="text" name="knama" id=""> <br><br>
            <label for="">Jenis Kelamin Kucing</label><br>
            <select name="kelamin" class="select">
                <option value="JANTAN">Jantan</option>
                <option value="BETINA">Betina</option>
            </select><br><br>
            <input type="hidden" name="tanggal_booking" value=<?php echo $min ?>>
            <label for="">Tanggal dan Waktu Perawatan : </label><br>
            <input type="datetime-local" name="tanggal_rawat" min="<?php echo $min?>" max="<?php echo $max?>"><br><br>
            <label for="">Gambar Kucing : </label><br>
            <input type="file" name='gambar' accept="image/*"><br><br>
            <button type="submit" name='submit' class="submit">TAMBAH</button>
        </form>
    </div>
</body>
</html>


<?php
    require 'config.php';
    if (isset($_POST['submit'])){
        $bnama = $_POST['bnama'];
        $bjenis = $_POST['rawat'];
        $knama = $_POST['knama'];
        $kkelamin = $_POST['kelamin'];
        $bbook = $_POST['tanggal_booking'];
        $btrawat = $_POST['tanggal_rawat'];


        $gambar =  $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $ektensi = strtolower(end($x));
        $gambar_baru = "$knama.$ektensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp,'gambar/'.$gambar_baru)){
            $query = "INSERT INTO kucing (bnama,bjenis,knama,kkelamin,bbook,btrawat,kfoto) VALUES('$bnama','$bjenis','$knama','$kkelamin','$bbook','$btrawat','$gambar_baru')";
            $result = $db->query($query);

            if($result){
                header("Location:schedule.php");
            }else{
                echo "Gagal";
            }

        }
    }
?> 
 