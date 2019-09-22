<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_center', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->integer('year');
            //from 3 - 22
            $table->double('current_assets1')->nullable();
            $table->double('current_assets2')->nullable();
            $table->double('current_assets3')->nullable();
            $table->double('current_assets4')->nullable();
            $table->double('current_assets5')->nullable();
            $table->double('current_assets6')->nullable();
            $table->double('current_assets7')->nullable();
            $table->double('current_assets8')->nullable();
            $table->double('current_assets9')->nullable();
            $table->double('current_assets10')->nullable();
            $table->double('current_assets11')->nullable();
            $table->double('current_assets12')->nullable();
            $table->double('current_assets13')->nullable();
            $table->double('current_assets14')->nullable();
            $table->double('current_assets15')->nullable();
            $table->double('current_assets16')->nullable();
            $table->double('current_assets17')->nullable();
            $table->double('current_assets18')->nullable();
            $table->double('current_assets19')->nullable();
            $table->double('current_assets20')->nullable();
            // line 24-25
            $table->double('current_tax_assets1')->nullable();
            $table->double('current_tax_assets2')->nullable();
            // line 28
            $table->double('disposal_groups')->nullable();
            // line 31 to 54
            $table->double('non_current_assets1')->nullable();
            $table->double('non_current_assets2')->nullable();
            $table->double('non_current_assets3')->nullable();
            $table->double('non_current_assets4')->nullable();
            $table->double('non_current_assets5')->nullable();
            $table->double('non_current_assets6')->nullable();
            $table->double('non_current_assets7')->nullable();
            $table->double('non_current_assets8')->nullable();
            $table->double('non_current_assets9')->nullable();
            $table->double('non_current_assets10')->nullable();
            $table->double('non_current_assets11')->nullable();
            $table->double('non_current_assets12')->nullable();
            $table->double('non_current_assets13')->nullable();
            $table->double('non_current_assets14')->nullable();
            $table->double('non_current_assets15')->nullable();
            $table->double('non_current_assets16')->nullable();
            $table->double('non_current_assets17')->nullable();
            $table->double('non_current_assets18')->nullable();
            $table->double('non_current_assets19')->nullable();
            $table->double('non_current_assets20')->nullable();
            $table->double('non_current_assets21')->nullable();
            $table->double('non_current_assets22')->nullable();
            $table->double('non_current_assets23')->nullable();
            $table->double('non_current_assets24')->nullable();
             // from 60 to 61
            $table->double('currentـliabilities1')->nullable();
            $table->double('currentـliabilities2')->nullable();
            //from line 62 to 82 
            $table->double('currentـliabilities_special47')->nullable(); 
            $table->double('liabilities1')->nullable();
            $table->double('liabilities2')->nullable();
            $table->double('liabilities3')->nullable();
            $table->double('liabilities4')->nullable();
            $table->double('liabilities5')->nullable();
            $table->double('liabilities6')->nullable();
            $table->double('liabilities7')->nullable();
            $table->double('liabilities8')->nullable();
            $table->double('liabilities9')->nullable();
            $table->double('liabilities10')->nullable();
            $table->double('liabilities11')->nullable();
            $table->double('liabilities12')->nullable();
            $table->double('liabilities13')->nullable();
            $table->double('liabilities14')->nullable();
            $table->double('liabilities15')->nullable();
            $table->double('liabilities16')->nullable();
            $table->double('liabilities17')->nullable();
            $table->double('liabilities18')->nullable();
            $table->double('liabilities19')->nullable();
            // $table->double('liabilities20')->nullable();
            // from line 84 - 85
            $table->double('current_tax_liabilities1')->nullable();
            $table->double('current_tax_liabilities2')->nullable();
            // line 88 
            $table->double('liabilities_directly')->nullable(); 
             // from line 91 - 92
            $table->double('non_current_liabilities1')->nullable();
            $table->double('non_current_liabilities2')->nullable();
            // from line 94 - 107
            $table->double('total_non_current_liabilities1')->nullable(); 
            $table->double('total_non_current_liabilities2')->nullable();
            $table->double('total_non_current_liabilities3')->nullable();
            $table->double('total_non_current_liabilities4')->nullable();
            $table->double('total_non_current_liabilities5')->nullable();
            $table->double('total_non_current_liabilities6')->nullable();
            $table->double('total_non_current_liabilities7')->nullable();
            $table->double('total_non_current_liabilities8')->nullable();
            $table->double('total_non_current_liabilities9')->nullable();
            $table->double('total_non_current_liabilities10')->nullable();
            $table->double('total_non_current_liabilities11')->nullable();
            $table->double('total_non_current_liabilities12')->nullable();
            $table->double('total_non_current_liabilities13')->nullable();
            $table->double('total_non_current_liabilities14')->nullable();
            // from line 111 - 118
            $table->double('property_rights1')->nullable();
            $table->double('property_rights2')->nullable();
            $table->double('property_rights3')->nullable();
            $table->double('property_rights4')->nullable();
            $table->double('property_rights5')->nullable();
            $table->double('property_rights6')->nullable();
            $table->double('property_rights7')->nullable();
            $table->double('property_rights8')->nullable();
            // from line 120 - 127
            $table->double('other_reserves1')->nullable();
            $table->double('other_reserves2')->nullable();
            $table->double('other_reserves3')->nullable();
            $table->double('other_reserves4')->nullable();
            $table->double('other_reserves5')->nullable();
            $table->double('other_reserves6')->nullable();
            $table->double('other_reserves7')->nullable();
            $table->double('other_reserves8')->nullable();             
            
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
        Schema::dropIfExists('financial_center');
    }
}
