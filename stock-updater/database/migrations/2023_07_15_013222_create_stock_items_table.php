<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_items', function (Blueprint $table) {
            $table->unsignedInteger('id', '1')->nullable(false)->primary();
            $table->string('produto', '100')->nullable(false);
            $table->string('cor', '100')->nullable(false);
            $table->string('tamanho', '100')->nullable(false);
            $table->string('deposito', '100')->nullable(false);
            $table->date('data_disponibilidade')->nullable(false);
            $table->unsignedInteger('quantidade')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_items');
    }
}