<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('repair_requests', function (Blueprint $table) {
            $table->id();
            $table->string('user_type');
            $table->string('full_name')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('device_type');
            $table->text('issue_description');
            $table->string('service_type');
            $table->string('pickup_address')->nullable(); // Pickup location
            $table->string('office_location')->nullable(); // Drop-off office
            $table->date('preferred_date');
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('repair_requests');
    }
}
