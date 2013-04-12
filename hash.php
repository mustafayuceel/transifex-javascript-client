<?php
	//Here is the documentation: http://help.transifex.com/features/api/#string-hash-algorithm
	//$_POST['string'] = "Footer here:This is a Content:";
	echo	hash("md5",utf8_encode($_POST['string']));
?>
