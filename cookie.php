<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/28/2017
 * Time: 8:53 PM
 */

/**
 * 1. set from server
 * 2. browser to save information
 * 3. send all matching cookis in header
 */

/*setcookie("name1","TEST",time()+3600,"/","",0);
setcookie("name2","TEST",time()+3600,"/");
setcookie("name3","TEST",time()+3600,"/");
setcookie("name4","TEST",time()+3600,"/");

*/
if (isset($_POST["user"]))
    setcookie("user", $_POST["user"], time() + 360000, "/");

if (isset($_COOKIE["user"]))
    echo "Welcome back ," . $_COOKIE["user"];
else {
    $template = <<<HTML
<html>
    <body>
        <form method="post">
            <input type="text" name="user">
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>
HTML;
    echo $template;

}

