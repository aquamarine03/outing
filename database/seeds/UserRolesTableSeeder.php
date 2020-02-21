<?php
use Illuminate\Database\Seeder;

    class UserRolesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="UserRolesTableSeeder"
            
            $faker = Faker\Factory::create("en_US");
            
            for( $i=0; $i<10; $i++ ){

                App\UserRole::create([
					"role_name" => $faker->name(),
					"user_id" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }