<?
    header("Content-Type: text/plain"); 
    require_once('include/common.inc.php');
    if (isset($_GET['str']))
    {
        $str = $_GET['str'];
        if ($str != null)
        {
            $result = 0;
            lenght($str, $result);
            numeric($str, $result);
            isThereUppercase($str, $result);
            isThereLowerCase($str, $result);
            areAllLetters($str, $result);
            areAllDigits($str, $result);
            isThereRepeats($str, $result);
            echo "Сила пароля = $result";
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
    
    function lenght($str, &$result)
    {
        echo "len: ";
        echo $result + 4 * intval(strlen($str)) . "\n";
        $result = $result + 4 * intval(strlen($str));
    }
    
    function numeric($str, &$result)
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
        echo "numeric: " . 4 * $k . "\n";
        $result = $result + 4 * $k;
    }
    
    function isThereUppercase($str, &$result)
    {
        $i = 0;
        $k = 0;
        while ($i < strlen($str))
        {
            if (ctype_upper($str[$i]))
            {
                $k +=1;
            }
            $i += 1;
        }
        echo "isThereUppercase: " . 2 * (strlen($str) - $k) . "\n";
        $result = $result + 2 * (strlen($str) - $k);
    }
    
    function isThereLowerCase($str, &$result)
    {
        $i = 0;
        $k = 0;
        while ($i < strlen($str))
        {
            if (ctype_lower($str[$i]))
            {
                $k +=1;
            }
            $i += 1;
        }
        echo "isThereLowerCase: " . 2 * (strlen($str) - $k) . "\n";
        $result = $result + 2 * (strlen($str) - $k);
    }
    
    function areAllLetters($str, &$result)
    {
        if (ctype_alpha($str))
        {
            $result = $result - strlen($str);
            echo "areAllLetters: -" . strlen($str) . "\n";
        }
        $result = $result;
    }
    
    function areAllDigits($str, &$result)
    {
        if (ctype_digit($str))
        {
            $result = $result - strlen($str);
            echo "areAllDigits: -" . strlen($str) . "\n";
        }
        $result = $result;
    }
    
    function isThereRepeats($str, &$result)
    {
        $k = 0;
        foreach (count_chars($str, 1) as $i => $val)
        {
            if ($val > 1)
            {
                $k += 1;
            }
        }
        echo "isThereRepeats: " . $k . "\n";
        $result = $result - 2 * $k;
    }
    
    
    