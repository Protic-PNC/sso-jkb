<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasARole extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $fillable = ["id_role","id_dosen"];
    public function dosen()
    {
        return $this->hasMany(Dosen::class, 'id', 'id_dosen');
    }
    public function role()
    {
        return $this->hasMany(Role::class, 'id', 'id_role');
    }
}
