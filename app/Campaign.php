<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = ['name', 'description', 'is_active'];
}
