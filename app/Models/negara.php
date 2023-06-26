<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class negara extends Model
{
    use HasFactory;
    
    protected $table = 'negara';
    protected $fillable = [
        'nama'
    ];
    public $timestamps = false;

    public function pemain()
    {
        return $this->hasMany(pemain::class, 'id_negara','id');
    }
    public function club()
    {
        return $this->hasMany(club::class, 'id_club','id');
    }
}
