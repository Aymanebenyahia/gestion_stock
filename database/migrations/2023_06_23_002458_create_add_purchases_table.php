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
        Schema::create('add_purchases', function (Blueprint $table) {
            $table->id();
            $table->string('product Name');
            $table->string('category');
            $table->string('N°Facture');
            $table->Integer('Price TTC');
            $table->Integer('Date Enter');
            $table->string('Fournisseur');
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
        Schema::dropIfExists('add_purchases');
    }
};
