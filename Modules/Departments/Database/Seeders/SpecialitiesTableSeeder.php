<?php

namespace Modules\Departments\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Departments\Entities\Speciality;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Speciality::insert([
            'department_id' => 1, // Kardiologiya
            'name' => 'Kardiolog',
            'status' => 'active',
            'created_at' => '2020-05-05 18:40'
        ]);

        Speciality::insert([
            'department_id' => 3, // Pediatriya
            'name' => 'Pediatr',
            'status' => 'active',
            'created_at' => '2020-05-05 18:40'
        ]);

        // $this->call("OthersTableSeeder");
    }
}
