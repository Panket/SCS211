<?php
// Include config file
require_once "../../config.php";
// Prepare a select statement
$sql = "SELECT * FROM employees WHERE id = '{$_GET["id"]}'";
// echo $sql;
$result = mysqli_query($link, $sql);


$row = mysqli_fetch_assoc($result);
echo json_encode($row, JSON_UNESCAPED_UNICODE);
?>

