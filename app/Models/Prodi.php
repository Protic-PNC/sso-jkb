<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $fillable = ["id","nama","kaprodi","id_jenjang"];
    protected $table = "prodi";
    /**
     * Get the user associated with the Prodi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jenjang()
    {
        return $this->hasOne(Jenjang::class, 'id', 'id_jenjang');
    }
}
