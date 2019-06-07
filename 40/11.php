<!--исправьте код, чтобы вставилась новая запись из инпутов-->
<form action="11.php" method="POST">
	<input type="" name="name">
	<input type="" name="surname">
	<button>Новая запись</button>
</form>
<?php 
	$connect = mysqli_connect('127.0.0.1','root','','');
	mysqli_query($connect, "INSERT INTO students (name, surname) VALUES ('$_POST['name']','$_POST['surname']')");
 ?>