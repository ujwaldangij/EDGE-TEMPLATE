<?php
$name= $_POST['name'];
$id=$_POST['id'];
include './config.php';
$q= "UPDATE student SET name ='{$name}' WHERE id ='{$id}';";
// $r=mysqli_query($con,$q) or die("error in quer");
// mera($r);

if (mysqli_query($con,$q)) {
    # code...
    echo 1;
}else{
    echo 0;
}
?>