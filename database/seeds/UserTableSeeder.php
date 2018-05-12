<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'name' => 'admin',
        	'guard_name' => 'web',
        ]);
        DB::table('users')->insert([
        	'name' => 'logan',
        	'email' => 'logan@ratpackstudios.com',
        	'password' => bcrypt('Jur#9mA7'),
        ]);

        $admin = App\User::where('email', 'logan@ratpackstudios.com')->first();
        $admin->assignRole('admin');
    }
}
