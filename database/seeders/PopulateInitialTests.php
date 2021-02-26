<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopulateInitialTests extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
      }
    }
}
