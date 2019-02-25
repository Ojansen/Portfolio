<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    public $info = [
        ['title' => 'RPG Game', 'href' => 'http://game.ailife.nl/', 'technologies' => 'PHP 7.2, Laravel 5.6, Bootstrap 3, HTML 5, jQuery 3.3.1', 'description' => 'A point and click game made in Laravel'],
        ['title' => 'Homepagina', 'href' => 'http://homepage.ailife.nl/', 'technologies' => 'PHP 7.2, Laravel, Bootstrap 3, HTML 5, jQuery 3.3.1', 'description' => "Een standaard home pagina voor iedereen. Functies : Tijd, quote's, het weer en snelkoppelingen"],
        ['title' => 'Restaurant Excellent Taste', 'href' => 'http://examen.ailife.nl/', 'technologies' => 'PHP 7.2, Laravel, Bootstrap 3, HTML 5, jQuery 3.3.1', 'description' => "Dit was mijn examen opdracht voor 3e jaar applicatie media ontwikkeling."],

    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->info as $key => $value) {
            // dd($value);
            DB::table('projects')->insert([
                'title' => $value["title"],
                'href' => $value["href"],
                'technologies' => $value["technologies"],
                'description' => $value["description"],
            ]);
        }

    }
}
