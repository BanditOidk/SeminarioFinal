<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $dbname = "senatiplus";
    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname;", $user, $password);
      } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
      }
      
?>
