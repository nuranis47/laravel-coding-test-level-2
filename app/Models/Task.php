<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
        'project_id',
        'user_id'
    ];

    protected $primaryKey = 'id';
}
