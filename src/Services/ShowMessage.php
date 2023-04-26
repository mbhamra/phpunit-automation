<?php

namespace App\Services;

class ShowMessage
{
    public function show($name)
    {
        return "Hello " . $name;
    }
}