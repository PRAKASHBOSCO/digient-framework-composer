<?php

namespace Digient\Framework;

class Request
{
    protected $server   = [];

    public $input       = [];

    public function __construct()
    {
        $this->server   = $_SERVER;

        $this->input    =  $_POST + $_GET;
    }
}

?>