<?php

namespace Criarenet\Blog\Database\Types\Mysql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Criarenet\Blog\Database\Types\Type;

class YearType extends Type
{
    public const NAME = 'year';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'year';
    }
}
