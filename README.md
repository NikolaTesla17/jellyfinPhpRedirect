# jellyfinPhpRedirect
 A simple redirect script to help you not burn through your home data cap when streaming.
 The point of this script is to simply run a basic php script that redirects the user's browser either to the local server ip if the user is at an ip previously said to be your home ip, or to a public ip if the user is accesing from an ip said to be an away ip. It also contains logic for designating an ip as home or away using a very snazy web page.
 This is potentially useful if you don't want to reconfigure this everytime your dynamic IP switches.
 
 
 
 
 
 To install,

  1: Download wamp, lamp, or a similar server based on your os.

  2: Follow this guide for configuring wamp:
 https://www.top10-websitehosting.co.uk/how-to-host-your-own-website
 is fairly well done, though please note, if your config file does not have allow from all/deny from all you will need to use "Require all granted" in its place.
 
 3. Set up port fowarding for your wamp or lamp server. I recomend changing the default port to be something like 8090 or something similar.
 
 4. Place these files in the www folder.
 
 5. Go to your external ip address:port the wamp server is on to check if it is up.
 
 6. Click on "I am home"
 
 
 7. Redirecting should now work, note that you should map "your external ip address:the wamp server port" to a domain for a truly streamliened expirience. I reccomend a free .tk domain.
