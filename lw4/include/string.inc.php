<?
    function last($str)
    {
        return array_pop(str_split($str));
    }
    
    function withoutLast($str)
    {
        $tempArray = str_split($str);
        $last = array_pop($tempArray);
        return implode($tempArray);
    }
    
    function reverse($str)
    {
        $tempArray = str_split($str);
        while ($tempArray != null)
        {
            $element = array_pop($tempArray);
            $newArray[] = $element;
        }
        return implode($newArray);
    }
    
    function checkIdentifier($str)
    {
        if (is_numeric($str[0]))
        {
            $result = "It's incorrect identificator. First character must be a letter.\n";
        }
        else 
        {
            $result = ctype_alnum($str);
            if ($result == true)
            {
                $result = "It is correct identificator";
            }
            elseif ($result == false)
            {
                $result = "It is incorrect identificator. Only letters and numbers allowed.";
            }
        }
        return $result;
    }
    
    function removeExtraBlanks($str)
    {
        var_dump ($str);
        $tempArray = explode(" ", trim($str));
        $k = 0;
        while($k < count($tempArray))
        {
            if (strlen($tempArray[$k]) == 0)
            {
                unset($tempArray[$k]);
            }
            $k++;
        }
        //var_dump(preg_replace("/\s{2,}/", " ", trim($str)));  тоже вариант
        return implode(' ', $tempArray);
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
        if (ctype_digit($str) == false)
        {
            
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
        else
        {
            echo "isThereUppercase: All digits\n";
            return $result;
        }
    }
    
    function isThereLowerCase($str, &$result)
    {
        $i = 0;
        $k = 0;
        if (ctype_digit($str) == false)
        {
            
            while ($i < strlen($str))
            {
                if (ctype_lower($str[$i]))
                {
                    $k +=1;
                }
                $i += 1;
            }
        echo "isThereLowercase: " . 2 * (strlen($str) - $k) . "\n";
        $result = $result + 2 * (strlen($str) - $k);
        }
        else
        {
            echo "isThereLowercase: All digits\n";
            return $result;
        }
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