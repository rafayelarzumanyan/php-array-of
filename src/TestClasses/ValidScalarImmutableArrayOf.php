<?php

namespace ChrisHarrison\ArrayOf\TestClasses;

use ChrisHarrison\ArrayOf\ImmutableArrayOf;

final class ValidScalarImmutableArrayOf extends ImmutableArrayOf
{
    protected function typeToEnforce() : string
    {
        return 'string';
    }
}
