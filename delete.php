<?php
include_once 'db.php';
$sql = "DELETE FROM appointmentform WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header("location: request.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>