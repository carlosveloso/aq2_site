aq2_site
========

action Q2 server browsing site
********
**Install:**

Create this structure in app/ dir with read and write permissions

* tmp
* |-- cache
* |   |-- models
* |   |-- persistent
* |   |-- views
* |-- logs
* |-- sessions
* |-- tests

then copy and rename

> app/core.php.default -> app/core.php

> app/database.php.default -> app/database.php

********************

**To add a server:**

> app/Controllers/PagesController.php -> line 67

********************

**If you run Nginx, use this config on your enabled-site**

````
server {
 listen 80 ;

 server_name example.com;

 root /public_html/aq2_site/app/webroot; # Change this but be sure to keep it routed to your cake webroot
 index index.html index.php;

 location / {
   try_files $uri $uri/ /index.php?$uri&$args;
   set $new_uri $uri;
 }

 location ~ \.php$ {
   fastcgi_split_path_info ^(.+\.php)(/.+)$;
   # NOTE: You should have "cgi.fix_pathinfo = 0;" in php.ini

   fastcgi_pass 127.0.0.1:9000;
   fastcgi_index index.php;
   include fastcgi_params;
   fastcgi_param PATH_INFO $new_uri;
 }

 location ~ /(\.ht|\.git|\.svn) {
   deny  all;
 }

}
 ````
