<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfitsAndLossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // All IDs below are exists in Qawaem excel document (Profit and loss by function)
        Schema::create('profits_and_losses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year');
            $table->Integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');
            // From ID 3 - 8
            $table->double('revenues1')->nullable();
            $table->double('revenues2')->nullable();
            $table->double('revenues3')->nullable();
            $table->double('revenues4')->nullable();
            $table->double('revenues5')->nullable();
            $table->double('revenues6')->nullable();
            // ID 10
            $table->double('cost_of_sales')->nullable();
            // ID 12
            $table->double('other_income')->nullable();
            // From ID 15 - 17            
            $table->double('operating_expenses1')->nullable();
            $table->double('operating_expenses2')->nullable();            
            $table->double('operating_expenses3')->nullable();
            // From ID 20 - 37
            $table->double('cost_of_financing')->nullable();
            $table->double('company_share1')->nullable();
            $table->double('company_share2')->nullable();
            $table->double('company_share3')->nullable();
            $table->double('research_development_expenses')->nullable();
            $table->double('revenues7')->nullable();
            $table->double('landing_losses1')->nullable();
            $table->double('landing_losses2')->nullable();
            $table->double('restructing_expenses')->nullable();
            $table->double('recovering_restructing')->nullable();
            $table->double('net_profit1')->nullable();
            $table->double('net_profit2')->nullable();
            $table->double('net_profit3')->nullable();
            $table->double('net_profit4')->nullable();
            $table->double('net_profit5')->nullable();
            $table->double('net_profit6')->nullable();
            $table->double('net_profit7')->nullable();
            $table->double('net_profit8')->nullable();
            // From ID 39 - 40
            $table->double('zakat_expenses')->nullable();
            $table->double('income_tax_expenses')->nullable();
            // From ID 43 - 45
            $table->double('discontinued_operating1')->nullable();
            $table->double('discontinued_operating2')->nullable();
            $table->double('discontinued_operating3')->nullable();
            // From ID 50 - 51
            $table->double('basic_profit_pershare1')->nullable();
            $table->double('basic_profit_pershare2')->nullable();
            // From ID 54 - 55
            $table->double('reduced_profit_pershare1')->nullable();
            $table->double('reduced_profit_pershare2')->nullable();
            // From ID 58 - 59
            $table->double('number_of_share1')->nullable();
            $table->double('number_of_share2')->nullable();

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
        Schema::dropIfExists('profits_and_losses');
    }
}
