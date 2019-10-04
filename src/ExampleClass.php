<?php

declare(strict_types=1);

namespace Loom\Blueprint;

use InvalidArgumentException;

class ExampleClass
{
    private $example;

    public function __construct(string $example = null)
    {
        $this->example = $example;
    }

    public function getExample(): string
    {
        return $this->example;
    }

    public function setExample(?string $example)
    {
        if ($example === '') {
            throw new InvalidArgumentException(
                'Invalid argument: $example must be a non-empty string or null'
            );
        }

        $this->example = $example;
    }
}
