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
	if (isset($arg1) && isset($arg2) && !empty($operation))
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
			if (intval($arg2) != 0)
			{
				echo (intval($arg1) / intval($arg2));
			} 
			else
			{
		    echo "Error: Div by zero";
			}
		}
	}	