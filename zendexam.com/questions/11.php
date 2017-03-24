<?php
/**
 * Created by PhpStorm.
 * User: skhatri
 * Date: 14/03/2017
 * Time: 15:49
 */
function magic($p, $q)
{

   return ($q == 0)    ? $p    : magic($q, $p % $q);
}
