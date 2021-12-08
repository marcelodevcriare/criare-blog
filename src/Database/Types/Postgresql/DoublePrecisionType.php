<?php

namespace Criarenet\Blog\Database\Types\Postgresql;

use Criarenet\Blog\Database\Types\Common\DoubleType;

class DoublePrecisionType extends DoubleType
{
    public const NAME = 'double precision';
    public const DBTYPE = 'float8';
}
