<?php
class getIp(){
     function ClientIp(){
    $cIP= getenv($_SERVER['REMOTE_ADDR']);
    $cIP1 = getenv($_SERVER['HTTP_X_FORWORD_FOR']);
    $cIP2 = getenv($_SERVER['HTTP_CLIENT_IP']);
   $cIP1?$cIP= $cIP1?null;
    $cIP2?$cIP = $cIP2?null;
   return $cIP;
}
     function serverIP(){
       return gethostbyname($_SERVER['SERVER_NAME']);
}
}
$getIP  = new getIP();  
$clientIp = getIP::clientIP();  
$serverIp = getIP::serverIP();  
?>
