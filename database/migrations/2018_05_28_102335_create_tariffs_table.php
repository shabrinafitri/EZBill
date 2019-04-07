<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTariffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tariff_codes');
            $table->string('power');
            $table->string('tariff_per_kwh');
            $table->timestamps();
        });

        DB::table('tariff')->insert(
            array(
                'id' => '1',
                'tariff_codes' => 'R-1/TR',
                'power' => '450',
                'tariff_per_kwh' => '172',
            )
        );

        DB::table('tariff')->insert(
            array(
                'id' => '2',
                'tariff_codes' => 'R-2/TR',
                'power' => '900',
                'tariff_per_kwh' => '310',
            )
        );

        DB::table('tariff')->insert(
            array(
                'id' => '3',
                'tariff_codes' => 'R-3/TR',
                'power' => '1.300',
                'tariff_per_kwh' => '395',
            )
        );

        DB::table('tariff')->insert(
            array(
                'id' => '4',
                'tariff_codes' => 'R-4/TR',
                'power' => '2.200',
                'tariff_per_kwh' => '400',
            )
        );

        DB::table('tariff')->insert(
            array(
                'id' => '5',
                'tariff_codes' => 'R-5/TR',
                'power' => '6.600',
                'tariff_per_kwh' => '575',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff');
    }
}
