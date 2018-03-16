<?php

use Illuminate\Database\Seeder;
use App\File;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Create 50 product records
        for ($i = 0; $i < 10; $i++) {
            File::create([
                'file_name' => $faker->word . '.' . $faker->fileExtension,
                'file_size' => $faker->numberBetween($min = 1000, $max = 90000)
//                'user_id' => $faker->randomDigitNotNull
            ]);
        }
    }
}
