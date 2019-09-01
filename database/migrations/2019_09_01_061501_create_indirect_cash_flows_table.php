<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndirectCashFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // All IDs below are exists in Qawaem excel document (Profit and loss by function)
        Schema::create('indirect_cash_flows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year');
            $table->Integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');
            // ID 4
            $table->double('profit_before_zakat')->nullable();
            // FORM ID 8 - 10
            $table->double('adjustment_for_consumption_and_amortization1')->nullable();
            $table->double('adjustment_for_consumption_and_amortization2')->nullable();
            $table->double('adjustment_for_consumption_and_amortization3')->nullable();
            // FROM ID 13 - 15
            $table->double('adjustment_for_losses1')->nullable();
            $table->double('adjustment_for_losses2')->nullable();
            $table->double('adjustment_for_losses3')->nullable();
            // FROM ID 18 - 20
            $table->double('adjustment_for_landing_losses1')->nullable();
            $table->double('adjustment_for_landing_losses2')->nullable();
            $table->double('adjustment_for_landing_losses3')->nullable();
            // FROM ID 23 - 30
            $table->double('other_adjustment1')->nullable();
            $table->double('other_adjustment2')->nullable();
            $table->double('other_adjustment3')->nullable();
            $table->double('other_adjustment4')->nullable();
            $table->double('other_adjustment5')->nullable();
            $table->double('other_adjustment6')->nullable();
            $table->double('other_adjustment7')->nullable();
            $table->double('other_adjustment8')->nullable();
            // FROM ID 35 - 39
            $table->double('working_capital_adjustment1')->nullable();
            $table->double('working_capital_adjustment2')->nullable();
            $table->double('working_capital_adjustment3')->nullable();
            $table->double('working_capital_adjustment4')->nullable();
            $table->double('working_capital_adjustment5')->nullable();
            // FROM ID 42 - 48
            $table->double('operational_activities1')->nullable();
            $table->double('operational_activities2')->nullable();
            $table->double('operational_activities3')->nullable();
            $table->double('operational_activities4')->nullable();
            $table->double('operational_activities5')->nullable();
            $table->double('operational_activities6')->nullable();
            $table->double('operational_activities7')->nullable();
            // FROM ID 51 - 73
            $table->double('investment_activities1')->nullable();
            $table->double('investment_activities2')->nullable();
            $table->double('investment_activities3')->nullable();
            $table->double('investment_activities4')->nullable();
            $table->double('investment_activities5')->nullable();
            $table->double('investment_activities6')->nullable();
            $table->double('investment_activities7')->nullable();
            $table->double('investment_activities8')->nullable();
            $table->double('investment_activities9')->nullable();
            $table->double('investment_activities10')->nullable();
            $table->double('investment_activities11')->nullable();
            $table->double('investment_activities12')->nullable();
            $table->double('investment_activities13')->nullable();
            $table->double('investment_activities14')->nullable();
            $table->double('investment_activities15')->nullable();
            $table->double('investment_activities16')->nullable();
            $table->double('investment_activities17')->nullable();
            $table->double('investment_activities18')->nullable();
            $table->double('investment_activities19')->nullable();
            $table->double('investment_activities20')->nullable();
            $table->double('investment_activities21')->nullable();
            $table->double('investment_activities22')->nullable();
            $table->double('investment_activities23')->nullable();
            // FROM ID 76 - 93
            $table->double('financing_activities1')->nullable();
            $table->double('financing_activities2')->nullable();
            $table->double('financing_activities3')->nullable();
            $table->double('financing_activities4')->nullable();
            $table->double('financing_activities5')->nullable();
            $table->double('financing_activities6')->nullable();
            $table->double('financing_activities7')->nullable();
            $table->double('financing_activities8')->nullable();
            $table->double('financing_activities9')->nullable();
            $table->double('financing_activities10')->nullable();
            $table->double('financing_activities11')->nullable();
            $table->double('financing_activities12')->nullable();
            $table->double('financing_activities13')->nullable();
            $table->double('financing_activities14')->nullable();
            $table->double('financing_activities15')->nullable();
            $table->double('financing_activities16')->nullable();
            $table->double('financing_activities17')->nullable();
            $table->double('financing_activities18')->nullable();
            // ID 96
            $table->double('effect_of_foreign_exchange')->nullable();
            // ID 98
            $table->double('beginning_cash_equivalents')->nullable();

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
        Schema::dropIfExists('indirect_cash_flows');
    }
}
