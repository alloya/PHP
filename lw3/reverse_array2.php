<?
    header("Content-Type: text/plain");
    $newArray = array();
    if (isset($_GET['arr']))
    {
        $parameter = $_GET['arr'];
        if ($parameter != null)
        {
            $array = explode(',', $parameter);
            while ($array != null)
            {
                $element = array_pop($array);
                $newArray[] = $element;
            }
            print_r ($newArray);
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
