<?php
	header("Content-Type: text/plain" );
	$arg1 = '';
	$arg2 = '';
	$operation = '';
	if (isset($_GET['arg1']));
    {
        $arg1 = $_GET['arg1'];
    }
	if (isset($_GET['arg2']));
    {
        $arg2 = $_GET['arg2'];
    }
	if (isset($_GET['operation']));
    {
        $operation = $_GET['operation'];
    }
	if ((!empty($arg1) or ($arg1 == 0)) and (!empty($arg2) or ($arg2 == 0)) and !empty($operation))
	{
		if ($operation == 'add')
		{
			echo ($arg1) + ($arg2);
		}
		if ($operation == 'sub')
		{
			echo ($arg1 - $arg2);
		}
		if ($operation == 'mul')
		{
			echo ($arg1 * $arg2);
		}
		if ($operation == 'div')
		{
		    echo $arg1 / $arg2;
		}
	}
	else
		{
			header ('HTTP/1.1 400 Bad Request');
		}