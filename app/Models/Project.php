<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'challenge',
        'solution',
        'outcome',
        'team',
        'role',
        'duration',
        'description'
    ];

    // One project has many media files
    public function media()
    {
        return $this->hasMany(Media::class, 'project_id');
    }
}
