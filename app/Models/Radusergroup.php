<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radusergroup extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';

    protected $primaryKey = null;

    public $incrementing = false;

    protected $table = 'radusergroup';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'groupname',
        'priority',
    ];
}