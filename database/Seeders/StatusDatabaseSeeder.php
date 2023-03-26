<?php

namespace Modules\Status\database\Seeders;

use Illuminate\Database\Seeder;

class StatusDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([StatusSeeder::class]);
    }
}
