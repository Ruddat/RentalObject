<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesBlockSeeder extends Seeder
{
    public function run()
    {
        // Kategorien hinzufügen
        $categories = [
            [
                'name' => 'Unternehmen',
                'slug' => 'unternehmen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rechtliches',
                'slug' => 'rechtliches',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('mod_categories')->insert($categories);

        $categoryIds = DB::table('mod_categories')->pluck('id', 'slug')->toArray();

        // Beispielseite hinzufügen
        $pageId = DB::table('mod_pages')->insertGetId([
            'title' => 'Beispielseite',
            'slug' => 'beispiel-seite',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Blöcke zur Beispielseite hinzufügen
        DB::table('mod_blocks')->insert([
            [
                'page_id' => $pageId,
                'title' => 'Einleitung',
                'content' => 'Willkommen auf unserer Beispielseite!',
                'type' => 'text',
                'order' => 1,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_id' => $pageId,
                'title' => 'Bildgalerie',
                'content' => '<img src="/images/sample.jpg" alt="Beispielbild">',
                'type' => 'image',
                'order' => 2,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Links hinzufügen und Kategorien zuordnen
        DB::table('mod_links')->insert([
            [
                'label' => 'Unternehmensübersicht',
                'url' => '/unternehmen',
                'category_id' => $categoryIds['unternehmen'],
                'page_id' => $pageId,
                'active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'label' => 'Datenschutzrichtlinie',
                'url' => '/datenschutz',
                'category_id' => $categoryIds['rechtliches'],
                'page_id' => null,
                'active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'label' => 'AGB',
                'url' => '/agb',
                'category_id' => $categoryIds['rechtliches'],
                'page_id' => null,
                'active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
