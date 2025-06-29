<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('meta')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}