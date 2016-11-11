<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leagues extends Model
{
    /**
     * @var []
     */
    protected $fillable = ['name', 'server_name', 'level', 'platform', 'server_no', 'uniqid'];
}
