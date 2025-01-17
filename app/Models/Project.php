<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\userProjects;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
    ];

    public function usersProjects()
    {
        return $this->hasMany(userProjects::class);
    }

}