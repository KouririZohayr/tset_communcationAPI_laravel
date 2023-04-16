<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('numero_fact',30);
            $table->dateTime('date_fact');
            $table->integer('TVA');
            $table->unsignedbiginteger('id_fournisseur');
            $table->foreign('id_fournisseur')->references('id')->on('fournisseurs');
            $table->string('classeur',10);
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
