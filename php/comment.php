<?php

	sleep(2);

	if(strlen($_POST["comment"]["company_name"]) > 5){
		$response = [
			"message" => "Спасибо за ваш отзыв, хорошего вам дня!"
		];
		echo json_encode($response);
	} else{
		header('HTTP/1.1 500 Internal Server Error');
		echo "Что-то пошло не так как было запланировано, приносим свои извинения за временные неудобства.";
	}


?>
