<?php

namespace Modules\Courses\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Courses\Entities\CourseCategory;

class CourseCategoriesSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        CourseCategory::create([
            'name_ar' => 'لغات' ,
            'name_en' => 'Languages' ,
            'code' => 'LANG'
        ]);
        CourseCategory::create([
            'name_ar' => 'ديني' ,
            'name_en' => 'Reliegin' ,
            'code' => 'RELIEGIN'
        ]);
        // $this->call("OthersTableSeeder");
    }
}
