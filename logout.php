<?php 
    session_start();
    if(!isset($_SESSION['uid'])){
        header("Location: login.php");
        exit;
      }
    session_destroy();

    setcookie('id', '', time()-3600);
    setcookie('uid', '', time()-3600);
    echo "<meta http-equiv=refresh content=1;url=login.php>";
?>