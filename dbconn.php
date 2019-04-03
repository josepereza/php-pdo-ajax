<?php

$username  = 'root';
$password  = '123456';
$result = 0;
try {
    $dbconn = new PDO('mysql:host=localhost;dbname=onlinestore', $username, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
