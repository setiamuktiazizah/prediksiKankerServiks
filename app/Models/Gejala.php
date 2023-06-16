<?php

namespace App\Models;

use App\Models\BasisPengetahuan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gejala extends Model
{
    protected $table = 'tabel_data_gejala';
    protected $primaryKey = 'id_gejala';

    public function rule(): HasMany
    {
        return $this->hasMany(BasisPengetahuan::class, 'kode_gejala');
    }
}
