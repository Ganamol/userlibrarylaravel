<?php

namespace Database\Seeders;

use App\Models\Userreg;
use Illuminate\Database\Seeder;

class UserregSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Userreg::create(['name'=>'admin',
                         'date_of_birth'=>'2000-2-2',
                         'gender'=>'male',
                         'qualification'=>'SSLC',
                         'hobbies'=>'cricket',
                         'email'=>'admin@gmail.com',
                         'myself'=>'admin is all',
                         'image'=>'hsdyugcsdy',
                         'password'=>bcrypt('admin'),
                         'status'=>'approved'
                        ]);


       
    
    }
}
