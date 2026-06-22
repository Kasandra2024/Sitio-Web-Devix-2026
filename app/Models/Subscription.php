<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    // Esto permite que el controlador "llene" estos campos automáticamente
    protected $fillable = ['user_id', 'plan', 'monto', 'estado'];
}
