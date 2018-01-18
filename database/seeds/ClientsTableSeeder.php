<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++)
        {
            DB::table('clients')->insert([
                'client_name' => str_random(10),
                'pic_division' => str_random(10),
                'pic_esq_id' => $i,
                'iAnalyse_login_user' => str_random(10),
                'iAnalyse_login_password' => str_random(10),
                'iAnalyse_login_info' => str_random(10),
                'iAnalyse_template_type' => 'CPA',
                'status' => 1,
            ]);
        }

    }
}
