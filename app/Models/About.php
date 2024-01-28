<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'name', 'description', 'image'];

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}
