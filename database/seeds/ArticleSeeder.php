<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i<40;$i++){
            Article::create([
                'titulo' => 'Bye bye mi ser '.$i, 
                'cuerpo' => 'Hey UwU',
                'autor' => 'La ultima persona'
            ]);
        }
    }
}
