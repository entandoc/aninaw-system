<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->integer('id', $autoIncrement = true);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('barangay');
            $table->string('address');
            $table->string('ladmark');
            $table->integer('phone_number');
            $table->string('department');
            $table->string('subject');
            $table->string('description');
            $table->string('image');
            $table->integer('is_anonymous');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
};
