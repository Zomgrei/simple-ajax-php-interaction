<?php
	// This script accepts input via POST and returns the sent data in a string.
	// If the input is blank or null then it will return "failed"
	
	// If the sent text is blank...
	if (!$_POST['sentText']) {
		echo "failed";
	} else {
		echo "You sent me \"".$_POST['sentText']."\"";
	} 
?>