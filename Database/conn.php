<?php
//Developement
    $host='remotemysql.com';//localhost page ip adress
    $db='3wkM1ENSBS';
    $user='3wkM1ENSBS';
    $pass='Dhd7now978';
    $charset='utf8mb4';
    
    $dsn="mysql:host=$host;dbname=$db; charset=$charset";


        $pdo= new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
    
    require_once 'crud.php';
    require_once 'user.php';
    $crud= new crud($pdo);
    $user= new user($pdo);

    $user->insertUser("lekshmi02.nair@gmail.com","password");
?>