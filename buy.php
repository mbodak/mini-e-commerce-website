<?php
session_start();
include ("db.php");

if (!isset($_COOKIE['login']))
{
    echo (4);
    exit ();
}
if ($_POST['id'] && $_POST['type'])
{
    $type   = $_POST['type'];
    $id     = $_POST['id'];
    $time   = time();
    $result = mysqli_query($conn, "SELECT * FROM `cart` WHERE `type` = '".$type."' AND `tovar_id`='".$id."' AND `cart`.`user`= '".$_COOKIE['login']."'");
    $row    = mysqli_fetch_array($result);

    if ($row['cid'])
    {
        $result = mysqli_query($conn, "UPDATE `cart` SET `count` = `count` + 1 WHERE `type` = '".$type."' AND `tovar_id`='".$id."' AND `cart`.`user`= '".$_COOKIE['login']."'");
        echo 1;
    }
    else
    {
        $result = mysqli_query($conn, "INSERT INTO `cart` 
(
`type`,
`date`,
`tovar_id`,
`action`,
`user`,
`count`
) 
VALUES 
(
'$type',
'$time',
'$id',
'1',
'".$_COOKIE['login']."',
'1'
)
");
        echo 2;
    }
}
?>