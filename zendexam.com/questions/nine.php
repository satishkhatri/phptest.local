<?php
/**
 * Created by PhpStorm.
 * User: skhatri
 * Date: 14/03/2017
 * Time: 15:45
 */
$a = array (1, 2, 3);
$b = array (1 => 2, 2 => 3, 0 => 1);
$c = array ('a' => 1, 'b' => 2, 'c' => 3);
var_dump ($a == $b);
var_dump ($a === $b);
var_dump ($a == $c);