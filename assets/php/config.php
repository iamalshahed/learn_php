<?php

// There is configured with database
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'codechums';

$con = mysqli_connect($hostname, $username, $password, $db_name);


// check connection condition
/*if($con){
    echo 'Hmm..... Connect hoise...';
}else{
    echo 'uuhhhh.... na connect hoi nai. kichu problem ache.';
}
*/

?>