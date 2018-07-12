<?php

	function handler_error($code, $message, $file, $line){

		echo json_encode(array(
			
			"code"=>$code,
			"message"=>$message,
			"file"=>$file,
			"line"=>$line

		));
	}

	set_error_handler("handler_error");

	echo 100/0;
	
?>