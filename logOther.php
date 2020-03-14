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

//header('Location: http://216.58.216.164:8096');
//change this line to the public facing ip of your server:the port of the server, above is an example using the ip of  

?> 
</body>
</html>