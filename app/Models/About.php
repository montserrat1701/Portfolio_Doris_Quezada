<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'description', 'image'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
