<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa', function(Blueprint $table) {
            $table->increments('id');
            $table->string('kode_login')->unique();
            $table->string('password')->nullable();
            $table->string('nama_desa')->nullable();
            $table->string('nama_kepala_desa')->nullable();
            $table->string('logo_desa')->nullable();
            $table->float("latitude", 20, 10)->default(0);
            $table->float("longitude", 20, 10)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desa');
    }
}
