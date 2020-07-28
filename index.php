<html>
  <head>
    <title>Nyflix</title>
  </head>
  <body>
    <?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
  
echo "IP Address is: $ip", "<br>";

$filename = 'ips.txt';
$searchfor = $ip;
$file = file_get_contents($filename);
$internalIp = $_SERVER['SERVER_ADDR'];
$externalContent = file_get_contents('http://checkip.dyndns.com/');
preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
$externalIp = $m[1];
if((strpos($file, $searchfor) !==false)||($externalIp == $ip))
{
    echo "found it", "<br>";
    header("location: http://$internalIp:8096");
}else{
    $filename = 'otherips.txt';
    $searchfor = $ip;
    $file = file_get_contents($filename);
    if(strpos($file, $searchfor) !==false){
        $externalContent = file_get_contents('http://checkip.dyndns.com/');
        preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
        $externalIp = $m[1];
        
        header("location: http://$externalIp:8096");
    }
    else{
        header('Location: test.html');
    }
}

 ?> 
  </body>
</html>
