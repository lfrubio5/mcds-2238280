<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    
     
    public function definition()
    {
       // $faker = Faker\Factory::create();

        $gender =$this->faker->randomElement($array = array('Female', 'Male'));
        
        switch ($gender) {
            case 'Female':
               $fullName = $this->faker->firstNameFemale;
                break;
            
            default:
                $fullName = $this->faker->firstNameMale;
                break;
        }
        return [
            'fullname'          => $fullName.' '.$this->faker->lastName ,
            'email'             => $this->faker->unique()->safeEmail,
            'phone'             => $this->faker->numberBetween($min = 3101000000, $max = 3202000000),
            'birthdate'         => $this->faker->dateTimeBetween($startDate = '1960', $endDate = '1999', $timezone = null),
            'gender'            => $this->faker->randomElement($array = array('Female', 'Male')),
            'address'           => $this->faker->streetAddress,
            'photo'             => $this->faker->image(public_path('images'),400,300, 'http://lorempixel.com/640/480/cats/', false),
            'role'              => 'Editor',  
            'email_verified_at' => now(),
            'password'          => bcrypt('editor'), 
            'remember_token'    => Str::random(10),
        ];
    }

    
}



               