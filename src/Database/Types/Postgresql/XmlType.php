<?php

namespace Criarenet\Blog\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Criarenet\Blog\Database\Types\Type;

class XmlType extends Type
{
    public const NAME = 'xml';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'xml';
    }
}
