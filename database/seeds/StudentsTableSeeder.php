<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $new_student = new Student();
          $new_student->name = $faker->firstName();
          $new_student->surname = $faker->lastName();
          $new_student->vote = $faker->numberBetween(1,10);
          $new_student->note = $faker->sentence();
          $new_student->save();
        }
    }
}
