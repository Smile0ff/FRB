<?php
	sleep(1);

	if(isset($_POST["contact"]["username"]) && strlen($_POST["contact"]["username"]) > 3){
		$response["message"] = "Дякуємо за ваш лист та час";
	}
	else{
		header('HTTP/1.1 500 Internal Server Error');
		$response["message"] = "Щось трапилось, будь ласка спробуйте ще раз трохи пізніше";
	}
	echo json_encode($response);

?>