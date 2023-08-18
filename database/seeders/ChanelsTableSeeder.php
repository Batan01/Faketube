<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Chanel;

class ChanelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Chanel::create([
                'ChanelID' => $faker->chanelid,
                'ChanelName' => $faker->ChanelName,
                'Description' => $faker->Description,
                'SubcriberCount' => $faker->SubcriberCount,
                'URL' => $faker->URL,

            ]);
        }
    }
}
