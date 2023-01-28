<?php

$heading = "Home";

function dump_and_die($value) 
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

require "views/index.view.php";