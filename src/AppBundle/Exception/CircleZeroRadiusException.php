<?php

namespace AppBundle\Exception;

use Exception;

class CircleZeroRadiusException extends Exception
{
    protected $response;

    public function __construct()
    {
        $this->response = ['error' => 'Circle radius can not be zero'];
    }

    public function getResponse()
    {
        return $this->response;
    }
}