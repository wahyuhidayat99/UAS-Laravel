<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    use HasFactory;

    protected $table = 'club';
    protected $fillable = [
        'nama',
        'id_negara'
    ];

    public $timestamps = false;

    public function pemain()
    {
        return $this->hasMany(pemain::class,'id_club','id');
    }

    public function negara()
    {
        return $this->belongsTo(negara::class,'id_negara','id');
    }
}
