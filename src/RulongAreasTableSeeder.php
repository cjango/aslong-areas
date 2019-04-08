<?php

namespace AsLong\Area;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsLongAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SQL = file_get_contents(__DIR__ . '/../database/seeds/database_seeder.stub');
        DB::statement($SQL);
    }
}
