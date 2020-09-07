<?php

use Illuminate\Database\Seeder;
use App\Consumer;
use Faker\Generator as Faker;

class ConsumersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15 ; $i++) {
          $new_consumer = new Consumer();
          $new_consumer->name = $faker->firstName();
          $new_consumer->lastname = $faker->lastName();
          $new_consumer->suffix = $faker->suffix;
          $new_consumer->company = $faker->company;
          $new_consumer->job = $faker->jobTitle;
          $new_consumer->address = $faker->address;
          $new_consumer->phone = $faker->e164PhoneNumber;
          $new_consumer->email = $faker->email;
          $new_consumer->save();
        }
    }
}
