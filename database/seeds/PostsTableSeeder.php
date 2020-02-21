<?php
use Illuminate\Database\Seeder;

    class PostsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="PostsTableSeeder"
            
            $faker = Faker\Factory::create("en_US");
            
            for( $i=0; $i<10; $i++ ){

                App\Post::create([
					"user_id" => $faker->randomDigit(),
					"place_id" => $faker->randomDigit(),
					"rating" => $faker->word(),
					"comment" => $faker->word(),
					"post_img" => $faker->word(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }