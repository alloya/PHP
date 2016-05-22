<?
    header("Content-Type: text/plain");
    $simpleNumbers = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29);
    $phpFunctions = array
    (
        "count"       => "Подсчитывает количество элементов массива или что-то в объекте", 
        "is_array"    => "Определяет, является ли переменная массивом",
        "array_merge" => "Сливает один или большее количество массивов",
        "empty"       => "Проверяет, пуста ли переменная",
        "print_r"     => "Выводит удобочитаемую информацию о переменной"
    );
    $matrix = array
    (
        array(1, 0, 0, 0),
        array(0, 1, 0, 0),
        array(0, 0, 1, 0),
        array(0, 0, 0, 1)
    );
    print_r($simpleNumbers);
    print_r($phpFunctions);
    print_r($matrix);