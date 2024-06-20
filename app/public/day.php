<?php
function day($unixtime = null) {
	if (!$unixtime) {
		$unixtime = null;
	}
	// 当日の曜日を求めるだけだったら date('D') でよい。
	switch (date('D', $unixtime)) {
	case 'Mon':
		return '月曜日';
	case 'Tue':
		return '火曜日';
	case 'Wed':
		return '水曜日';
	case 'Thu':
		return '木曜日';
	case 'Fri':
		return '金曜日';
	case 'Sat':
		return '土曜日';
	case 'Sun':
		return '日曜日';
	default:
		return 'エラー';
	}
}

echo day(time());
?>