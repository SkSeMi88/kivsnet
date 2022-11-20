<?php

namespace App\Test;


class Test

{

    protected array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function foo(): string
    {
        return "bar";
    }
}
