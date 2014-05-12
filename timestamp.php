<?php
date_default_timezone_set('Asia/Shanghai');
array_shift( $argv );
$query = implode(' ', $argv);

if (!$query) {
	echo time();
} else if (is_numeric($query)) {
	echo date('Y-m-d H:i:s', $query);
} else if (strtotime($query)) {
	echo strtotime($query);
} else {
	echo 'Failed to parse time! (yyyy-mm-dd hh:mm:ss)';
}
echo PHP_EOL;
