<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('webinar')->insert([
        [
            'title' => 'Think Mental Wellness'
        ],[
            'title' => 'Making Emotional Intelligence Visible'
        ],[
            'title' => 'From Burnout to Balance'
        ],[
            'title' => 'Power of Yet'
        ],[
            'title' => 'Leading Virtual Teams'
        ],[
            'title' => 'Secret Ingredient to High Performing Teams'
        ],[
            'title' => 'Creating Digital Bonds'
        ]
        ]);
    }
}
