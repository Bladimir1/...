<!-- В инпуте ввести имя и найти совпадения в таблице. -->
<form action="13.php" method="POST">
	<input type="" name="???">
	<button>Найти совпадение</button>
</form>

<?php 
	$connect = mysqli_connect('127.0.0.1','root','','');
	$query = mysqli_query($connect, "SELECT * FROM students ???");

	for($i=0;$i<$query->num_rows;$i++){
		$result = $query->fetch_assoc();
	?>
	<p>Найдено совпадений: <?php echo $result["surname"]; ?></p>
		
<?php } ?>