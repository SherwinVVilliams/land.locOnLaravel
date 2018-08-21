<?php
$db = mysqli_connect('localhost' , 'root' ,'', 'ajax_test');
$query = mysqli_query($db ,"SELECT * FROM news ORDER BY id DESC");

$news = array();

while($row = mysqli_fetch_assoc($query)){
	$news[] = $row;
}

 echo json_encode($news);
?>