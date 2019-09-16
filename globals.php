<?php

$prefix = 'Mr. ';

function getUserWithPrefix($name){
    global $prefix;
    return $prefix.$name;
}

echo getUserWithPrefix('Zaid Al-Hashim');

?>