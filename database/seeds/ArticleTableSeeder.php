<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloguent\Model;
use \App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
            $article = new Article;
            $article->title = '記事タイトル'.$i;
            $article->body = '記事本文'.$i;
            $article->save();
            
        }
    }
}
