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
            $table->integer('year');
            $table->Integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->double('row1');
            $table->double('row2');
            $table->double('row3');
            $table->double('row4');
            $table->double('row5');
            $table->double('row6');
            $table->double('row7');
            $table->double('row8');
            $table->double('row9');
            $table->double('row10');
            $table->double('row11');
            $table->double('row12');
            $table->double('row13');
            $table->double('row14');
            $table->double('row15');
            $table->double('row16');
            $table->double('row17');
            $table->double('row18');
            $table->double('row19');
            $table->double('row20');
            $table->double('row21');
            $table->double('row22');
            $table->double('row23');
            $table->double('row24');
            $table->double('row25');
            $table->double('row26');
            $table->double('row27');
            $table->double('row28');
            $table->double('row29');
            $table->double('row30');
            $table->double('row31');
            $table->double('row32');
            $table->double('row33');
            $table->double('row34');
            $table->double('row35');
            $table->double('row36');
            $table->double('row37');
            $table->double('row38');
            $table->double('row39');
            $table->double('row40');
            $table->double('row41');
            $table->double('row42');
            $table->double('row43');
            $table->double('row44');
            $table->double('row45');
            $table->double('row46');
            $table->double('row47');
            $table->double('row48');
            $table->double('row49');
            $table->double('row50');
            $table->double('row51');
            $table->double('row52');
            $table->double('row53');
            $table->double('row54');
            $table->double('row55');
            $table->double('row56');
            $table->double('row57');
            $table->double('row58');
            $table->double('row59');
            $table->double('row60');
            $table->double('row62');
            $table->double('row63');
            $table->double('row64');
            $table->double('row65');
            $table->double('row66');
            $table->double('row67');
            $table->double('row68');
            $table->double('row69');
            $table->double('row70');
            $table->double('row71');
            $table->double('row72');
            $table->double('row73');
            $table->double('row74');
            $table->double('row75');
            $table->double('row76');
            $table->double('row77');
            $table->double('row78');
            $table->double('row79');
            $table->double('row80');
            $table->double('row82');
            $table->double('row83');
            $table->double('row84');
            $table->double('row85');
            $table->double('row86');
            $table->double('row87');
            $table->double('row88');
            $table->double('row89');
            $table->double('row90');
            $table->double('row91');
            $table->double('row92');
            $table->double('row93');
            $table->double('row94');
            $table->double('row95');
            $table->double('row96');
            $table->double('row97');
            $table->double('row98');
            $table->double('row99');
            $table->double('row100');
            $table->double('row101');
            $table->double('row102');
            $table->double('row103');
            $table->double('row104');
            $table->double('row105');
            $table->double('row106');
            $table->double('row107');
            $table->double('row108');
            $table->double('row109');
            $table->double('row110');
            $table->double('row111');
            $table->double('row112');


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
