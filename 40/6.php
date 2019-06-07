<!-- Вывести первую фамилию Джексон из таблицы students. -->
<?php 
	$connect = mysqli_connect('127.0.0.1','root','','myserver');
	$query = mysqli_query($connect, "SELECT * FROM students WHERE surname='Джексон'");
	$result = $query->fetch_assoc();
	echo $result['surname'];
?>