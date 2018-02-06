<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 06.02.18
 * Time: 14:32
 */

$name = $_GET['name'] ?? 'Guest';
header('X-Developer: KAA');

echo 'Hello! '.$name.'!'.PHP_EOL;