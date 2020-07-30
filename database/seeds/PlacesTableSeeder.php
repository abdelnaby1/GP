<?php

use Illuminate\Database\Seeder;

use App\Place;
use Faker\Generator as Faker;
class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Zoumba',
        	'image'			=>  asset('storage/zoumba.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);

         place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Zoumba',
        	'image'			=>  asset('storage/zoumba2.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
        	'price'			=> 	rand(50,250),
			'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
					
		]);


          place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Gym',
        	'image'			=>  asset('storage/gym.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);

           place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Gym',
        	'image'			=>  asset('storage/gym2.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);


            place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Basketball',
        	'image'			=>  asset('storage/basketball.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);


             place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Basketball',
        	'image'			=>  asset('storage/basketball2.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);


              place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Baseball',
        	'image'			=>  asset('storage/baseball.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
            'gender'        => 'male',
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);


               place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Tennis',
        	'image'			=>  asset('storage/tennis.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);


                place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Tennis',
        	'image'			=>  asset('storage/tennis2.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);


        place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Ballet',
        	'image'			=>  asset('storage/ballet.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
            'gender'        => 'female',
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);


        place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Football',
        	'image'			=>  asset('storage/football.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);

         place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Street',
        	'image'			=>  asset('storage/street.jpg'),
            'gender'        => 'male',
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);

         place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Football',
        	'image'			=>  asset('storage/football2.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);


         place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Ballet',
        	'image'			=>  asset('storage/ballet2.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
            'gender'        => 'female',
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);

         place::create([

        	'name'			=>	$faker->name,
            'type'          =>  'Football',
        	'image'			=>  asset('storage/football.jpg'),
        	'location'		=>	$faker->address,
        	'description'	=>	$faker->text(),
        	'price'			=> 	rand(50,250),
            'owner_id'      => factory('App\Owner')->create(['confirmed' => true])->id
        ]);


    }
}
