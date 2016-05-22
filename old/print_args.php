<?
    if ($argc == 1)
    {
        print_r("No parameters were specified!");
    }
    else
    {
        $i = 1; 
        print_r("Number of parameters: " . ($argc - 1) . "\n");
        print_r("Agruments: ");
        foreach ($argv as $v) 
        {
            print_r($argv[$i] . " ");
            $i++;
        }
    }
    print_r("\n");
