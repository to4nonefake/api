<?php
class LogClass {
	function LogPrint($message, $error){
		$date = date('Y/m/d H:i:s');
		error_log($date.'. '.$message.' Сообщение: '.$error."\n", 3, 'logs/errors.log');
	}
}