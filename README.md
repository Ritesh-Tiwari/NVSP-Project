Poject Name : National Voter's Services Portal (NVSP)
GitHub URL  : https://github.com/Ritesh-Tiwari/NVSP-Project
Site URL    : localhost and http://nvsp.io
Author      : Ritesh Tiwari
Created Date: 12/01/2020
Updated Date: 30/01/2020
Languages   : html5, css3, JavaScript, php 7.4
server      : nginx/1.14.0 (ubuntu)

---------------------------------------------------

Defult Username and Passowrd 

* username : xxxxx
* password : xxxx


-----------------------------------------------------
File structure

* 

---------------------------------------------------------------------------------

Required packages or librariess

* bootstrap v4.3.1 
* php        		: sudo apt-get install -y php
* fpdf 			: To create pdf file
* jquery  v3.4.1

--------------------------------------------------------------------------------

Installation Stpes:

Step 1  :   sudo apt update
Step 2  :   sudo apt install php 
Step 3  :   sudo apt install nginx
Step 4  :   sudo ufw app list
Step 5  :   sudo ufw allow 'Nginx Full'
Step 6  :   sudo ufw status
Step 7  :   sudo systemctl start nginx
Step 8  :   sudo systemctl status nginx
Step 9  :   sudo cp -R project_file_path/* /var/www/html
Step 10 :   sudo systemctl restart nginx
Step 11 :   go to localhost


---------------------------------------------------------------------------------

Create a local domain name (optional)  

1. open  :  /etc/hosts file  || sudo nano /etc/hosts
2. Write :  127.0.0.1    nvsp.io
3. save the file


-----------------------------------------------------------------------------------

Nginx site-enbaled configuration Settings (optional)

1. Go to site-enabled folder || cd /etc/nginx/site-enabled/
2. Copy and paste the nvsp.io file into the site-enabled folder || cp source_file destination_path
3. Restart nginx server || sudo systemctl restart nginx
4. http://nvsp.io/


--------------------------------------------------------------------------------

Check the PHP configuration settings for file uploads in your php.ini file:

* file_uploads: Ensure this is set to On.
* upload_max_filesize: Ensure this is large enough to accommodate your file size.
* post_max_size: Ensure this is larger than upload_max_filesize.




------------------------------------------------------------------------------------------

Max image upload size settings :

First edit the Nginx configuration file (nginx.conf)

Location: sudo nano /etc/nginx/nginx.conf

Add following codes:

http {
        client_max_body_size 100M;
}
Then Add the following lines in PHP configuration file(php.ini)

Location: sudo gedit /etc/php5/fpm/php.ini

Add following codes:

memory_limit = 128M 
post_max_size = 20M  
upload_max_filesize = 10M




----------------------------------------------------------------------------------------------------

