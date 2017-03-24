<?php
/**
 * Created by PhpStorm.
 * User: skhatri
 * Date: 24/03/2017
 * Time: 10:11
 */

define('FOO', 10);
$array = array(10 => FOO,"FOO" => 20);
print $array[FOO] * $array["FOO"];
