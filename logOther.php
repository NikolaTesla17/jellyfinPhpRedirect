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

$file = 'otherips.txt';
$current = file_get_contents($file);
$current .= "$ip\n";
file_put_contents($file, $current);


$externalContent = file_get_contents('http://checkip.dyndns.com/');
preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
$externalIp = $m[1];

header("location: http://$externalIp:8096");

?> 
</body>
</html>
