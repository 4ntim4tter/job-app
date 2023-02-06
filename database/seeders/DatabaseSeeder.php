<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use App\Models\JobApplication;
use App\Models\Jobs;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\For_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($start = 0; $start <= random_int(2, 6); $start++) {
            Company::factory()->has(Jobs::factory(random_int(2,7))->has(JobApplication::factory(random_int(1,8))))->create();
        }
    }
}
