<?php
    session_start();
    include ("db.php");
?>
    <div id="wrapper" class="clearfix">
        <div id="left_sidebar">
        
             <?php
                if (isset($_COOKIE['login']))
                    echo '<p id="title_ul"></p>
              <ul>
                 <a href="index.php?thing=1"><li class="t1">Girls for codding</li></a>
                 <a href="index.php?thing=2"><li class="t1">Weapons</li></a>
                 <a href="index.php?thing=3"><li class="t1">Drugs</li></a>
              </ul>';
                 else
                    echo '
                <fieldset class="first">
                    <legend class="titlebtn">Authorization:</legend>
                   <form id="auth" action="login.php" method="post">
                        <p><input placeholder="Login" type="text" name="login"></p>
                        <p><input placeholder="Password" type="password" name="passwd"></p>
                        <input type="submit" name="submit" value="OK">
                   </form>
                </fieldset>
                <fieldset >
                    <legend class="titlebtn">Are your not registered?</legend>
                    <p><a class="btn t1" href="create.html">Create new account</a></p>
                    <!--<p style="font-size: 14px;">or if you forgot your password</p>-->
                    <p><a class="btn t1" href="modif.html">Change your password</a></p>
                </fieldset>';
             ?>
        </div>
        <div id="main">
            <?php
                if ($_POST['search_fild'] != "")
                    include ("search.php");
                else
                    include("tovar_list.php");
            ?>
                
        </div>
    </div>