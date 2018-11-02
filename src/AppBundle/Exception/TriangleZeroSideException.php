<?php

namespace AppBundle\Exception;

use Exception;

class TriangleZeroSideException extends Exception
{
    protected $response;

    public function __construct()
    {
        $this->response = ['error' => 'Triangle side can not be zero'];
    }

    public function getResponse()
    {
        return $this->response;
    }
}