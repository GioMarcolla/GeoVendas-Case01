<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockItems extends Model
{   
    use HasFactory;
    public $timestamps = false; // remove mandatory timestamp

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = ['produto', 'cor', 'tamanho', 'deposito', 'data_disponibilidade', 'quantidade']; // enabled for mass update "new StockItem($request)"
}