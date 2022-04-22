<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\book;
use Database\Factories\bookFactory;

class bookSeeder extends Seeder
{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
                book::factory()->count(1000)->create();


                // book::create([
                // 'book_name' => 'Azeez',
                // 'book_author' => 'Jaffer',
                // 'book_genre' => 'Crime',
                // 'book_publisher' => 'DFT',
                // 'book_price' => '999',
                // ]);
        }
}
