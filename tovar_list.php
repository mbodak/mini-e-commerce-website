<?php
    session_start();
    include ("db.php");

if ($_SESSION['thing'] > 0 && $_SESSION['thing'] < 4)
{
    $type = $_SESSION['thing'];
    $result = mysqli_query($conn, "SELECT * FROM `tovar` WHERE `type` = '".$type."'");
}
else {
    $result = mysqli_query($conn, "SELECT * FROM `tovar`");
}
foreach ($result as $val)
{
    $date = json_decode($val['params'], true);
    if ($val['type'] == 1)
    {
        include('templates/girl_block.php');
    }
    if ($val['type'] == 2)
    {
        include('templates/weapon_block.php');
    }
    if ($val['type'] == 3)
    {
        include('templates/drug_block.php');
    }
    unset ($date);
}
?>