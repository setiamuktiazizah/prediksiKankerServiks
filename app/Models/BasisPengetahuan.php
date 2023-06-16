<?php

namespace App\Models;

use App\Models\Gejala;
use App\Models\Penyakit;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BasisPengetahuan extends Model
{
    protected $table = 'tabel_basis_pengetahuan';
    protected $primaryKey = 'id_basis_pengetahuan';

    public function gejala(): HasMany
    {
        return $this->hasMany(Gejala::class, 'kode_gejala');
    }

    public function penyakit(): HasMany
    {
        return $this->hasMany(Penyakit::class, 'kode_penyakit');
    }
}
