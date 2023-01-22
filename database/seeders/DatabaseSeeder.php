<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'haikal',
            'email' => 'raflihaikal@gmail.com',
            'Keahlian'=>'Desain Grafis | Web Developer | Animator ',
            'no_hp'=> '089534117228',
            'alamat'=>'padang',

        ]);
    }
}
