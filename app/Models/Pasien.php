<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = "pasien";

    /**
     * Get the screaning associated with the Pasien
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function screaning()
    {
        return $this->hasOne(Screaning::class, 'id_pasien', 'id');
    }
}
