<?php

namespace Modules\Courses\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Courses\Entities\StudyLevelCategory;

class StudyLevelCategoriesSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        StudyLevelCategory::create([
            'name_ar' => 'ابتدائي' ,
            'name_en' => '' ,
            'code' => 'PRIMARY' ,
            'is_active' => true ,
        ]);
        StudyLevelCategory::create([
            'name_ar' => 'اعدادي' ,
            'name_en' => '' ,
            'code' => 'SECOND' ,
            'is_active' => true ,
        ]);
        StudyLevelCategory::create([
            'name_ar' => 'ثانوي' ,
            'name_en' => '' ,
            'code' => 'HIGH' ,
            'is_active' => true ,
        ]);
        // $this->call("OthersTableSeeder");
    }
}
