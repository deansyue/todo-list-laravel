<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'test@mail.com')->first();
        foreach(range(1, 10) as $index => $value) {
            Todo::create([
                'name' => "name-$index",
                'user_id' => $user->id,
            ]);
        }

    }
}
