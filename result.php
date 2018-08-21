<?php
	$title = $_POST['title'];
	$text = $_POST['text'];
	$db = mysqli_connect('localhost' , 'root' ,'', 'ajax_test');
	$query = mysqli_query($db, "INSERT INTO news (title, text) VALUES ('".$title."' , '".$text."')");
	if($query){
		echo 'gg';
	}else{
		echo "problem";
	}
?>