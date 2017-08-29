<?php
    //
    /*Defining keys to be used in connection string
    define('server', 'override.dev.com');
    define('username', 'root');
    define('password', 'alleuname');
    define('database', 'notepad');
    */

    $host ='localhost';
    $username ='root';
    $password='alleuname';
    $db = 'notepad';

    //
    //Database connection like connection strings in ASP.NET
    $connect = new PDO("mysql:host=$host;dbname=$db",$username,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>