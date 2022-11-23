<?php
	$db_host='localhost';
	$db_user='root'; //id18725753_ersin
	$db_pass=''; //bDApVq~uvh<v4Did
	$db_database='erso_shopping'; //id18725753_erso_shopping

	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
	
	//проверка на връзката
	if (!$link)
		die('Неуспешно свързване с базата от данни: '. mysqli_error($link));
	
	mysqli_set_charset($link, 'utf8');
