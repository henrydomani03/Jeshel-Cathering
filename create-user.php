<?php

require "koneksi.php";


$username = $_POST["username"];

$password = password_hash($_POST["password"], PASSWORF_DEFAULT);
$Level = $_POST["Level"];

$sql = "INSERT INTO user (username, password, level) VALUES ('$username', '$password', '$level')";
mysqli_query($koneksi, $sql);


if (mysqli_error($koneksi)) {
	# code...
	echo mysqli_error($koneksi);
} else {

	header("locatiom: user.php")