<?php
include("conn.php");
$id = $_POST['id'];
$query = "DELETE FROM radcheck WHERE id=$id";
if(mysqli_query($conn, $query)) 
{
    mysqli_close($conn);
   
}
mysqli_close($conn);
?>