<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_viewconnection = "clientsview.db.8863468.hostedresource.com";
$database_viewconnection = "clientsview";
$username_viewconnection = "clientsview";
$password_viewconnection = "Nugget@0612";
$viewconnection = mysql_pconnect($hostname_viewconnection, $username_viewconnection, $password_viewconnection) or trigger_error(mysql_error(),E_USER_ERROR); 
?>