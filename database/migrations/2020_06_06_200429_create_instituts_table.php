<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituts', function (Blueprint $table) {
            $table->id();
            $table->string('responsable',50);
            $table->string('libelle',50);
            $table->string('phone',15);
            $table->string('fixe',15 );
            $table->string('mail',30);
            $table->text('adresse');
            $table->text('description');
            $table->string('facebook',255);
            $table->string('linkedin',255)->nullable();
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
        Schema::dropIfExists('instituts');
    }
}
