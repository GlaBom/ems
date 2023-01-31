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
        Schema::create('ecenters', function (Blueprint $table) {
            $table->id();
            $table->string('ec_name');
            $table->string('barangay');
            $table->string('manager');
            $table->string('date_of_activation')->nullable();
            $table->string('date_of_deactivation')->nullable();

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
        Schema::dropIfExists('ecenters');
    }
};
