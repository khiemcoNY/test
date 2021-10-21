<?php
if(isset($_POST['btsua'])){
   
    include('connect.php');
    $id=$_POST['id'];
    $ten=$_POST['hoten'];
    $sex=$_POST['sex'];
    $age=$_POST['age'];
    $nhommau=$_POST['nhommau'];
    $sdt=$_POST['sdt'];

    $sql = "UPDATE BLOOD_DONOR SET bd_name='$ten',bd_sex='$sex',bd_age='$age',bd_group='$nhommau',bd_phno='$sdt' WHERE bd_id='$id'";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}