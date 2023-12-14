<?php
$connection = mysqli_connect('localhost','root','xcaliber25','db_tourph');

if($connection){
    echo "Connected";
}else{
    echo "Not Connected";
}
?>