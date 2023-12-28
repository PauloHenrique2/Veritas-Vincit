<?php
 include_once ("bd.php");
 if (!empty($_POST["login"]) && !empty($_POST["senha"]))
 {
   $login = $_POST["login"];
   $senha = $_POST["senha"];
   
   $sql = "SELECT idUsuario FROM Usuarios WHERE login = '{$login}' AND senha = '{$senha}'";
   $stmt = bd::Conexao()->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() > 0)
   {
     session_start();
     $_SESSION['login_sessao'] = $login;
     header("Location:../view/principal.php");
   }

   else
   {
    header("Location:../view/index.php");
   }
 }
?>