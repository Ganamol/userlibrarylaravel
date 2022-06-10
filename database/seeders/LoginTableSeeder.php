<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Login;
class LoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Login::create([
            'username'=>'admin',
            'password'=>'admin',
            'type'=>'admin'
        ]);
        
    }
}
