<?php
session_start();
include ("db.php");

$id     = $_POST['cid'];
if ($id)
{
    $result = mysqli_query($conn, "DELETE FROM `cart` WHERE `cid` = '" . $id . "'");
    echo 3;
}
?>