<?php namespace App\Http\Controllers;


use App\models\PRclientPersonConected;
use App\models\PRclients;
use App\models\PRclientsPersonType;
use App\models\PRLoginName;
use App\models\PRLogins;
use App\models\PRpersons;
use App\models\PRpersonTypes;
use App\models\PRpojectLoginConnections;
use App\models\PRproject;
use App\models\PRprojectConnections;
use App\models\PRprojetTypes;
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

    public  function generateClients(int $count=30)
    {
        $faker = Factory::create();


        for ($i=0; $i < $count; $i++) {

            PRclients::create([

                'name' => $faker->name,
                'type' => $faker->randomElement(['J', 'F'])


            ]);


        }



    }

    public  function generateClientsPersonsType(int $count=30)
    {
        $faker = Factory::create();


        for ($i=0; $i < $count; $i++) {

            PRclientsPersonType::create([

                'name' => $faker->name,
                'discription' => $faker->text


            ]);


        }



    }

    public  function generateLoginName(int $count=30)
    {
        $faker = Factory::create();


        for ($i=0; $i < $count; $i++) {

            PRLoginName::create([

                'name' => $faker->name,
                'discription' => $faker->text


            ]);


        }



    }

    public  function generateLogins(int $count=30)
    {
        $faker = Factory::create();


        for ($i=0; $i < $count; $i++) {

            PRLogins::create([

                'name' => $faker->name,
                'password' => $faker->password,
                'login_url'=> $faker->url,
                'login_name_id'=> PRLoginName::select('id')->get()->random()->id



            ]);


        }



    }

    /**
     * @param int $count
     */
    public  function generateProjetTypes(int $count=30)
    {
        $faker = Factory::create();


        for ($i=0; $i < $count; $i++) {

            PRprojetTypes::create([

                'name' => $faker->name,
                'discription' => $faker->text



            ]);


        }



    }

    public  function generateProject(int $count=30)
    {
        $faker = Factory::create();


        for ($i=0; $i < $count; $i++) {

            PRproject::create([

                'name' => $faker->name,
                'types_id' => PRprojetTypes::select('id')->get()->random()->id,
                'descrption' => $faker->text,
                'clients_id' =>PRclients::select('id')->get()->random()->id,


            ]);


        }



    }

    public  function generateClientPersonConected (int $count=30)
    {
        $faker = Factory::create();


        for ($i=0; $i < $count; $i++) {

            PRclientPersonConected ::create([

                'client_person_type_id' => PRclientsPersonType::select('id')->get()->random()->id,
                'person_id' =>PRpersons::select('id')->get()->random()->id,
                'cllients_id' =>PRclients::select('id')->get()->random()->id,


            ]);


        }



    }
    public  function generatePojectLoginConnections (int $count=30)
    {
        $faker = Factory::create();


        for ($i=0; $i < $count; $i++) {

            PRpojectLoginConnections ::create([


                'project_id' =>PRproject::select('id')->get()->random()->id,
                'login_id' =>PRLogins::select('id')->get()->random()->id,


            ]);


        }



    }
    public  function generatePersonTypes (int $count=30)
    {
        $faker = Factory::create();


        for ($i=0; $i < $count; $i++) {

            PRpersonTypes ::create([

                'name' => $faker->name,
                'description' => $faker->text

            ]);


        }



    }
    public  function generateProjectConnections (int $count=30)
    {
        $faker = Factory::create();


        for ($i=0; $i < $count; $i++) {

            PRprojectConnections ::create([

                'person_id' =>PRpersons::select('id')->get()->random()->id,
                'perso_type_id' =>PRpersonTypes::select('id')->get()->random()->id,
                'project_id' =>PRproject::select('id')->get()->random()->id

            ]);


        }



    }



    /**
     * @param int $count
     */
   /** public  function generateClientPersonConected(int $count=30)
    {
        $faker = Factory::create();


        for ($i=0; $i < $count; $i++) {

            PRclientPersonConected::create([

                'cllients_id' => $faker->uuid4(),
                'mail' => $faker->email,
                'phone' =>$faker->phoneNumber

            ]);


        }



    }
    */

}