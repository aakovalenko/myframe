<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 06.02.18
 * Time: 14:32
 */
use Framework\Http\RequestFactory;
use Framework\Http\Response;


chdir(dirname(__DIR__)); // поднимаемся на уровень вверх
require 'vendor/autoload.php';

### Initialization
$request = RequestFactory::fromGlobals();


### Action
$name = $request->getQueryParams()['name'] ?? 'Guest';

$response = (new Response('Hello, ' .$name . '!'))
    ->withHeader('X-Developer: KAA');

### Sending

header('HTTP/1.0'. $response->getStatusCode(). '' . $response->getReasonPhrase());
foreach ($response->getHeaders() as $name => $value) {
    header($name . ':' . $value);
}

echo $response->getBody();