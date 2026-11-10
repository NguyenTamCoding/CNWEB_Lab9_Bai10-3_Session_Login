<?php
$connect = mysqli_connect('localhost', 'root', '', 'tintuc', 3307);
if (!$connect) {
    die("Không thể kết nối đến Database! " . mysqli_connect_error());
}
mysqli_query($connect, "SET NAMES 'utf8'");
?>