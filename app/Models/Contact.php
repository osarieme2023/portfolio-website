<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'message'
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
    ];
}
