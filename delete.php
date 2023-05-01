<?php

include "connection.php";

$id = $_POST['id'];
$sql = "DELETE FROM crud WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php?msg=Record deleted successfully.");
}
else {
    echo "Failed: " . mysqli_error($conn);
}
?>