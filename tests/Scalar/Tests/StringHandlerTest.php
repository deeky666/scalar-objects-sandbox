<?php

namespace Scalar\Tests;

class StringHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testMatches()
    {
        $string = 'Foo Bar';
        
        $this->assertTrue($string->matches('/^Foo\sBar$/'));
        $this->assertTrue($string->matches('/^foo\sbar$/i'));
        $this->assertFalse($string->matches('/^foo\sbar$/'));

        $string->matches('Foo Bar');
    }
}

