<?php

if(isset($_REQUEST['code'])) {
	// file_put_contents('code.txt', $_REQUEST['code']);
	// echo 'saved';

	$fp = fopen('code.txt', 'w');
	fwrite($fp, $_REQUEST['code']);
	fclose($fp);
	echo 'saved';
}