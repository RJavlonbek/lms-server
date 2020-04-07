<?php

namespace Modules\Patients\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('patients')->insert([
            'user_id' => 1,
            'firstname' => 'Jasur',
            'lastname' => 'Khodjaev',
            'dob' => '1975-08-09',
            'passport_series' => 'AB',
            'passport_number' => '3123453',
            'address' => 'Ziyolilar 9, Tashkent',
            'phone' => '+998991234567',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        // $this->call("OthersTableSeeder");
    }
}
