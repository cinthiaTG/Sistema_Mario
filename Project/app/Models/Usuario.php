<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['nombre','email','password'];
    protected $hidden = ['password'];

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    } 

    use HasFactory;
}
