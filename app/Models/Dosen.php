<?php

namespace App\Models;

use App\Models\Prodi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dosen extends Model
{
    use HasFactory;
    protected $fillable = ["id","nama","nidn","id_prodi"];

    protected $table = "dosen";
    /**
     * Get the user associated with the Dosen
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function prodi()
    {
        return $this->hasOne(Prodi::class, 'id', 'id_prodi');
    }
}
