<?php

$str = (!empty($_POST['test'])) ? $_POST['test'] : '';
// $str = mb_convert_kana($str, 'ACKV');
$str = mb_convert_kana($str, 'aKVs');
$str = str_replace('ー', '-', $str);
$str = str_replace('-', '', $str);
// $str = str_replace('ァ', 'ア', $str);
// $str = str_replace('ィ', 'イ', $str);
// $str = str_replace('ゥ', 'ウ', $str);
// $str = str_replace('ェ', 'エ', $str);
// $str = str_replace('ォ', 'オ', $str);
// $str = str_replace('ッ', 'ツ', $str);
// $str = preg_replace("/( |\.|,)/", '', $str);

?>


<html>
	<head>
		<title></title>
	</head>
	<body>
		mb_convert_kana($str, 'aCKVs')
		<form method="post" action="">
			<input type="text" name="test" value="">
			<button type="submit">変換</button>
		</form>
		<?php var_dump($_POST, $str); ?>
	</body>
</html>