<?php

    $_SERVER = "sql202.epizy.com";
    $username = "epiz_32985961";
    $password = "0UY62WNTMTIya";
    $db_name = "epiz_32985961_schedulekucing";

    $db = new mysqli($_SERVER, $username, $password, $db_name);
    
    if(!$db){
        die("Salah we salah");
    }


?>