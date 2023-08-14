<?php

if(isset($_FILES["image"])){

    echo "<pre>";
    print_r($_FILES);


    echo "</pre>";



    $file_name = $_FILES["image"]["name"];
    $file_tmp = $_FILES["image"]["tmp_name"];
    $file_size = $_FILES["image"]["size"];
    $file_type = $_FILES["image"]["type"];



    echo $file_name."<br>";
    echo $file_tmp."<br>";
    echo $file_size."<br>";
    echo $file_type."<br>";
}





?>