<?php

declare(strict_types=1);

namespace Papyrus\RamseyUuidIdentityGenerator;

use Papyrus\IdentityGenerator\IdentityGenerator;
use Ramsey\Uuid\Uuid;

final class RamseyUuidIdentityGenerator implements IdentityGenerator
{
    public function generateId(): string
    {
        return (string) Uuid::uuid4();
    }
}
