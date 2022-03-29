<?php

use App\Models\combustivel;
use App\Models\marca;
use App\Models\modelo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaturas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('nr_motor')->nullable()->unique();
            $table->string('nr_chassi')->nullable()->unique();
            $table->string('nr_livrete')->nullable()->unique();
            $table->string('matricula')->nullable()->unique();
            $table->year('ano_fabrico');
            $table->date('data_inspencao')->nullable();
            $table->date('data_manifesto')->nullable();
            $table->date('data_radio_difusao')->nullable();
            $table->date('data_licenca')->nullable();
            $table->decimal('capacidade_tanque')->nullable();
            $table->decimal('consumo_por_km')->nullable();
            $table->string('kilometragem')->nullable();
            $table->foreignIdFor(marca::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(modelo::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(combustivel::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('viaturas');
    }
}
