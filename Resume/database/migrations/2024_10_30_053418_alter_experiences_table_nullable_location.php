<?php
// database/migrations/xxxx_xx_xx_alter_experiences_table_nullable_location.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterExperiencesTableNullableLocation extends Migration
{
    public function up()
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->string('location')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->string('location')->nullable(false)->change();
        });
    }
}

