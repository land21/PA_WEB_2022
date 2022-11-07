<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="stylebooking.css">
</head>
<body>
    <h3>Registrasi Akun</h3>
    <form action="" method="post">
        <label for="">Nama Lengkap</label><br>
        <input type="text" name="nama"><br><br>

        <label for="">Email</label><br>
        <input type="email" name="email"><br><br>

        <label for="">Username</label><br>
        <input type="text" name="username"><br><br>

        <label for="">Password</label><br>
        <input type="password" name="password"><br><br>

        <label for="">Konfirmasi Password</label><br>
        <input type="password" name="konfirmasi"><br><br>

        <input type="submit" name="regis" value="Registrasi">
    </form>

    <p>Sudah Punya Akun?
        <a href = "login.php">Login</a>
    </p>

</body>
</html>

<?php
    require 'config.php';

    if(isset($_POST['regis'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        $sql = "SELECT * FROM user WHERE Username='$username'";

        $user = $db->query($sql);

        if(mysqli_num_rows($user) > 0){
            echo "<script>
                    alert('Username dah di pake mas mending ganti daripada bermasalah nih');
                  </script>";
        }else{
            // konfirmasi password
            if ($password == $konfirmasi){

                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO user (Nama,Email, Username, Sandi)
                            VALUES ('$nama', '$email', '$username', '$password')";

                $result = $db->query($query);

                if($result){
                    echo "<script>
                        alert('Aman bro');
                        </script>";
                }

                else{
                    echo "<script>
                        alert('Gagal ya ges ya');
                        </script>";
                }
            }
            else{
                echo "<script>
                    alert('Password Berbeda')
                    </script>";
            }
        }



    }

?>