<?php
$conn = new mysqli("localhost", "root", "", 9400_atma_auto);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
echo
?>