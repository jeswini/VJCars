<?php
session_start();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, 'carrent');

