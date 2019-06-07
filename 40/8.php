<!-- Вывести Майкл Джексон и Селена Гомез из таблицы students. -->
<?php $connect = mysqli_connect('127.0.0.1','root','','');
$query = mysqli_query($connect, "SELECT * FROM students");

$result = $query->fetch_assoc(); ?>
<p><?php echo $result['surname']; ?></p>
<p><?php echo $result['name']; ?></p>



<p><?php echo $result['surname']; ?></p>
<p><?php echo $result['name']; ?></p>

<?php $result2 = $query->fetch_assoc(); ?>