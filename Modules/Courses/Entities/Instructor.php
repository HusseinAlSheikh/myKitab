<?php

namespace Modules\Courses\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Courses\Database\factories\InstructorFactory::new();
    }

    function user(){
        return $this->belongsTo(User::class);
    }
}
