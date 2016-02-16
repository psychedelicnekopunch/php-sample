<?php

$str = (!empty($_POST['test'])) ? $_POST['test'] : '';
$str = mb_convert_kana($str, 'ACKV');

?>


<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="post" action="">
			<input type="text" name="test" value="">
			<button type="submit">変換</button>
		</form>
		<?php var_dump($_POST, $str); ?>
	</body>
</html>