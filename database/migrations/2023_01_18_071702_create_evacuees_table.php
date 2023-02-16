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
            $table->string('tenure_status');
            $table->string('housing_condition');
            $table->string('health_condition');
            $table->string('remark')->nullable();
            $table->string('calamity')->nullable();
            $table->string('barangay');
            $table->string('e_center');
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
