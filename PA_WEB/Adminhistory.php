<?php
    require 'GlobalConfig.php';
    $result = mysqli_query($db,
            "SELECT * FROM history");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin History</title>
    <link rel="stylesheet" href="styleJadwal.css">
    <link rel="shortcut icon" type="image/jpg" href="img/Kucing.png"/>
</head>
<body>
        <nav>
            <a href="Admindashboard.php"><img class="Logo" src="img/Logo.png" alt="Cat Paw" id="logo"></a>
            <div  class="nav-links" id="navlink">
                <ul id="menulist">
                    <li><a href="Admindashboard.php"><h1>DASHBOARD ADMIN</h1></a></li>
                    <li><a class="login2" href="UserLogout.php">Logout</a></li>
                    <li id="darkmode2"><p class="darkmode2">Dark Mode</p></li>
                    <!-- <li><a class="login" href="#Home"><button>Login</button></a></li> -->
                </ul>
                <img src="img/close.png" id="close">
            </div>
            <img src="img/menu.png" alt="menu" id="menu">
            <img src="img/darkmode.png" alt="darkmode" class="darkmode" id="btnmode">
        </nav>
    <div class="table_head">
        <h3>HISTORY PERAWATAN KUCING</h3>
        <form action="Adminhistory.php" method="GET" >
            <input type='text' name="cari" id="cari" placeholder="Type..." value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];}?>">
            <button type="submit" name="search">CARI</button>
        </form>
        <div>
            <button class = "add"><a href="AdminBooking.php"><img src="img/addw.png" alt="Tambah Data"></a></button>
        </div>
    </div>

    <div class="table">
    <table border='1'>
        <tr>
            <th style="width:5%">NO</th>
            <th>NAMA PEMILIK</th>
            <th style="width:15%">JENIS PERAWATAN</th>
            <th>NAMA KUCING</th>
            <th style="width:8%">KELAMIN KUCING</th>
            <th>TANGGAL PEMERIKSAAN</th>
            <th>TANGGAL BOOKING</th>
            <th>FOTO KUCING</th>
        </tr>
            <?php
            include 'GlobalConfig.php';
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $query = "SELECT * FROM history WHERE nama_pemilik LIKE '%".$cari."%' or jenis_perawatan LIKE '%".$cari."%' or nama_kucing LIKE '%".$cari."%' or sex LIKE '%".$cari."%' or tgl_pemeriksaan LIKE '%".$cari."%' or tgl_booking LIKE '%".$cari."%'";			
            }else{
                $query = "SELECT * FROM history";		
            }
            $i = 1;
            $tampil = mysqli_query($db, $query);
            while ($row = mysqli_fetch_array($tampil)){    
            ?>
        <tr>
           <td><?=$i?></td>
           <td><?=$row['nama_pemilik']?></td>
           <td><?=$row['jenis_perawatan']?></td>
           <td><?=$row['nama_kucing']?></td>
           <td><?=$row['sex']?></td>
           <td><?=$row['tgl_pemeriksaan']?></td>
           <td><?=$row['tgl_booking']?></td>
           <td><img src="gambar/<?=$row['foto_kucing']?>" alt="" width = 100px >
        </tr>
            <?php 
                $i++;   
                }
            ?>
    </table>
    </div>
</body>
<script src="jQuery.js"></script>
</html>



