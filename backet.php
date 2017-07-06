<?php include("db.php"); ?>
<html>
    <head>
        <title>Backet</title>
        <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script src="js/code.js"></script>
        <link href='style.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
            include ("header.php");
        session_start();
        if (isset($_COOKIE['login']))
        {
            echo "<div id='tabl'><table><thead>
            <td>ID</td><td></td><td>Name</td><td>Count</td><td>Price</td><td>Drop</td></thead>";
            $result = mysqli_query($conn, "SELECT `cart`.*,`tovar`.* FROM `cart`,`tovar` WHERE `tovar`.`tid`=`cart`.`tovar_id` AND `cart`.`user`= '".$_COOKIE['login']."'");
            foreach ($result as $val)
            {
                $date = json_decode($val['params'], true);
                print "<tr class=\"deltr".$val['cid']."\">
                <td>".$val['tid']."</td>
                <td><img class='img' src='" . $date['img'] . "' height='80' width='auto'></td>
                <td>".$date['name'] . "</td>
                <td>" . $val['count'] . "</td>
                <td>" . ($val['count'] * $date['price']) . "</td>
                <td><img src='img/del.ico' height='15' width='auto' onclick='drop(".$val['cid'].");'></td>
                </tr>";
            }
            echo "</table></div>";
        }
        else
        {
            include ("no.html");
        }
        include ("footer.php");
?>
    </body>
</html>