<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                'company_name' => 'MGT_STRAT',
                'cstmzd_eng_form_id' => '0001',
                'status' => 'ACTIVE',
                'sales_person' => 'Tine',
                'industry' => 'Shipping & Logistics',
                'old_new' => 'OLD',
                'first_eng' => '7/2/1905',
                'latest_eng' => '08/10/2022',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
            ]);
    }
}
