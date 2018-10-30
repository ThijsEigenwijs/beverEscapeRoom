<?php

use Illuminate\Database\Seeder;
use App\Codes;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $code1 = new Codes();
        $code1->code = 'a';
        $code1->hint = 'Eerste letter van het alphabet';
        $code1->save();
    }
}
