<?php

namespace Scalar;

class StringHandler
{
    public function matches($pattern)
    {
        return preg_match($pattern, $this) === 1;
    }
}

