<?php
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');
    if (isset($_GET['str']))
    {
        $str = $_GET['str'];
        if ($str != null)
        {
            echo last($str);
        }
        else
        {
            header('HTTP/1.1 400 Parameter is empty');
        }
    }
    else
    {
        header('HTTP/1.1 400 Parameter required');
    }