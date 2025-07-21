<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';
    public $timestamps = false;

    protected $fillable = [
        'project_id',
        'file_path',
        'media_type'
    ];

    // Each media file belongs to one project
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
