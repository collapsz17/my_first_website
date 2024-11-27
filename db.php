<?php

$servername = "127.0.0.1";
$username = "root";
$password = "password";
$db_name = "first";

$link = mysqli_connect($servername, $username, $password);

if (!$link) {
    die("Ошибка подключения: " . mysqli_connection_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $db_name";

if (!mysqli_query($link, $sql)) {
    echo "Не удалось создать базу данных";
}

mysqli_close($link);

$link = mysqli_connect($servername, $username, $password, $db_name);

$sql = "CREATE TABLE IF NOT EXISTS users(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(15) NOT NULL,
email VARCHAR(50) NOT NULL,
pass VARCHAR(20) NOT NULL
)";

if (!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу Users";
}

$sql = "CREATE TABLE IF NOT EXISTS posts(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(20) NOT NULL,
main_text VARCHAR(400) NOT NULL
)";

if (!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу Posts";
}

mysqli_close($link);

?>

