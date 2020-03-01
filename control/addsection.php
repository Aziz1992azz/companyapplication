<?php 
include("conn.php");
if(isset($_POST['Name']))
{
    $Relationship = $_POST['Relationship'];
    $Name = $_POST['Name'];
    $Starus = $_POST['Starus'];


$query = "INSERT INTO sections (sectionname	, 	status, relationship) VALUES ('".$Name."', '".$Starus."', '".$Relationship."')";
if(mysqli_query($conn, $query)) {
    mysqli_close($conn);
    header("location:sectionhome.php");
   } 
   else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

mysqli_close($conn);


}
else
{

    mysqli_close($conn);
}
?>