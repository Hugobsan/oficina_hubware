<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tapete extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tapete';
    
    // protected $primaryKey = 'id';

    protected $fillable = ['estampa', 'limpo', 'novo', 'voador', 'magico', 'tamanho', 'quantidade', 'observacao'];

    // public $timestamps = true;
}
