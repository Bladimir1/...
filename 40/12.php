<!-- Удалить запись, в инпуте нужно ввести id-записи. -->
<form action="12.php" method="POST">
	<input type="">
	<button>Удалить запись</button>
</form>


<?php 
	$connect = mysqli_connect('127.0.0.1','root','','');
	$query = mysqli_query($connect, "DELETE FROM students WHERE id= '???'");
 ?>
