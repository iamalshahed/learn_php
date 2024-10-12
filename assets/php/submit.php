<?php

// connect config file
require_once('./config.php');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$blooad_group = $_POST['blood_group'];
$religion = $_POST['religion'];
$country = $_POST['country'];
$allsports = $_POST['sport'];
// convert sport to array
$mysports = implode(", ", $allsports);

$phone_number = $_POST['phone'];
$user_file = $_POST['user_image'];
$date_of_birth = $_POST['date_of_birth'];
$address = $_POST['address'];
$local_time = $_POST['local_time'];


// insert query
$sql_query = "INSERT INTO information (`first_name`, `last_name`, `email`, `password`, `gender`, `blooad_group`, `religion`, `country`, `sports`, `phone_number`, `user_image`, `date_of_birth`, `address`, `local_time`) VALUES ('$first_name', '$last_name', '$email', '$password', '$gender', '$blooad_group', '$religion', '$country', '$mysports', '$phone_number', '$user_file', '$date_of_birth', '$address', '$local_time')";

$insert_sql = mysqli_query($con, $sql_query);

// check condition for insert data
if($insert_sql){
    if(isset($_SERVER['HTTP_REFERER'])){
        echo "<h2 class='red'>Please waite....</h2>";
        header("refresh:1.5;url=" .$_SERVER['HTTP_REFERER']);
    }else{
        echo 'No referer information available.';
    }
}else{
    echo 'Oops.... Something went wrong bruda. 🙎';
}

?>