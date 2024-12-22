<?php
// mysqli('hostname', 'user_name','password', 'database_name'); 
// $connection = new mysqli('hostname', 'user_name','password', 'database_name'); 

$connection = new mysqli('localhost', 'root', '', 'school_management_system_1');

//now check the database connection >>> 
//For checking ... No need
// #Connecttion test
if($connection == true){
    echo "Database Connected with project Successfully Connected Done !!!";
}
else{
    echo "Connection Failed";
}
?>