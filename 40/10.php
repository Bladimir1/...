<!-- Выведите все значения из таблицы students и отсортируйте их по имени (а-я) потом (я-а). -->
<?php 
$connect = mysqli_connect('127.0.0.1','root','','');
$query = mysqli_query($connect, "SELECT * FROM students ORDER BY name ASC");

$result = $query->fetch_assoc();

 ?>