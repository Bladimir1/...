<!DOCTYPE html>
<html>
<head>
	<title>select</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
	<div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">По цене</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="query.php?price=ASC">min to max</a>
			<a class="dropdown-item" href="query.php?price=DESC">max to min</a>
		</div>
	</div>
	<div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Пол</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="query.php?gender=мужской">мужской</a>
			<a class="dropdown-item" href="query.php?gender=женский">женский</a>
		</div>
	</div>
	<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'store'); 
	$query = mysqli_query($con, 'SELECT * FROM products'); ?>
	<div class="container bg-dark mb-1">
		<h1 class="text-white">online Store</h1>
	</div>
	<div class="container">
		<?php for($i = 0; $i < $query->num_rows; $i++) {
		$res = $query->fetch_assoc();?>
		<div class="row mb-3 bg-white">
			<div class="col-4 ml-3">
				<?php echo '<img src="' . $res['img'] . '" class="w-100">' ?>
			</div>
			<div class="col-6 ml-5">
				<h4><?php echo $res['name'] . ' ' . $res['brand']; ?></h4>
				<p>Категория: <?php echo ' ' . $res['category']; ?></p>
				<select class="custom-select">
					<option><?php echo $res['size']; ?></option>
				</select>
				<p>Цена: <?php echo ' ' . $res['price'] . ' руб.'; ?></p>
				<button type="button" class="btn btn-secondary">В корзину</button>
			</div>
		</div>
		<?php } ?>
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<!--
1. по мин макс цене - 1 дроп
2. пол 1 дроп 
-->
</html>