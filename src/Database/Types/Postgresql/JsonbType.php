<?php

namespace Criarenet\Blog\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Criarenet\Blog\Database\Types\Type;

class JsonbType extends Type
{
    public const NAME = 'jsonb';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'jsonb';
    }
}
