<?php

declare(strict_types=1);

namespace Papyrus\RamseyUuidIdentityGenerator\Test;

use Papyrus\RamseyUuidIdentityGenerator\RamseyUuidIdentityGenerator;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
class RamseyUuidIdentityGeneratorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldGenerateUuids(): void
    {
        $generator = new RamseyUuidIdentityGenerator();

        self::assertMatchesRegularExpression(
            '|^[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}$|',
            $generator->generateId(),
        );
    }
}
