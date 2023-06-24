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
        Schema::create('new_fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->string('Fournisseur Name');
            $table->String('Adresse');
            $table->Integer('Telephone');
            $table->string('E-mail');
            $table->string('Date Vente');
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
        Schema::dropIfExists('new_fournisseurs');
    }
};
