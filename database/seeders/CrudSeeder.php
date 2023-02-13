<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\crud;
use Faker\Factory as Faker;
class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //seeder & Faker
    public function run()
    {
        $Faker=Faker::create();
        for($i=1;$i<=20; $i++)
        {
            $crud= new crud;
            $crud->name=$Faker->name;
            $crud->email=$Faker->email;
            $crud->address=$Faker->address;
            $crud->phone='+82-8972-89738';
            $crud->save();
        }
        
    }
}
