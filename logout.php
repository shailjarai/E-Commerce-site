<?php include_once("./header.php"); ?>
<?php
    if(isset($_SESSION["user_pwd"]))
    {
        unset($_SESSION);
        session_destroy();
        header("location:login.php");
    }


?>
<?php include_once("./footer.php"); ?>