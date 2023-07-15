<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockItems extends Model
{
    use HasFactory;
    public $timestamps = false;
    // protected $fillable = ['produto', 'cor', 'tamanho', 'deposito', 'data_disponibilidade', 'quantidade'];
}