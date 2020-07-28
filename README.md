# jellyfinPhpRedirect
 A simple redirect script to help you not burn through your home data cap when streaming(turns out those still exist, I know right?).
 The point of this script is to simply run a basic script that redirects the user's browser either to the local server ip if the user is at home, or to the server's external Ip if the client is on a seperate network from the server.
 This is potentially useful if you don't want to reconfigure this everytime your dynamic IP switches.
 
 
 
 
 
 To install,

0.5: Make sure your jellyfin server is on port 8096(the default)

1: Download wamp, lamp, or a similar server based on your os.

2: Follow this guide for configuring wamp:https://www.top10-websitehosting.co.uk/how-to-host-your-own-website is fairly well done, though please note, if your config file does not have allow from all/deny from all you will need to use "Require all granted" in its place.

3. Set up port fowarding for your wamp or lamp server. I recomend changing the default port of the wamp server to be something like 8090 or something similar.

4. Place these files in the www folder.

5. Go to your external ip address:port the wamp server is on to check if it is up.(for example 70.70.70.70:8090)


Redirecting should now work, note that you should map "your external ip address:the wamp server port" to a domain for a truly streamliened expirience. I reccomend a free .tk domain because I am cheap.


//todo
redo web interface
