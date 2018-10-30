<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@local.host';
        $admin->group_id = -1;
        $admin->password = bcrypt('geheim');
        $admin->save();
    }
}
