<?
    header("Content-Type: text/plain");
    $temp;
    if (isset($_GET['arr']))
    {
        $parameter = $_GET['arr'];
        if ($parameter != null)
        {
            $array = explode(',', $parameter);
            $a = 0; 
            $b = count($array) - 1;
            while ($a <= $b/2)
            {
                $temp = $array[$a];
                $array[$a] = $array[$b];
                $array[$b] = $temp;
                $a += 1;
                $b -= 1;
            }
            print_r ($array);
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
