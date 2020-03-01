<?php
include("conn.php");

$id = $_POST['id'];
$card_number = $_POST['card_number'];
    $card_type = $_POST['card_type'];
    $note = $_POST['note'];
    $status = $_POST['status'];
    $time = date('H:i:s');     
    $date = date('Y-m-d');  


$query = "UPDATE cards SET cardnumber = '".$card_number."',	date = '".$date."',time='".$time."',status='".$status."',cardtype='".$card_type."',note='".$note."' WHERE id = ".$id; 
mysqli_query($conn, $query);
mysqli_close($conn);

?>