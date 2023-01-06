<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    // especifica quais campos poderão participar da atribuição em massa
    protected $fillable = ['name'];

}
