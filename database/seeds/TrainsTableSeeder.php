<?php
use App\Train;
use Illuminate\Database\Seeder;
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
        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->azienda = $faker->word();;
            $train->stazione_di_partenza = $faker->state();
            $train->stazione_di_arrivo = $faker->state();
            $train->orario_di_partenza = $faker->date() . " " . $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->randomDigit();
            $train->numero_carrozze = $faker->randomDigit();
            $train->in_orario = true;
            $train->cancellato = false;
    
            $train->save();
        }

    }
}
