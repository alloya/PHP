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