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
        $forbiddenCharacters = array("`","~","!","@","#","№","$","%","^","&","*","(",")","-","_","=","+",
                                    "<",">",",",".","\/","?",";",":","\"","'","|","{","}","[","]");
        if (is_numeric($str[0]) || array_key_exists($str[0], $forbiddenCharacters))
        {
            $result = "It's incorrect identificator. First is in array or numeric\n";
        }
        else 
        {
            $result = true;
            $k = strlen($str);
            while ($k != 0)
            {
                $result = array_key_exists($str[k], $forbiddenCharacters);
                $k--;
                if ($result == true)
                {
                    break;
                }
            }
            if ($result == false)
            {
                $result = "It is correct identificator";
            }
            elseif ($result == true)
            {
                $result = "It is incorrect identificator. Forbidden characters in it";
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