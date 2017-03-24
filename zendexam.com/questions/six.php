<?php
/**
 * Created by PhpStorm.
 * User: skhatri
 * Date: 13/03/2017
 * Time: 11:47
 */

for($x = 1; $x <= 2; $x++){
    for($y = 1; $y <= 3; $y++){
        if ($x == $y)
            continue;
        print("x = $x  y =  $y").'<br>';
    }
}