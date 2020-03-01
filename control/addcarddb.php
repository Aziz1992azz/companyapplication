<?php 
include("conn.php");
if(isset($_POST['card_type']))
{
    $card_number = $_POST['card_number'];
    $card_type = $_POST['card_type'];
    $user_id = $_POST['user_id'];
 
    $note = $_POST['note'];
    $status = $_POST['status'];
    $time = date('H:i:s');     
    $date = date('Y-m-d');  
if($card_number  == '0'){
    echo "add not success";
}

$query = "INSERT INTO cards (cardnumber,userid, date,time,status,cardtype,note)
 VALUES ('".$card_number."', '".$user_id."', '".$date."', '".$time."', '".$status."', '".$card_type."', '".$note."')";
if(mysqli_query($conn, $query)) {
    mysqli_close($conn);
 
   } 
   else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

}
else
{
  
   
}
mysqli_close($conn);
?>