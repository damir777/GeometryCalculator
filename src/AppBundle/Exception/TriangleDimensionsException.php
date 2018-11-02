<?php

namespace AppBundle\Exception;

use Exception;

class TriangleDimensionsException extends Exception
{
    protected $response;

    public function __construct()
    {
        $this->response = ['error' => 'Triangle with given dimensions not possible'];
    }

    public function getResponse()
    {
        return $this->response;
    }
}