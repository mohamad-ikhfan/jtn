<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radgroupreply extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';

    protected $table = 'radgroupreply';

    public $timestamps = false;

    protected $fillable = [
        'groupname',
        'attribute',
        'op',
        'value',
    ];
}