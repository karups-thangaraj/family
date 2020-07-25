<?php
    if($_SESSION["dbconnect"]="remote"){

        $database = "familydb";        # Get these database details from
        $host =  "db4free.net:3306/familydb";  # the web console
        $user     = "karups_thangaraj";   #
        $password = "mysql4free";   #
        $port     = 3306;           #
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
    
    }else{

        $database = "familydb";        # Get these database details from
        $host =  local;  # the web console
        $user     = "gokul";   #
        $password = "password";   #
        $port     = 3306;           #
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');         
    }


?>