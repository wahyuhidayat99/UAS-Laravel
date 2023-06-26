<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemain extends Model
{
    use HasFactory;
    protected $table = 'pemains';
    protected $fillable = [
        'nama',
        'no_punggung',
        'id_club',
        'id_negara'
    ];

    public $timestamps = false;

    public function sepatu()
    {
        return $this->belongsToMany(sepatu::class, 'sepatupemain' ,'id_pemain', 'id_sepatu');
    }

    public function club()
    {
        return $this->belongsTo(club::class,'id_club','id');
    }

    public function negara()
    {
        return $this->belongsTo(negara::class,'id_negara','id');
    }
}
