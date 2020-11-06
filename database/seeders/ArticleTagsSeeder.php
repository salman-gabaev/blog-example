<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ArticleTags::factory(40)->create();
    }
}
