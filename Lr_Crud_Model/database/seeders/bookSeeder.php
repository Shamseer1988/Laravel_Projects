<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\book;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        book::create([
        'book_name' => 'Shamseer',
        'book_author' => 'Amal',
        'book_genre' => 'Comedy',
        'book_publisher' => 'TATA',
        'book_price' => '250',
        ]);
                book::create([
        'book_name' => 'Basheer',
        'book_author' => 'Bash',
        'book_genre' => 'Hit',
        'book_publisher' => 'TOYOTA',
        'book_price' => '456',
        ]);
                book::create([
        'book_name' => 'Firoz',
        'book_author' => 'Fir',
        'book_genre' => 'Drama',
        'book_publisher' => 'NISSAM',
        'book_price' => '434',
        ]);
                book::create([
        'book_name' => 'Akash',
        'book_author' => 'akash',
        'book_genre' => 'Story',
        'book_publisher' => 'TOYOTA',
        'book_price' => '999',
        ]);
                book::create([
        'book_name' => 'Hussain',
        'book_author' => 'Huss',
        'book_genre' => 'Male',
        'book_publisher' => 'PFI',
        'book_price' => '555',
        ]);
                book::create([
        'book_name' => 'Azeez',
        'book_author' => 'Jaffer',
        'book_genre' => 'Crime',
        'book_publisher' => 'DFT',
        'book_price' => '999',
        ]);
    }
}
