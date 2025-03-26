<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('chef_projets', function (Blueprint $table) {
        $table->foreign('id_admins')->references('id')->on('admins')->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('chef_projets', function (Blueprint $table) {
        $table->dropForeign(['id_admins']);
        $table->dropColumn('id_admins');
    });
}
};
