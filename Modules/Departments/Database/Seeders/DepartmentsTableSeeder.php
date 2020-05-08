<?php

namespace Modules\Departments\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Departments\Entities\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        Department::insert([
            'name'   => 'Kardiologiya',
            'status' => 'active',
            'created_at' => '2020-05-05 18:26'
        ]);

        Department::insert([
            'name'   => 'Travmatologiya',
            'status' => 'active',
            'created_at' => '2020-05-05 18:26'
        ]);

        Department::insert([
            'name'   => 'Pediatriya',
            'status' => 'active',
            'created_at' => '2020-05-05 18:26'
        ]);
    }
}
