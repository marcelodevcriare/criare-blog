<?php

namespace Criarenet\Blog\Database\Types\Postgresql;

use Criarenet\Blog\Database\Types\Common\VarCharType;

class CharacterVaryingType extends VarCharType
{
    public const NAME = 'character varying';
    public const DBTYPE = 'varchar';
}
