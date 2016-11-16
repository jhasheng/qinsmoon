<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auctions extends Model
{
    use SoftDeletes;
    
    protected $primaryKey = 'aid';

    protected $fillable = ['name', 'min_point', 'max_point', 'step_point', 'start_at', 'end_at', 'status', 'lid'];
}
