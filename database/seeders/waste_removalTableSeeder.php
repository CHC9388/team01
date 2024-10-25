<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class waste_removalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Waste_Removal')->insert([
        
            [
                'city' => '新北市',
                'cleanup_area' => 23,
                'cleanup_times' => 94,
                'participants' => 1110,
                'marine_debris_source_drift' => 108.583,
                'marine_debris_source_bottom' => 0,
                'marine_debris_source_beach_cleanup' => 0,
                'marine_debris_source_vessel' => 16.738,
                'marine_debris_source_bin' => 0,
                'cleanup_method_hired' => 36,
                'cleanup_method_mechanical' => 125.321,
                'cleanup_quantity_total' => 2.998,
                'cleanup_quantity_pet_bottles' => 0.923,
                'cleanup_quantity_steel_cans' => 0.436,
                'cleanup_quantity_aluminum_cans' => 0.129,
                'cleanup_quantity_glass_bottles' => 0.819,
                'cleanup_quantity_paper' => 4.248,
                'cleanup_quantity_bamboo_wood' => 0.987,
                'cleanup_quantity_polystyrene' => 5.556,
                'cleanup_quantity_fishing_gear' => 109.225,
                'cleanup_quantity_unclassified_waste' => 112.516,
                'cleanup_post_processing_incineration' => 12.805,
                'cleanup_post_processing_recycling' => 0,
                'cleanup_post_processing_landfilling' => 0,
            ],
            // ... (其他資料可以按相同格式填入)
        ]);
    }
}
