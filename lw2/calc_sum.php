<?php
	$arg1 = '';
	$arg1 = '';
	
	// проверка существования GET-параметров
	if (isset($_GET['arg1']))
	{
	    $arg1 = $_GET['arg1'];
	}
	if (isset($_GET['arg2']))
	{
	    $arg2 = $_GET['arg2'];
	}
	
	// Проверка на пустоту и сложение
	if (!empty($arg1) && !empty($arg2))
	{
	    echo intval($arg1) + intval($arg2);
	}
	else
	{
	    header("HTTP/1.1 400 Incomplete data");
		die();
	}

