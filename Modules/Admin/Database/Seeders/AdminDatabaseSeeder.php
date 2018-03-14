<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call("Modules\Admin\Database\Seeders\AdminTableSeeder");
        $this->call("Modules\Admin\Database\Seeders\UserTableSeeder");
    }
}
