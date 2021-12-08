<?php

namespace Criarenet\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Criarenet\Blog\Events\SettingUpdated;

class Setting extends Model
{
    protected $table = 'settings';

    protected $guarded = [];

    public $timestamps = false;

    protected $dispatchesEvents = [
        'updating' => SettingUpdated::class,
    ];
}
