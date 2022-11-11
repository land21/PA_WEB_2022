<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat United</title>
    <link rel="stylesheet" href="styleAdmin.css?v6">
</head>
<body>
    <header id="Home">
        <nav>
            <a href="dashboard.php"><img class="Logo" src="../img/Logo.png" alt="Cat Paw" id="logo"></a>
            <div  class="nav-links" id="navlink">
                <ul id="menuList">
                    <li><h1>DASHBOARD ADMIN</h1></li>
                    <li><a class="login2" href="login.php">Login</a></li>
                    <li id="darkmode2"><p class="darkmode2">Dark Mode</p></li>
                    <li><a class="login" href="login.php"><button>Logout</button></a></li>
                </ul>
                <img src="../img/close.png" id="close">
            </div>
            <img src="../img/menu.png" alt="menu" id="menu">
            <img src="../img/darkmode.png" alt="darkmode" class="darkmode" id="btnmode">
        </nav>
    </header>
    <main>
        <div class="main-content" id="ServiceHome">
            <h1 id="wwcd">What We Can Do</h1>
            <p>We look after your little family, we ensure that we will give the best treatment for your little family.</p>
            <div class="box-content" id="content-wwcd">
                <div class="schedule">
                    <a href="jadwalAdmin.php"><img src="../img/schedule.png" alt="HTML" id="schedule"></a>
                    <p>GROOMING</p>
                </div>
                <div class="history">
                <a href="historyAdmin.php"><img src="../img/history.png" alt="HTML" id="history"></a>
                    <p>STERILIZATION</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <h4>ADMIN</h4>
        <p class="copyright" id="cr">
            Cat United @ 2022
        </p>
    </footer>
</body>
<script src="dashboardAdmin.js"></script>
</html>