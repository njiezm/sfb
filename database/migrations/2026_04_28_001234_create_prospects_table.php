<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Les champs 'email' et 'phone' seront chiffrés automatiquement par le Modèle
            $table->string('email');
            $table->string('phone');
            $table->string('boat_type')->nullable();
            $table->string('boat_length')->nullable();
            // On stocke les services cochés en format JSON
            $table->json('services')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prospects');
    }
};
