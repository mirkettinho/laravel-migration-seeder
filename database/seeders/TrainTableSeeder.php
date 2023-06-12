<?php

namespace Database\Seeders;

// IMPORTO IL MODEL
use App\Models\Train;
// IMPORTO IL FAKER
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++){


            $new_train = new Train();
            $new_train->azienda = substr($faker->text(), 0, 10);
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->data_partenza = $faker->date();

            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->codice_treno = $faker->numberBetween(100, 10000);
            $new_train->numero_Carrozze = $faker->numberBetween(1, 5);
            $new_train->in_orario = $faker->numberBetween(0, 1);
            $new_train->cancellato = $faker->numberBetween(0, 1);

            $new_train->save();
        }

    }
}
