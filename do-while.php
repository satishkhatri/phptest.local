<?php
/**
 * Created by PhpStorm.
 * User: skhatri
 * Date: 23/03/2017
 * Time: 15:04
 */

$date = new DateTime('2000-01-01');
$date->add(new DateInterval('P10D'));
echo $date->format('y-m-d') . "\n";