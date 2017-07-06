<footer>
    <?php
        if (isset($_COOKIE['login']))
            echo "
                <form action=\"logout.php\" method=\"post\">
                    <input class='logout' type=\"submit\" name=\"submit\" value=\"LOG OUT\">
                </form>";
    ?>
</footer>
