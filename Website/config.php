<?php
   define('DB_SERVER', '172.16.1.169:3036');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'tpw123');
   define('DB_DATABASE', 'user');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>