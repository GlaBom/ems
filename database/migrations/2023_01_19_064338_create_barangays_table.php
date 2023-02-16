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
        Schema::create('barangays', function (Blueprint $table) {
            $table->id();
            $table->string('barangay_name');
            $table->string('barangay_chairman')->nullable();
            $table->string('contact_number')->nullable();
            $table->timestamps();
        });

        Schema::create('ecenters', function (Blueprint $table) {
            $table->id();
            $table->string('ec_name');
            $table->string('manager');
            $table->string('capacity')->nullable();
            $table->string('occupancy')->nullable();

            $table->unsignedBigInteger('barangay_id');
            $table->foreign('barangay_id')->references('id')->on('barangays')->onDelete('cascade')->onUpdate(('cascade'));
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
        Schema::dropIfExists('barangays');
        Schema::dropIfExists('ecenters');
    }
};
