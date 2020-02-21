<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //********************************************
        // Cmd:[ php artisan db:seed ]
        //********************************************
        // $this->call(UsersTableSeeder::class);
		// $this->call(UsersTableSeeder::class);
		// $this->call(PostsTableSeeder::class);
		// $this->call(UserRolesTableSeeder::class);
		// $this->call(UserDetailsTableSeeder::class);
		// $this->call(LikesTableSeeder::class);
		// $this->call(PlacesTableSeeder::class);
		$this->call(WishesTableSeeder::class);
   }
}