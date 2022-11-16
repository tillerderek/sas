#wow what a ride

##how it works **for now**

1. change docker-compose file to match the volume you want to link container volumes to

2. bash into php container after recreating or first time and run:

*docker-php-ext-install mysqli*
*apachectl restart*

to install mysqli module and activate it
Then you can check if its istalled at localhost/phpinfo or ip/phpinfo.

3. copy paste the docker-compose file into portainer localhost:9000 and the digi-ocean ip:9000 *this will let you control the stack through portainer instead of cli or docker app* (or you can just docker-compose up through the terminal on local and remote if the compose file is in the root *this might be easier irl if you just leave ./ as in the compose file for volume mapping then you could just have it in that root IDK IDC*)

4. Setup ur db with localhost:8001 and remote ip:8001
through phpmyadmin

##That's it should work 
**respect to all the homies whose stuff i stole from all over the world wide web. you know who u are :pray: :pray: :pray:


