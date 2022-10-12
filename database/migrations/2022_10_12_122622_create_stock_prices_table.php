<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_prices', function (Blueprint $table) {
            $table->id();
            $table->string('symbol');
            $table->decimal('open', 9, 4);
            $table->decimal('high', 9, 4);
            $table->decimal('low', 9, 4);
            $table->decimal('price', 9, 4);
            $table->unsignedInteger('volume');
            $table->date('latest_trading_day');
            $table->decimal('previous_close', 9, 4);
            $table->decimal('change', 9, 4);
            $table->string('change_percent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_prices');
    }
};
