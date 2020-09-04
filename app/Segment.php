<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = ['name', 'description'];
}
