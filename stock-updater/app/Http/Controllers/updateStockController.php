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
        // decode package into array
        $full_package = json_decode(json_encode($request->all()), true);

        // Limit upserting to much data and breaking the data pipeline
        $pakcage_size = 5000;

        // split full_package into smaller chunks
        for ($ii = 0; $ii < count($full_package); $ii += $pakcage_size) {
            $chunk = array_slice($full_package, $ii, $pakcage_size);

            // \Log::info($chunk);
            \DB::table('stock_items')->upsert(
                $chunk,
                'id',
                ['produto', 'cor', 'tamanho', 'deposito', 'data_disponibilidade', 'quantidade']
            );
        }


        return redirect('/');
    }
}