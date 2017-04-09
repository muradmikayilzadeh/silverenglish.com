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
        DB::table('admins')->insert([
            'name'=> 'Murad',
            'surname'=> 'Mikayilzada',
            'email'=> 'm.murad@code.edu.az',
            'password'=> md5('123456789')
            ]);

        DB::table('admins')->insert([
            'name'=> 'Rufat',
            'surname'=> 'Dargahli',
            'email'=> 'rufatdargahli@yahoo.co.uk',
            'password'=> md5('123456789')
            ]);
    }
}
