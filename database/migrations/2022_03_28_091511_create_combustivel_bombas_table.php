<?php

use App\Models\bomba;
use App\Models\combustivel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombustivelBombasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combustivel_bombas', function (Blueprint $table) {
            $table->id();
            $table->double('preco_currente');
            $table->double('desconto_perc')->nullable();
            $table->double('desconto_mon')->nullable();
            $table->double('preco_pos_desconto')->nullable();
            $table->foreignIdFor(bomba::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(combustivel::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('combustivel_bombas');
    }
}
