<?
    header("Content-Type: text/plain");
    $vocabulary = array
    (
        'клавиатура' => 'keyboard',
        'мышь'       => 'mouse',
        'карандаш'   => 'pencil',
        'ручка'      => 'pen',
        //'keyboard'   => 'клавиатура',
        //'mouse'      => 'мышь',
        //'pencil'     => 'карандаш',
        //'pen'        => 'ручка'
        );
    if (isset($_GET['word']))
    {
        $word = $_GET['word'];
        $index = array_search($word, $vocabulary);
        if ($index !== false)
        {
            echo $index;
        }
        else
        {
            header('HTTP/1.1 404 No such key');
        }
    }
    else
    {
        header('HTTP/1.1 400 Parameter required');
    }