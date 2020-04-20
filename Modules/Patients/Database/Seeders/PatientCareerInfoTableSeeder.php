<?php

namespace Modules\Patients\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Patients\Entities\PatientCareerInfo;

class PatientCareerInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        PatientCareerInfo::insert([
            'patient_id'=>1,   // Jasur Khodjaev
            'position'=>'PhD Professor',
            'organization'=>'INHA university in Tashkent',
            'address'=>'Ziyolilar 9, Tashkent',
            'start_date'=>'2014-09-10',
            'currently_working'=>true,
            'status'=>'active'
        ]);

        // $this->call("OthersTableSeeder");
    }
}
