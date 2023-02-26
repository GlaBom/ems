<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {

        Schema::create('tenure_status', function (Blueprint $table) {
            $table->id();
            $table->string('status_name');
            $table->timestamps();
        });

        Schema::create('housing_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('housing_condition_name');
            $table->timestamps();
        });

        Schema::create('health_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('health_condition_name');
            $table->timestamps();
        });


        Schema::create('evacuees', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('dob');
            $table->string('age');
            $table->string('gender');
            $table->string('tenure_status');
            $table->string('housing_condition');
            $table->string('health_condition');

            $table->unsignedBigInteger('barangay_id');
            $table->foreign('barangay_id')
                    ->references('id')
                    ->on('barangays')
                    ->onUpdate('cascade');

            $table->unsignedBigInteger('ecenter_id');
            $table->foreign('ecenter_id')
                    ->references('id')
                    ->on('ecenters')
                    ->onUpdate('cascade');

            $table->timestamps();
        });

        Schema::create('emergencies', function (Blueprint $table) {
            $table->id();
            $table->string('emergency_group');
            $table->string('main_type');
            $table->string('sub_type')->nullable();
            $table->string('name')->nullable();
            $table->string('date_occured');
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
        Schema::dropIfExists('tenure_status');
        Schema::dropIfExists('housing_conditions');
        Schema::dropIfExists('health_conditions');
        Schema::dropIfExists('barangays');
        Schema::dropIfExists('ecenters');
        Schema::dropIfExists('emergencies');

    }
};
