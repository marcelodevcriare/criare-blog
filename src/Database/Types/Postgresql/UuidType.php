<?php

namespace Criarenet\Blog\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Criarenet\Blog\Database\Types\Type;

class UuidType extends Type
{
    public const NAME = 'uuid';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'uuid';
    }
}
