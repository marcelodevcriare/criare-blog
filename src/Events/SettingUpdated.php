<?php

namespace Criarenet\Blog\Events;

use Illuminate\Queue\SerializesModels;
use Criarenet\Blog\Models\Setting;

class SettingUpdated
{
    use SerializesModels;

    public $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }
}
