<?php
    define("DBUSER", "root");
    define("DBHOST", "localhost");
    define("PASSWORD", "");
    define("DB", "act8");
function connectdb()
{
    //Conección con base de datos
    $c = mysqli_connect('localhost', 'root', '', 'act8');
    if(!$c){
        echo "UnU";
    }
    return $c;
}
    ?> 