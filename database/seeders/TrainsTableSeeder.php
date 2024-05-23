<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 12; $i++) {
            $newTrain= new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTime();
            $newTrain->orario_di_arrivo = $faker->dateTime();
            $newTrain->codice_treno = $faker->randomNumber(4, true);
            $newTrain->numero_carrozze = $faker->randomDigit();
            $newTrain->in_orario = 'Si' || 'No';
            $newTrain->cancellato = 'Si' || 'No';
            $newTrain->diretto = 'Si' || 'No';
            $newTrain->save();
        }
    }
}
