<!-- исправьте код, чтобы на страницу вывелось 'i love selena' -->
<?php
	$connect = mysqli_connect('127.0.0.1','root','','');

	$query = mysqli_query($connect, "SELECT * FROM students WHERE ???");

	for($i=0; $i < $query->num_rows; $i++){
		$result = $query->fetch_assoc();
		if($result['name']=="Селена"){
			?>
				<p><?php echo "I love Selena!"; ?></p>
			<?php
		}
	?>		
<?php } ?> 