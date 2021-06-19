<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = []; //desproteje los campos fillables para reducir codigo
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
