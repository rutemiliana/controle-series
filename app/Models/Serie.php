<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Season;

class Serie extends Model
{
    use HasFactory;

    // especifica quais campos poderão participar da atribuição em massa
    protected $fillable = ['name'];


    public function temporadas()
    {
        //$serie->temporadas
        // 1 serie tem muitas temporadas(season)
        return $this->hasMany(Season::class, 'series_id', 'id');
                            // tabela , foreignkey (series_id da tabela season), localkey(id da tabela serie)
    }

}
