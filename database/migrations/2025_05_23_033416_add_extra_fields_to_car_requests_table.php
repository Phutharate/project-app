<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('car_requests', function (Blueprint $table) {
        $table->integer('seats')->nullable();
        $table->string('car_registration')->nullable();
        $table->string('driver')->nullable();
    });
}

public function down()
{
    Schema::table('car_requests', function (Blueprint $table) {
        $table->dropColumn(['seats', 'car_registration', 'driver']);
    });
}

};
