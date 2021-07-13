<?php
$id=$_POST['id'];
include './config.php';
$q= "SELECT * FROM student WHERE id = '{$id}';";
$r=mysqli_query($con,$q) or die("error in quer");
echo $out="";
if (mysqli_num_rows($r)>0) {
    # code...
    while ($row = mysqli_fetch_assoc($r)) {
        # code...
       echo $out.="<label for='First name'>First name</label>
        <input type='text' value='{$row['name']}' id='sname' aria-describedby='helpId'>
        <input type='text' value='{$row['id']}' id='sid' hidden aria-describedby='helpId'>
        <button type='button' class='btn btn-sm btn-success not'>Save</button>";
    }
}else{
    echo $out="Error in ";
}
?>
<!-- <input type="text" value=''{$row['id']}''> -->