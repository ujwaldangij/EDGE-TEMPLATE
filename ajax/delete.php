<?php
$id= $_POST["id"];
$conn = mysqli_connect("localhost","root","","test") or die("error in query");
$q= "DELETE FROM student WHERE id='{$id}';";
if (mysqli_query($conn,$q) or die("error in query")) {
    # code...
    echo 1;  
}else{
    echo 0;
}


?>