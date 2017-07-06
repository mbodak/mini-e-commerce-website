<?php
    session_start();
    include ("db.php");

    if ($_POST['login'] != "" && $_POST['passwd'] != "" && $_POST['submit'] == 'OK')
    {
        $result = mysqli_query($conn, "SELECT login, password FROM users");
        foreach ($result as $val)
        {
            if ($val['login'] == $_POST['login'])
            {
                echo "ERROR\n";
                return ;
            }
        }
        $log = $_POST['login'];
        $pw = hash("sha512", $_POST['passwd']);
        echo $pw;
        $str = 'INSERT INTO users (login,password) VALUES (\'' . $log .'\',\''.$pw.'\')';
        $resalt = mysqli_query($conn, $str);
        header("Location: index.php");
    }
    else
        echo "ERROR\n";
?>