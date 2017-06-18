<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePemilikUmkmAddDesaId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemilik_umkm', function(Blueprint $table) {
            $table->addColumn('integer', 'desa_id');
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
            $table->dropColumn('desa_id');
        });
    }
}
