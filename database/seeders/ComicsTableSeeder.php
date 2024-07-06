<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // for ($i = 0; $i < 10; $i++) {
        //     $comic = new Comic();
        //     $comic->title = $faker->sentence(3); // Genera un titolo casuale di 3 parole
        //     $comic->description = $faker->paragraph(5); // Genera una descrizione casuale di 5 frasi
        //     $comic->thumb = $faker->imageUrl(400, 400, 'comics'); // Genera un URL di immagine casuale
        //     $comic->price = $faker->randomFloat(2, 1, 100); // Genera un prezzo casuale tra 1 e 100
        //     $comic->series = $faker->word(); // Genera una parola casuale per la serie
        //     $comic->sale_date = $faker->date(); // Genera una data casuale
        //     $comic->type = $faker->word(); // Genera una parola casuale per il tipo
        //     $comic->save();
        // }

        $comicsList = config('comics');
        foreach ($comicsList as $singleComic) {
            $comic = new Comic();
            $comic->title = $singleComic['title'];
            $comic->description = $singleComic['description'];
            $comic->thumb = $singleComic['thumb'];
            $singleComic['price'] = str_replace('$', '', $singleComic['price']);
            $comic->price = $singleComic['price'];
            $comic->series = $singleComic['series'];
            $comic->sale_date = $singleComic['sale_date'];
            $comic->type = $singleComic['type'];
            $comic->save();
        }
    }
}
