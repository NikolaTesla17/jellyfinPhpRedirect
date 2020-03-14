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

//header('Location: http://10.0.0.17:8096');
//change the above line to read the local ip of your server:whatever port it is on above is an example

?> 
</body>
</html>