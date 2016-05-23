<?php
	header("Content-Type: text/plain");
	$myName = '';
    if (isset($_GET['name']));
    {
        $myName = $_GET['name'];
    }
    if (!empty($myName))
    {
        echo "Hello, Dear $myNname";
    }
    else
    {
        header ('HTTP/1.1 400 Bad name');
    }
	