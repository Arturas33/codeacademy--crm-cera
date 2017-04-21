<?php namespace App\Http\Controllers;


use App\models\PRpersons;
use Illuminate\Routing\Controller;
use Faker\Factory;

class PRFakeDataController extends Controller
{

    public  function generatePersons(int $count=30)
    {
        $faker = Factory::create();


        for ($i=0; $i < $count; $i++) {

            PRpersons::create([

                'name' => $faker->name,
                'mail' => $faker->email,
                'phone' =>$faker->phoneNumber

            ]);


        }



    }


}