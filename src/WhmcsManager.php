<?php

declare(strict_types=1);

namespace DarthSoup\Whmcs;

class WhmcsManager
{
    public function make(string $method)
    {

        throw new \InvalidArgumentException("Unsupported authentication method [$method].");
    }
}
