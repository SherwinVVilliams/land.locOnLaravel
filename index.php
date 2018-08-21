<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<!--<script src =" jquery.js"></script>-->
<form method="post">

	<input type="text" name="title"><br><br>
	<textarea name = "text" cols = '50' rows = '10' ></textarea><br><br>
	<input type = 'button' id = 'send' value = "Создать">
</form>
<div id = 'content'></div>
	<script>
$("document").ready(function(){

	$("#send").click(function(){
		var data = $('form').serialize();
		//alert(data);
		$.ajax({
			url: 'result.php',
			type: "POST",
			data: data,
			success: function(data){
				getContent();
				clearContent();
			},
		});
		
	});

	function clearContent(){
		$("#content").empty();
	}

	function getContent(){
	var show = $.ajax({
		url: 'select.php',
		type: "POST",
		success: function(data){
			var obj = jQuery.parseJSON(data.toString());
			$.each(obj, function(key, value){
				$('#content').append('<hr><h1>'+ value.title + "</h1><p>"+ value.text + "</p>");
			});
		}
	});
}

	

});
	</script>
</body>
</html>