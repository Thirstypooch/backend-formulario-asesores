<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormSubmissionsTable extends Migration
{
    public function up()
    {
        Schema::create('form_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('device_type');
            $table->string('device_model');
            $table->string('operating_system');
            $table->string('app_version');
            $table->dateTime('incident_date');
            $table->text('problem_description');
            $table->text('reproduccion_steps');
            $table->text('expected_behavior');
            $table->text('actual_behavior');
            $table->string('severity_level');
            $table->string('has_previously_occurred');
            $table->text('additional_comments')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('form_submissions');
    }
}
