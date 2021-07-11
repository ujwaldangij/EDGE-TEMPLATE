<?php
$con = mysqli_connect("localhost","root","","test") or die(mysqli_connect_error());
$q="select * from student;";
$r= mysqli_query($con,$q) or die("error");
$output="";
if (mysqli_num_rows($r)>0) {
   
    while ($row = mysqli_fetch_assoc($r)) {
        # code...
        $output.="<tr><td>{$row['id']}</td><td>{$row['name']}</td></tr>";
    }
    
}else{

}
echo $output;
mysqli_close($con);
?>