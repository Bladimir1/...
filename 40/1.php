<?php 
	$connect = mysqli_connect('127.0.0.1' , 'root', '', 'myserver');
	mysqli_query($connect, "INSERT INTO students (name, surname) VALUES ('Джексон', 'Майкл')");
?>