<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            'name' => 'Puk',
            'type' => 'cat',
            'description' => 'a small little cute cat',
            'hourlyRate' => 4.5,
            'startDate' => '2024-04-15',
            'endDate' => '2024-04-27',
            'ownerId' => 1,
            'image' => '/img/pets/puk.jpg',
        ]);

        DB::table('pets')->insert([
            'name' => 'Sam',
            'type' => 'dog',
            'description' => "kind, but scared, dog who's not easy to trust humans",
            'hourlyRate' => 7.0,
            'startDate' => '2024-05-22',
            'endDate' => '2024-06-03',
            'ownerId' => 2,
            'image' => '/img/pets/sam.jpg',
        ]);

        DB::table('pets')->insert([
            'name' => 'Chico',
            'type' => 'bird',
            'description' => 'a real pain in the ass when hungry',
            'hourlyRate' => 8.0,
            'startDate' => '2024-07-13',
            'endDate' => '2024-09-02',
            'ownerId' => 2,
            'sitterId' => 1,
            'image' => '/img/pets/chico.jpg',
        ]);

        DB::table('pets')->insert([
            'name' => 'Bubble',
            'type' => 'fish',
            'description' => 'keeps on swimming. If not its dead',
            'hourlyRate' => 4.5,
            'startDate' => '2024-05-02',
            'endDate' => '2024-05-29',
            'ownerId' => 1,
            'sitterId' => 2,
            'request' => true,
            'image' => '/img/pets/bubble.jpg',
        ]);

        DB::table('pets')->insert([
            'name' => 'kermit',
            'type' => 'amphibian',
            'description' => 'they call him Kermit 007 spy',
            'hourlyRate' => 7.5,
            'startDate' => '2024-08-02',
            'endDate' => '2024-08-08',
            'ownerId' => 1,
            'sitterId' => 2,
            'request' => false,
            'image' => '/img/pets/kermit.jpg',
        ]);

        DB::table('pets')->insert([
            'name' => 'Henk Krol',
            'type' => 'reptile',
            'description' => "he's quite old for his age",
            'hourlyRate' => 7.5,
            'startDate' => '2024-09-02',
            'endDate' => '2024-09-08',
            'ownerId' => 2,
            'image' => '/img/pets/henkkrol.jpg',
        ]);

        DB::table('pets')->insert([
            'name' => 'Jantje',
            'type' => 'other',
            'description' => "he's quite young for his age",
            'hourlyRate' => 15,
            'startDate' => '2024-09-02',
            'endDate' => '2024-09-08',
            'ownerId' => 2,
            'image' => '/img/pets/jantje.jpg',
        ]);
    }
}
