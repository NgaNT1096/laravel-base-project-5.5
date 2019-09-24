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
        $this->call(UsersTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        //
        DB::table('users')->insert([
                'name' => 'holomia',
                'email' => 'holomiadev@gmail.com',
                'password' => bcrypt('123456'),
                'quyen' => 1,
                'created_at' => new DateTime()
            ]);
    }
}
