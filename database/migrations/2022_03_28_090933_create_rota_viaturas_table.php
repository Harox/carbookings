<?php

use App\Models\rota;
use App\Models\viatura;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRotaViaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rota_viaturas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(rota::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(viatura::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('createdBy');
            $table->foreign('createdBy')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('updatedBy');
            $table->foreign('updatedBy')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('rota_viaturas');
    }
}
