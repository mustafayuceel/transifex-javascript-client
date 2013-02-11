<?php
		if(!isset($_POST['string']))
			$_POST['string']='';
		if(!isset($_POST['lang']))
			$_POST['lang']='en|el';

		$ch = curl_init("http://mymemory.translated.net/api/get?q=".urlencode($_POST['string']) ."&langpair=".$_POST['lang']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		$content = curl_exec($ch);
		$translated = json_decode($content,true);
		curl_close($ch);	
		echo $translated['responseData']['translatedText'];
?>