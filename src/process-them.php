<?php
if(isset($_POST['btthem'])){
   
    include('connect.php');
    $ten=$_POST['hoten'];
    $sex=$_POST['sex'];
    $age=$_POST['age'];
    $nhommau=$_POST['nhommau'];
    $sdt=$_POST['sdt'];
    $sql = "INSERT INTO BLOOD_DONOR(bd_name,bd_sex,bd_age,bd_group,bd_phno)
    VALUES('$ten','$sex','$age','$nhommau','$sdt');";

    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location:index.php");

    mysqli_close($conn);
}
