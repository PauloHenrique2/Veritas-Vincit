<?php
 session_start();
 unset($_SESSION["login_sessao"]);
 session_destroy();
 header("Location:../view/index.php");
?>