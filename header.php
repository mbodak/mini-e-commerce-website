<?php
    session_start();
?>
<header>
    <div id="head_logo">
        <a href="index.php"><img src="img/395.svg" id="logo" alt="logo"></a>
    </div>
    <div id="head_search">
        <form method="post">
            <input id="search_fild" name="search_fild" type="text" placeholder="Search..." value="<?=$_POST['search_fild']?>">
            <input class="search_button" type="submit" name="search_button" value="search">
        </form>
    </div>
    <div id="head_basket">
        <a href="backet.php"><img id="basket" src="img/2.jpg" title="basket" alt="basket"></a>
    </div>
</header>