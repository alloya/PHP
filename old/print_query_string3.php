<?php
    header("Content-Type: text/plain");
    $my_name = $_GET['my_name'];
    
    $my_surname = $_GET['my_surname'];
    
    $my_message = $_GET['message'];
   
	echo "Query string = 'my_name=$my_name&my_surname=$my_surname&message=$my_message ";