<?php
define('DB_HOSTNAME', 'denal.sgedu.site');
define('DB_NAME_CONS', 'USER_KIM');
define('DB_PW_CLASS','Lb2019!');
define('DB_USERNAME_CLASS', 'denal305_class');

$dbc =@mysqli_connect(DB_HOSTNAME, DB_NAME_CONS, DB_PW_CLASS, DB_USERNAME_CLASS); //OR die('Could not connect to' . mysqli_connect_error());

mysqli_set_charset($dbc, 'utf8');
?>