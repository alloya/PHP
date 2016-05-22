<?php
    header("Content-Type: text/plain");
    $my_name = '';
    if (isset($_GET['my_name']));
    {
        $name = $_GET['my_name'];
    }
    if (!empty($name))
    {
        echo "Query string = 'my_name={$name}";
    }
    else
    {
        header ("status: 400 Bad query");
    }
    $my_surname = '';
    if (isset($_GET['my_surname']));
    {
        $surname = $_GET['my_surname'];
    }
    if (!empty($surname))
    {
        echo "&my_surname={$surname}";
    }
    else
    {
        header ("status: 400 Bad query");
    }
    $message = '';
    if (isset($_GET['message']));
    {
        $my_message = $_GET['message'];
    }
    if (!empty($my_message))
    {
        echo "&message={$my_message}'";
    }
    else
    {
        header ("status: 400 Bad query");
    }