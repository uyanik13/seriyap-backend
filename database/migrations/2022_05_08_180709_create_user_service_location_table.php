<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserServiceLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_service_location', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('city_id');
            $table->foreignId('district_id')->nullable();
            $table->timestamps();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('city_id')
            ->references('id')
            ->on('cities')
            ->onDelete('cascade');
            $table->foreign('district_id')
            ->references('id')
            ->on('districts')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_service_location');
    }
}
