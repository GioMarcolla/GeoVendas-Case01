<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class updateStockController extends Controller
{
    public function index()
    {
        return redirect('/');
    }

    public function updateStock(Request $request)
    {
        \DB::table('stock_items')->upsert(
            $request->all(),
            'id',
            ['produto', 'cor', 'tamanho', 'deposito', 'data_disponibilidade', 'quantidade']
        );

        return redirect('/');
    }
}