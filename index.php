<html>
    <head>
        <title>X-kom</title>
        <link href='style.css' rel='stylesheet' type='text/css'>
        <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script src="js/code.js"></script>
    </head>
    <body>
<?php
    session_start();
    include ("db.php");
    $result = mysqli_query($conn, "SELECT login, password FROM users");
    foreach ($result as $val)
    {
        if ($val['login'] == $_POST['login'] && $val['password'] == hash("sha512", $_POST['passwd']))
            setcookie("login", $_POST['login'], time()+3600);
    }
    $_SESSION['thing'] = $_GET['thing'];
    include ("header.php");
    include ("wrapper.php");
    include ("footer.php");
?>
    </body>
</html>