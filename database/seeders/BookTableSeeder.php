<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Book::create([
                'title' => 'book' . $i,
                'author' => $i,
                'review' => $i,
                'readed_at' => '2021/8/8',
                'content' => '楽しかった',
                'user_name'=>'taro'.$i,
            ]);
        }
    }
}
