
<?php

$conn = mysqli_connect("localhost","adata","adatapas","lamahdata");
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_set_charset($conn,"utf8");

?>
