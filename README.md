# pi_gpio_php
Php site to operate gpio pins for raspberry pi

index.html site will output to gpio pin 23 

using lighttpd and php5

to install
sudo apt-get install lighttpd php5 php5-cgi

fix for 403 page error for lighttp
sudo lighttpd-enable-mod fastcgi fastcgi-php
sudo service lighttpd force-reload


command line for gpio pin 23

>gpio -g mode 23 out

>gpio -g write 23 0

>gpio -g write 23 1
