<?php

namespace Tzsk\Sms\Tests\Drivers;

use Tzsk\Sms\Tests\TestCase;
use Tzsk\Sms\Tests\Mocks\Drivers\MockMelipayamak;

class MelipayamakTest extends TestCase
{
    use DriverCommon;

    protected function getDriver()
    {
        return new MockMelipayamak();
    }
}
