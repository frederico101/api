<?php

use Illuminate\Database\Seeder;

class my_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\my_user::class, 10)->create();
    }
}
