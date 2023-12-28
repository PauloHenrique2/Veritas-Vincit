<?php
 define('servidor', 'mysql:host=localhost;dbname=blogFilo;charset=utf8'); // Insira o seu host e nome do banco de dados
 define('user', 'root'); // Insira seu usuário do MySql
 define('password', ''); // Insira sua senha do MySql
 
 class bd
 {
  private static $con;
  
  public static function Conexao()
  {
    try
    {
      if (!isset(self :: $con)):
         self::$con = new PDO(servidor, user, password);
         self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      endif;
        return self::$con;  
    }
    
    catch (PDOException $ex)
    {
      echo "Falha na conexão " . $ex->getMessage();
      die();
    }
  }
 }
?>
