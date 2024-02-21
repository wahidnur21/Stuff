<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $primaryKey = 'id';
    
    protected $KeyType = 'string';

    protected $fillable = [
        'name',
        'address',
        'status',
        'gender',
    ];
}
