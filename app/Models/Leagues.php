<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leagues extends Model
{
    use SoftDeletes;
    /**
     * @var []
     */
    protected $fillable = ['name', 'server_name', 'level', 'platform', 'server_no', 'uniqid'];

    protected $primaryKey = 'lid';
}
