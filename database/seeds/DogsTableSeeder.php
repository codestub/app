<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Dog');

        for ($i = 0; $i < 100; $i++) {
            DB::table('dogs')->insert([
                'breed' => $faker->randomElement($array = [
                    'Labrador',
                    'Bulldog',
                    'German Shepherd',
                    'Golden Retriever',
                    'Poodle',
                    'Boxer',
                    'Beagle',
                    'Rottweiler',
                    'Yorkshire Terrier',
                    'Husky',
                    'Pug',
                    'Chihuahua',
                    'Dachshund',
                    'Great Dane',
                    'Shih Tzu',
                    'Doberman',
                    'Border Collie',
                    'Boston Terrier',
                    'Australian Shepherd',
                    'Old English Sheepdog',
                    'English Mastiff',
                    'French Bulldog',
                    'Maltese',
                    'Miniature Schnauzer'
                ]),
                'price' => $faker->randomNumber(3),
                'males' => $faker->randomNumber(1),
                'females' => $faker->randomNumber(1),
                'date_of_birth' => $faker->dateTimeThisYear(),
                'description' => $faker->text($maxNbChars = 100),
                'lat' => $faker->latitude($min = -90, $max = 90),
                'lng' => $faker->longitude($min = -180, $max = 180),
                'active' => $faker->boolean,
                'created_at' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
                'updated_at' => $faker->dateTimeThisMonth($max = 'now', $timezone = date_default_timezone_get())
            ]);
        }
    }
}
