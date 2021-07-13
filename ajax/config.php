<?php
$servername = "localhost";
$username ="root";
$password ="";
$databasename ="test";
$con = mysqli_connect($servername,$username,$password,$databasename) or die('Error in connection'.mysqli_connect_error());
function mera($a){
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

?>