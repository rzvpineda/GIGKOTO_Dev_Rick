<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gigtalent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gigtalent', function (Blueprint $table) {
            $table->bigInteger('ID')->primary();
            $table->string('Username',200)->nullable();
            $table->string('Password',255);
            $table->string('FirstName', 200)->nullable();
            $table->string('LastName', 200)->nullable();
            $table->string('Age', 200)->nullable();
            $table->string('Gender', 200)->nullable();
            $table->string('CompleteAddress', 200)->nullable();
            $table->string('PhoneNumber', 200)->nullable();
            $table->string('EmailAddress', 200)->nullable();
            $table->string('AreaOfExpertise', 200)->nullable();
            $table->json('WorkExperience', 200)->nullable();
            $table->json('SampleProject', 200)->nullable();
            $table->string('IntroVideo', 255)->nullable();
            $table->json('EducationalBackground', 200)->nullable();
            $table->json('ShortCourses', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gigtalent');
    }
}
