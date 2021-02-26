<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PopulateInitialTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $file=fopen('database/seeders/remove_after_deployed/initialtests.csv','r');
        fgetcsv($file);
        while (($array = fgetcsv($file)) !== FALSE) {
            // print_r($array[0]);
            // print_r($array[1]);
            DB::table('initial_tests')->insert([
                'Country' => $array[0],
                'State' => $array[1],
            ]);
    }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //  DB::table('initial_tests')->truncate();
        $ids=9;
        while($ids>0){
            DB::table('initial_tests')->delete($ids);
            $ids--;
        }
        
        DB::update("ALTER TABLE initial_tests AUTO_INCREMENT = 1");
    }

}
