<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 06.02.18
 * Time: 14:32
 */
use Framework\Http\Request;

chdir(dirname(__DIR__)); // поднимаемся на уровень вверх
require 'src/Framework/Http/Request.php';




$request = new Request();

$name = $request->getQueryParams()['name'] ?? 'Guest';

header('X-Developer: KAA');

echo 'Hello! '.$name.'!'.PHP_EOL;