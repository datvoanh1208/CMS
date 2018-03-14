<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory('Modules\Admin\Entities\Admin')->create([
            'name' => 'root',
            'username' => 'root',
            'email' => 'root@example.com',
            'password' => bcrypt('123456')
        ]);
    }
}
