<?php
    //header("Content-Type: text/plain");
	$arg1 = '';
	$arg1 = '';
	$operation = '';
	
	// проверка существования GET-параметров операторов и операции
	if (isset($_GET['arg1']))
	{
	    $arg1 = $_GET['arg1'];
	}
	if (isset($_GET['arg2']))
	{
	    $arg2 = $_GET['arg2'];
	}
	if (isset($_GET['operation']))
	{
	    $operation = $_GET['operation'];
	}
	
	// Проверка на пустоту и операции
	if (!empty($arg1) && !empty($arg2) && !empty($operation))
	{
	    if ($operation == 'add') // сложение
		{
		    echo $arg1 . ' + ' . $arg2 . ' = ' . (intval($arg1) + intval($arg2));
		}
		if ($operation == 'sub') // вычитание
		{
		    echo $arg1 . ' - ' . $arg2 . ' = ' . (intval($arg1) - intval($arg2));
		}
		if ($operation == 'mul')  // умножение
		{
		    echo $arg1 . ' * ' . $arg2 . ' = ' . (intval($arg1) * intval($arg2));
		}
		if ($operation == 'div') // деление
		{
		    if (intval($arg2) != 0)
			{
		        echo $arg1 . ' / ' . $arg2 . ' = ' . (intval($arg1) / intval($arg2));
			} 
			else
			{
			    echo "На 0 делить нельзя";
			}
		}
	}
	else
	{
	    header("HTTP/1.1 400 Incomplete data");
		die();
	}

