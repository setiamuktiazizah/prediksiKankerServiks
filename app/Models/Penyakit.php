<?php

namespace App\Models;

use App\Models\BasisPengetahuan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penyakit extends Model
{
    protected $table = 'tabel_data_penyakit';
    protected $primaryKey = 'id_penyakit';

    public function rule(): HasMany
    {
        return $this->hasMany(BasisPengetahuan::class, 'kode_penyakit');
    }
}
