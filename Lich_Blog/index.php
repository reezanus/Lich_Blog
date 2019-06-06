<!DOCTYPE html>
<html>
<head>
	<title>Main title</title>
	<link rel="stylesheet" type="text/css" href="bab.css">
	<meta charset="utf-8">
</head>
<body>
	<?php 
	$database = [
		[
			'title' => 'История России',
			's_text' => 'lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
			'l_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
		],
		[
			'title' => 'Мировые конфликты',
			's_text' => 'lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
			'l_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
		],
		[
			'title' => 'Погода на завтра',
			's_text' => 'lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
			'l_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
		],
		[
			'title' => 'Ловля рыбыы',
			's_text' => 'lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
			'l_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
		],
		[
			'title' => 'Супермен был человеком!?',
			's_text' => 'lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
			'l_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
		],
		[
			'title' => 'Машиностроение',
			's_text' => 'lLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
			'l_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
		],
	];
?>
	<div>
		<div class="bbt"><h1>Личный блог</h1></div>
		<hr class="piton">	
		<?php for ($i = 0; $i < count($database); $i++){
			echo '<h1>' . $database[$i]['title'] . '</h1>';
			echo '<p>' . $database[$i]['s_text'] . '</p>';
			echo '<a href="page.php?index=' . $i . '">Далее</a>';
		?>
		<hr>
		<?php
		}?>
	</div>
	<a href="page.php">
	</a>
</body>
</html>