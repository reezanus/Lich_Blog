<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
		<?php 
	$database = [
		[
			'title' => 'Погода на завтра',
			's_text' => 'lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
			'l_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
		],
		[
			'title' => 'Статья 2',
			's_text' => 'lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
			'l_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
		],
		[
			'title' => 'Погода на завтра',
			's_text' => 'lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
			'l_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
		],
	];
?>
<?php
 	$index = $_GET['index'];	
 	echo '<h1>' . $database[$index]['title'] . '</h1>';
 	echo '<p>' . $database[$index]['s_text'] . '</p>';
 ?>
</body>
</html>