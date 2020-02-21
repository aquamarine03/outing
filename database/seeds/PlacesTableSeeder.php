<?php
use Illuminate\Database\Seeder;

    class PlacesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="PlacesTableSeeder"
            
            $faker = Faker\Factory::create("en_US");
            
            for( $i=0; $i<10; $i++ ){

                App\Place::create([
					"place_name" => $faker->name(),
					"place_address" => $faker->address(),
					"place_img" => $faker->word(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }