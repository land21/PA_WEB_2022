<?php
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
        <h3>LOGIN</h3><br>
        <form action="" method="post">
        <label for = "">Username / Email</label><br>
        <input type="text" name="user"><br><br>
        <label for = "">Password</label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" name="login" value="login">
        </form>

        <p>Belum Punya Akun?
            <a href = "register.php"> Registrasi</a>
        </p>
    </div>
</body>
</html>


<?php
    session_start();
    require 'config.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user
                WHERE Username = '$user' OR Email = '$user'";
        $result = $db->query($sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $Nama = $row['Nama'];

            if(password_verify($password, $row['Sandi'])){
                $_SESSION['login'] = true;
                echo "<script>
                        alert('Selamat Datang $Nama');
                        document.location.href = 'index.php';
                    </script>";
            }
    
            else{
                echo "<script>
                        alert('Username dan Password Salah');
                        </script>";
            }

        }else{
            echo "<script>
                    alert('Username tidak ada');
                    </script>";
        }       
    }

?>

<?php
    require 'config.php';
    if (isset($_POST['submit'])){
        $user = $_POST['user'];
        $bjenis = $_POST['password'];
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
            $query = "INSERT INTO user (bnama,bjenis,knama,kkelamin,bbook,btrawat,kfoto) VALUES('$bnama','$bjenis','$knama','$kkelamin','$bbook','$btrawat','$gambar_baru')";
            $result = $db->query($query);

            if($result){
                header("Location:schedule.php");
            }else{
                echo "Gagal";
            }

        }
    }
?> 
 