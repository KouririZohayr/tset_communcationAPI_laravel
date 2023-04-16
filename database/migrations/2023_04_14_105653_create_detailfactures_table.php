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
        Schema::create('detailfactures', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('id_fact');
            $table->foreign('id_fact')->references('id')->on('factures');
            $table->unsignedbiginteger('id_article');
            $table->foreign('id_article')->references('id')->on('articles');
            $table->unique(['id_fact','id_article']);
            $table->float('PU');
            $table->integer('quantite')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailfactures');
    }
};
