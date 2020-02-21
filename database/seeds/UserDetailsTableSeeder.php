<?php
use Illuminate\Database\Seeder;

    class UserDetailsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="UserDetailsTableSeeder"
            
            $faker = Faker\Factory::create("en_US");
            
            for( $i=0; $i<10; $i++ ){

                App\UserDetail::create([
					"user_id" => $faker->randomDigit(),
					"address" => $faker->address(),
					"gender" => $faker->word(),
					"age" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }