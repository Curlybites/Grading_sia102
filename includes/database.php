<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'shs_grading';

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo mysqli_error();
} 
// else{
//     echo 'connected';
// }


?>