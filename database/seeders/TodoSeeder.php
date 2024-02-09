<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 10) as $index => $value) {
            DB::table('Todos')->insert([
                'name' => "name-$index",
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            ]);
        }

    }
}
