<?
    if ($argc == 1)
    {
        print_r("No parameters were specified!");
    }
    elseif ($argc > 2)
    {
        print_r("Incorrect number of arguments!");
    }
    else
    {
        $filteredArray = $argv[1];
        $filteredArray = str_split($filteredArray);
        $filteredArray = array_unique($filteredArray);
        print_r(implode($filteredArray));
    }
    print_r("\n");