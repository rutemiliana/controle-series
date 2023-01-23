<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Season;

class Series extends Model
{
    use HasFactory;

    // especifica quais campos poderão participar da atribuição em massa
    protected $fillable = ['name'];
    //protected $with= ['temporadas'];


    public function season()
    {
        //$serie->temporadas
        // 1 serie tem muitas temporadas(season)
        return $this->hasMany(Season::class, 'series_id', 'id');
                            // tabela , foreignkey (series_id da tabela season), localkey(id da tabela serie)
    }

    //escopo glocal. Sempre que a model Serie é inicializada, ele é aplicado

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('name');
        });
    }
   

}
