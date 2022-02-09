<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gigtalentseeker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gigtalentseeker', function (Blueprint $table) {
            $table->bigInteger('ID')->primary();
            $table->string('Username',200)->nullable();
            $table->string('Password',255);
            $table->string('CompanyName', 200)->nullable();
            $table->string('CompanyAddress', 200)->nullable();
            $table->string('OfficeNumber', 200)->nullable();
            $table->string('Industry', 200)->nullable();
            $table->string('EmailAddress', 200)->nullable();
            $table->string('BillingDetails', 200)->nullable();
            $table->string('CompanyRepName', 200)->nullable();
            $table->string('CompanyRepPhoneNumber', 200)->nullable();
            $table->string('CompanyRepEmailAddress', 200)->nullable();
            $table->string('s1', 200)->nullable();
            $table->string('s2', 200)->nullable();
            $table->string('s3', 200)->nullable();
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
