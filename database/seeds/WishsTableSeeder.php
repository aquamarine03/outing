<?php
use Illuminate\Database\Seeder;

    class WishsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="WishsTableSeeder"
            
            $faker = Faker\Factory::create("en_US");
            
            for( $i=0; $i<10; $i++ ){

                App\Wish::create([
					"user_id" => $faker->randomDigit(),
					"place_id" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }