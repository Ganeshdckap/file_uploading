<?php
//

require 'connection.php';
$app['db'] = (new Database())->db;



if (isset($_POST['userName']) && isset($_FILES['profilePhoto']));
{
//    try {
    $userName = $_POST['userName'];
    $profilePhoto = $_FILES['profilePhoto'];

    $filePath = "uploads/" . $profilePhoto['name'];
    move_uploaded_file($profilePhoto['tmp_name'], "$filePath");
    if ($userName !== '' && $profilePhoto !== ''){
        $insert = $app['db']->query("INSERT into files(username,image) VALUES('$userName','$filePath')");
    }   

    $fetchingData = $app['db']->query("SELECT * FROM files");
    $fetchingData->execute();
    $fetchingData = $fetchingData->fetchAll();
    require 'index.php';
}




