<?php 
include("conn.php");
if(isset($_POST['credit']))
{
    $credit = $_POST['credit'];
    $user_id = $_POST['user_id'];
    $note = $_POST['note'];
   
    $time = date('H:i:s');     
    $date = date('Y-m-d');  

  
$query = "INSERT INTO balanceactivity (amount, date,time,note,userid)
 VALUES ('".$credit."', '".$date."', '".$time."', '".$note."',  '".$user_id."')";
if(mysqli_query($conn, $query)) {
    
 
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