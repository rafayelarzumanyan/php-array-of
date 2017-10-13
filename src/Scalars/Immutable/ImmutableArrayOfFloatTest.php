<?php

namespace ChrisHarrison\ArrayOf\Scalars\Immutable;

use PHPUnit\Framework\TestCase;

final class ImmutableArrayOfFloatTest extends TestCase
{
    public function testConstruct()
    {
        $test = new ImmutableArrayOfFloat([1.5]);
        $this->assertInstanceOf(ImmutableArrayOfFloat::class, $test);
        $this->assertInstanceOf(ImmutableArrayOf::class, $test);
    }
}
