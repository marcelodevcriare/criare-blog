<?php

namespace Criarenet\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Criarenet\Blog\Facades\Voyager;

class Role extends Model
{
    protected $guarded = [];

    public function users()
    {
        $userModel = Voyager::modelClass('User');

        return $this->belongsToMany($userModel, 'user_roles')
                    ->select(app($userModel)->getTable().'.*')
                    ->union($this->hasMany($userModel))->getQuery();
    }

    public function permissions()
    {
        return $this->belongsToMany(Voyager::modelClass('Permission'));
    }
}
