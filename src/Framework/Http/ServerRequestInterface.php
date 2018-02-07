<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 07.02.18
 * Time: 11:50
 */
namespace Framework\Http;

interface ServerRequestInterface
{
    public function getQueryparams(): array ;

    public function withQueryParams(array $query);

    public function getParsedBody();

    public function withParsedBody($data);
}