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

$file = 'ips.txt';
$current = file_get_contents($file);
$current .= "$ip\n";
file_put_contents($file, $current);

$internalIp = $_SERVER['SERVER_ADDR'];
header("location: http://$internalIp:8096");

?> 
</body>
</html>
