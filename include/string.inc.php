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