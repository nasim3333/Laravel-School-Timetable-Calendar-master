<?php

use App\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'id' => 1,
                'name' => 'Kelas 15'
            ],
            [
                'id' => 2,
                'name' => 'Kelas 16'
            ],
            [
                'id' => 3,
                'name' => 'Kelas 17'
            ]
        ];

        SchoolClass::insert($classes);
    }
}
