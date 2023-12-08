<?php

namespace Modules\Courses\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CoursesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(DaysSeederTableSeeder::class);
        $this->call(CourseCategoriesSeederTableSeeder::class);
        $this->call(PartTypesSeederTableSeeder::class);
        $this->call(PartsSeederTableSeeder::class);
        $this->call(StudyLevelCategoriesSeederTableSeeder::class);
        $this->call(StudyLevelsSeederTableSeeder::class);
        $this->call(CourseSettingSeederTableSeeder::class);
        // $this->call("OthersTableSeeder");
    }
}
