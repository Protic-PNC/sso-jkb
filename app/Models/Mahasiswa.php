<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\FlareClient\Concerns\HasContext;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ["id","nama","nim","id_kelas"];

    protected $table = "mahasiswa";
    /**
     * Get the user associated with the Mahasiswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'id', 'id_kelas');
    }

}
