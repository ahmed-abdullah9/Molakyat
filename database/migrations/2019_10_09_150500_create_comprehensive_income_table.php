<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprehensiveIncomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprehensive_income', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            
            $table->dateTime('year');
            $table->boolean('type');

            // FROM ID 4- 8
            $table->double('comprehensive_income1')->nullable();
            $table->double('comprehensive_income2')->nullable();
            $table->double('comprehensive_income3')->nullable();
            $table->double('comprehensive_income4')->nullable();
            $table->double('comprehensive_income5')->nullable();
            
            // FORM ID 12 - 13
            $table->double('translation_differences1')->nullable();
            $table->double('translation_differences2')->nullable();

            // FORM ID 16 - 18
            $table->double('financial_assets_available1')->nullable();
            $table->double('financial_assets_available2')->nullable();
            $table->double('financial_assets_available3')->nullable();

            
            // FORM ID 21 - 22
            $table->double('Cash_flow_risk1')->nullable();
            $table->double('Cash_flow_risk2')->nullable();
           
            // FORM ID 25 - 26
            $table->double('cover_the_risk1')->nullable();
            $table->double('cover_the_risk2')->nullable();

            // FORM ID 28 - 29
            $table->double('Share_of_other_comprehensive')->nullable();
            $table->double('other_comprehensive_income')->nullable();
            
            
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
        Schema::dropIfExists('comprehensive_income');
    }
}
