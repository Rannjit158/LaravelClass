<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Collegue;

class CollegueSeeder extends Seeder
{
    public function run(): void
    {
        // Load and decode JSON
        $json = File::get(database_path('json/collegue.json'));
        $collegue= json_decode($json, true);

        // Insert into DB
        Collegue::insert($collegue);
    }
}
