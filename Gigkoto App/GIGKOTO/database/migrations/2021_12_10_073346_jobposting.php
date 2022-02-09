<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jobposting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobposting', function (Blueprint $table) {
            //job details------------------------------------
            $table->bigInteger('ID')->primary();
            // $table->string('JobTitle',200)->nullable();
            $table->string('AreaOfExpertise',200)->nullable();
            $table->string('JobCode',200)->nullable();
            $table->string('CompanyID',200)->nullable();
            $table->string('CompanyName',200)->nullable();
            $table->string('CompanyAbout',200)->nullable();
            $table->string('Description',255)->nullable();
            $table->string('ProposedSalary', 200)->nullable();
            $table->json('requirements', 255)->nullable();
            $table->json('milestone', 255)->nullable();
            //post job details-------------------------------
            $table->string('HiredGT',255)->nullable();
            $table->string('ApplicationStatus',255)->nullable();

            $table->string('ContractStatus',255)->nullable();
            $table->json('ContractLocation',255)->nullable();

            $table->string('GTSDownpaymentStatus',255)->nullable();
            $table->string('GTSDownpaymentReceipt',255)->nullable();

            $table->string('midPointCheck',255)->nullable();

            $table->string('GTSBalanceStatus',255)->nullable();
            $table->string('GTSBalanceReceipt',255)->nullable();

            $table->string('GTSEvaluation',255)->nullable();
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
        Schema::dropIfExists('jobposting');
    }
}
