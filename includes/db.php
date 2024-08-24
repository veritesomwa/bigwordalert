<?php

$host = "localhost";
$user = "otangobaby";
$pass = "tomtomGT0";

$db_name = "bigwordalert";

try {
    $conn = mysqli_connect($host,$user,$pass, $db_name);
} catch (\Throwable $th) {
    throw $th;
}


// if($conn){
//     echo "Connect";
// }

?>