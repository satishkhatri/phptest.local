<?php
/**
 * Created by PhpStorm.
 * User: skhatri
 * Date: 14/03/2017
 * Time: 15:36
 */
function modifyArray (&$array)
{

    foreach ($array as &$value)
    {
        $value = &$value + 2;
    }
    $value = $value + 3;
}
$array = array (1, 2, 3);
modifyArray($array);
print_r($array);