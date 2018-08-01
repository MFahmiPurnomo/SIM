<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAnggotaDataToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->after('name');
            $table->string('jabatan')->after('name');
            $table->string('status')->after('name');
            $table->string('inisial')->after('name');
            $table->string('NIP')->after('name');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('votes');
            $table->dropColumn('username');
            $table->dropColumn('jabatan');
            $table->dropColumn('status');
            $table->dropColumn('inisial');
            $table->dropColumn('NIP');
        });
    }
}
