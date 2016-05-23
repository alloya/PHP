<?php
    header("Content-Type: text/plain");
    $url = $_SERVER['QUERY_STRING'];
    echo "Query string = '$url' ";