<?php
include("conn.php");

$id = $_POST['id'];
$User_name = $_POST['User_name'];
$Password = $_POST['Password'];
$Fullname = $_POST['Fullname'];

$User_email = $_POST['User_email'];
$User_phone = $_POST['User_phone'];
$Birth_date = $_POST['Birth_date'];
$User_blood = $_POST['User_blood'];
$Id_number = $_POST['Id_number'];


$query = "UPDATE radcheck SET username = '".$User_name."',value = '".$Password."',fullname = '".$Fullname."',useremail='".$User_email."',userphone='".$User_phone."',userbirthdate='".$Birth_date."',userblood='".$User_blood."',attribute='".$Id_number."' WHERE id = ".$id; 
if(mysqli_query($conn, $query))
{
    
}
else
{
}
mysqli_close($conn);
?>