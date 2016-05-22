<?
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');
    if (isset($_GET['str']))
    {
        $str = $_GET['str'];
        if ($str != null)
        {
            $result = 0;
            $result = lenght($str, $result);
            $result = numeric($str, $result);
            var_dump ($result);
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
    
    function lenght($str, $result)
    {
        echo $result + 4 * intval(strlen($str)) . "\n";
        return $result + 4 * intval(strlen($str));
    }
    
    function numeric($str, $result)
    {
        $i = 0;
        $k = 0;
        while ($i < strlen($str))
        {
            if (is_numeric($str[$i]))
            {
                $k += 1;
            }
            $i +=1;
        }
        echo 4 * $k . "\n";
        return $result + 4 * $k;
    }