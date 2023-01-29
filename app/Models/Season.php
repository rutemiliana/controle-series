<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\App\Serie;

class Season extends Model
{
    use HasFactory;
    protected $fillable = ['number'];

    public function series()
    {
        //1 temporada(season) pertence a uma serie
        return $this->belongsTo(Serie::class);
    }

    public function episodes()
    {
         //1 temporada(season) tem muitos episodeos
        return $this->hasMany(Episode::class);
    }
}
