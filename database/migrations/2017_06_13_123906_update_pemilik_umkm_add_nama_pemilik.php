<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePemilikUmkmAddNamaPemilik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemilik_umkm', function(Blueprint $table) {
            $table->string('nama_pemilik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemilik_umkm', function(Blueprint $table) {
            $table->dropColumn('nama_pemilik');
        });
    }
}
