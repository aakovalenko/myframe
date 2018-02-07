<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 07.02.18
 * Time: 10:39
 */

namespace Framework\Http;


class RequestFactory
{
    public static function fromGlobals(array $query = null, array $body = null): Request
    {
        return (new Request())
            ->withQueryParams($query ?: $_GET)
            ->withParsedBody($body ?: $_POST);
    }
}