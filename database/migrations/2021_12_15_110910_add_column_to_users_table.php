<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table ->string('image')->nullable();
            $table ->string('phone');
            $table ->string('address');
            $table->boolean('status')->default('0');

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
            $table ->dropColumn(['image']);
            $table ->dropColumn(['phone']);
            $table ->dropColumn(['address']);
            $table->dropColumn(['status']);

        });
    }
}
