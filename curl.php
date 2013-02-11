<?php	
	echo passthru("curl ".$_POST['cmd']); //this is very dangerous but its just for test 
										//until a javascript curl implementation can solve the problem
?>