<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'text', 'description', 'image'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
