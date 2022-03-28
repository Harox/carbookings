<?php

use App\Models\bomba;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsaveBombasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsavel_bombas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email_bomba');
            $table->string('contacto')->unique();
            $table->string('contacto_alt')->nullable();
            $table->foreignIdFor(bomba::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('responsavel_bombas');
    }
}
