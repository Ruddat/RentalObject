<?php

namespace Database\Seeders;

use App\Models\ObjProperties;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ObjPropertiesSeeder extends Seeder
{
    public function run()
    {
        ObjProperties::factory(10)->create()->each(function ($property) {
            // Preise
           // $property->prices()->save(\App\Models\ObjPrices::factory()->make());

            // Details
 //           $property->details()->save(\App\Models\ObjDetails::factory()->make());

            // Energiezertifikate
   //         $property->energyCertificates()->save(\App\Models\ObjEnergyCertificates::factory()->make());

            // Abschnitte
     //       $property->sections()->saveMany(\App\Models\ObjSections::factory(3)->make());

            // Fotos
       //     $property->photos()->saveMany(\App\Models\ObjPhotos::factory(5)->make());
        });
    }
}
