<?php
require('configuration_db.php');
$globleConnectDB = array();
try {
   echo  $username = $activedbusername;
   echo  $password = $activedbpassword;
   echo  $dbname = $activedb;

    $conn = new PDO("mysql:host=localhost;dbname=$activedb", $username, $password);


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare('SELECT * FROM configuration_site');
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        $globleConnectDB = $row;
    }

    $stmt = $conn->prepare('SELECT * FROM configuration_report');
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        $globleConnectReport = $row;
    }
    
    
    $stmt = $conn->prepare('SELECT * FROM configuration_cartcheckout');
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        $globleConnectCheckout = $row;
    }
    
    $stmt = $conn->prepare('SELECT * FROM theme_css');
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        $globleConnectTheme = $row;
    }
    print_r($globleConnectCheckout);
    
} catch (PDOException $e) {
    
}
