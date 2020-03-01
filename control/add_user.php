<?php
include("conn.php");

if(isset($_POST['User_name']))
{

  
    $User_name = $_POST['User_name'];
    $Password = $_POST['Password'];
    $Full_name = $_POST['Full_name'];
 
    $User_email = $_POST['User_email'];
    $User_phone = $_POST['User_phone'];
    $Birth_date = $_POST['Birth_date'];
    $User_blood = $_POST['User_blood'];
    $Id_number = $_POST['Id_number'];



$query = "INSERT INTO radcheck (username, value, fullname,useremail,userphone,userbirthdate,userblood,attribute) 
        VALUES ('".$User_name."', '".$Password."','".$Full_name."', '".$User_email."', '".$User_phone."', '".$Birth_date."', '".$User_blood."', '".$Id_number."')";
if(mysqli_query($conn, $query)) {
  

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




}
else
{
   
    echo "none";
}
mysqli_close($conn);
?>