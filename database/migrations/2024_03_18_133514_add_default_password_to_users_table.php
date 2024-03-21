<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultPasswordToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('password')->default('')->change();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Anda bisa mengembalikan perubahan skema yang dilakukan di metode up() di sini, jika perlu
        });
    }
}

;
