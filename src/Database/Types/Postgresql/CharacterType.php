<?php

namespace Criarenet\Blog\Database\Types\Postgresql;

use Criarenet\Blog\Database\Types\Common\CharType;

class CharacterType extends CharType
{
    public const NAME = 'character';
    public const DBTYPE = 'bpchar';
}
