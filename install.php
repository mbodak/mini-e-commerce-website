<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "12081993";
$db_name = "shop";
$db_port = "8080";

$conn = mysqli_connect($db_host, $db_user, $db_pass, "", $db_port);
$sql = "CREATE DATABASE " . $db_name;
if (mysqli_query($conn, $sql))
{
    mysqli_close($conn);
    include ("db.php");
    echo "Database created successfully";
    print_r(run_sql_file("backup/shop.sql"));
}
else
    header("Location: index.php");

function run_sql_file($location){
    //load file
    $commands = file_get_contents($location);
    global $conn;
    //delete comments
    $lines = explode("\n",$commands);
    $commands = '';
    foreach($lines as $line){
        $line = trim($line);
        if( $line && !startsWith($line,'--') ){
            $commands .= $line . "\n";
        }
    }
    //convert to array
    $commands = explode(";", $commands);

    //run commands
    $total = $success = 0;
    foreach($commands as $command) {
        if(trim($command)) {
            $success += (mysqli_query($conn, $command) == false ? 0 : 1);
            $total += 1;
        }
    }
    //return number of successful queries and total number of queries found
    return array(
        "success" => $success,
        "total" => $total
    );
}

function startsWith($haystack, $needle){
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}


//if (!$conn)
//    die('Connection error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
//$sql = "CREATE DATABASE " . $db_name;
//if (mysqli_query($conn, $sql))
//    echo "Database created successfully";
//else
//    echo "Error creating database: " . mysqli_error($conn);



//$sql = "CREATE TABLE categories (
//cid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//name VARCHAR(30) NOT NULL
//)";
//if (!mysqli_query($conn, $sql))
//    echo "Error creating table categories: " . mysqli_error($conn);
//
//$sql = "CREATE TABLE girls (
//iid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//name VARCHAR(30) NOT NULL,
//age INT(3) DEFAULT '0' NOT NULL,
//skills VARCHAR(30) NOT NULL,
//level VARCHAR(30) NOT NULL,
//forces VARCHAR(30) NOT NULL,
//weight INT(3) DEFAULT '0' NOT NULL,
//status VARCHAR(30),
//text VARCHAR(256),
//img VARCHAR(256),
//price INT(6) DEFAULT '0' NOT NULL
//)";
//if (!mysqli_query($conn, $sql))
//    echo "Error creating table items: " . mysqli_error($conn);
//
//$sql = "CREATE TABLE weapons (
//iid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//name VARCHAR(30) NOT NULL,
//calibr INT(3) DEFAULT '0' NOT NULL,
//lo INT(3) DEFAULT '0' NOT NULL,
//toch INT(3) DEFAULT '0' NOT NULL,
//weight INT(3) DEFAULT '0' NOT NULL,
//text VARCHAR(256),
//img VARCHAR(256),
//price INT(6) DEFAULT '0' NOT NULL
//)";
//if (!mysqli_query($conn, $sql))
//    echo "Error creating table items: " . mysqli_error($conn);
//
//$sql = "CREATE TABLE drags (
//iid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//name VARCHAR(30) NOT NULL,
//contain INT(3) DEFAULT '0' NOT NULL,
//time VARCHAR(30) NOT NULL,
//level VARCHAR(30) NOT NULL,
//age INT(4) DEFAULT '0' NOT NULL,
//weight INT(3) DEFAULT '0' NOT NULL,
//status VARCHAR(30),
//text VARCHAR(256),
//img VARCHAR(256),
//price INT(6) DEFAULT '0' NOT NULL
//)";
//if (!mysqli_query($conn, $sql))
//    echo "Error creating table items: " . mysqli_error($conn);
//
//$sql = "CREATE TABLE orders (
//nid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//user VARCHAR(30) NOT NULL,
//sum INT(6) DEFAULT '0' NOT NULL,
//order_date TIMESTAMP
//)";
//if (!mysqli_query($conn, $sql))
//    echo "Error creating table orders: " . mysqli_error($conn);
//
//mysqli_close($conn);
?>