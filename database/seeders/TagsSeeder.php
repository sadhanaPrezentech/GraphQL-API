<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::insert([
            [
                'name' => "Half of a Yellow Sun",
                'description' => "Chimamanda Ngozi Adichie",
            ],
            [
                'title' => "Encyclopedia of Pseudoscience:",
                'description' => "William F. Williams",
            ],
            [
                'title' => "Things fall apart",
                'description' => "Chinua Achebe",
            ],
            [
                'title' => "Tall Tales about the Mind and Brain",
                'description' => "Della Sala",
            ],

        ]);
    }
}
