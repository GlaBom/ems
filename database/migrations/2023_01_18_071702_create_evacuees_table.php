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
        Schema::create('evacuees', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('dob');
            $table->string('age');
            $table->string('gender');
            $table->string('address');
            $table->string('phone_number');

            $table->unsignedBigInteger('tenure_status_id');
            $table->foreign('tenure_status_id')->references('id')->on('tenure_status')->onDelete('cascade')->onUpdate(('cascade'));
            // $table->string('housing_condition_id')->nullable();
            // $table->string('health_condition_id')->nullable();
            // $table->string('calamity_id')->nullable();
            // $table->string('barangay_id')->nullable();
            // $table->string('e_center_id')->nullable();

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
        Schema::dropIfExists('evacuees');
    }
};
