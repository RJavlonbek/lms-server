<?php

namespace Modules\Users\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Modules\Users\Entities\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        User::insert([
            'name' => 'Javlonbek',
            'lastname' => 'Rakhimberdiev',
            'middlename' => '',
            'email' => 'javlonarjei042@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'admin',
            'status' => 'active'
        ]);

        // $this->call("OthersTableSeeder");
    }
}
