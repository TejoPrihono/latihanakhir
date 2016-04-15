<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
          [
            "title" => "1 Suka suka",
            "content" => "lorem ipsum dolor cament"
          ],
          [
            "title" => "2 Suka suka",
            "content" => "lorem ipsum dolor cament"
          ],
          [
            "title" => "3 Suka suka",
            "content" => "lorem ipsum dolor cament"
          ],
          [
            "title" => "4 Suka suka",
            "content" => "lorem ipsum dolor cament"
          ],
          [
            "title" => "5 Suka suka",
            "content" => "lorem ipsum dolor cament"
          ],
          [
            "title" => "6 Suka suka",
            "content" => "lorem ipsum dolor cament"
          ],
          [
            "title" => "7 Suka suka",
            "content" => "lorem ipsum dolor cament"
          ],
          [
            "title" => "8 Suka suka",
            "content" => "lorem ipsum dolor cament"
          ],
          [
            "title" => "9 Suka suka",
            "content" => "lorem ipsum dolor cament"
          ],
          [
            "title" => "10 Suka suka",
            "content" => "lorem ipsum dolor cament"
          ]
        ];
        DB::table('articles')->insert($articles);
    }
}
