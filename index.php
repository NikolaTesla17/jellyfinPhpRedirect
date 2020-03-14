<!-- This is the main file, it checks the ip a user is accesing from, then
it sees if that ip has been listed before, either as a known home address
or as a public ip address and if not, than it redirects to another
page that lets the user log where the ip is. -->



<!-- please change any commented out lines according to the comments near them -->


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
if(strpos($file, $searchfor) !==false) 
{
    echo "found it", "<br>";
    //header('Location: http://10.0.0.17:8096');
    //change the above line to read the local ip of your server:whatever port it is on above is an example
}else{
    $filename = 'otherips.txt';
    $searchfor = $ip;
    $file = file_get_contents($filename);
    if(strpos($file, $searchfor) !==false){
        //header('Location: http://216.58.216.164:8096');
        //change this line to the public facing ip of your server:the port of the server, above is an example using the ip of  
    }
    else{
        header('Location: test.html');
    }
}

 ?> 
  </body>
</html>