<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sepatu extends Model
{
    use HasFactory;
    protected $table = 'sepatu';
    protected $fillable = [
        'sepatu',
        'ukuran'

    ];

    public $timestamps = false;

    public function pemain()
    {
        return $this->belongsToMany(pemain::class, 'sepatupemain' , 'id_sepatu' ,'id_pemain');
    }
}
