<!-- Вывести все имена и фамилии из таблицы students на страницу. -->
<?php $connect = mysqli_connect('127.0.0.1','root','','');
$query = mysqli_query($connect, "SELECT * FROM students");

$result = $query->fetch_assoc();

for($i = 0; $i < $query->num_rows; $i++) {
	 
	 ?>

	<p><?php echo $result['surname']; ?></p>
	<p><?php echo $result['name']; ?></p>

<?php } 