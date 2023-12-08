<?php

namespace Modules\Courses\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Courses\Entities\CourseSetting;

class CourseSettingSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        CourseSetting::create([
            'input_title_ar' => 'Sett' ,
            'input_title_en' => 'Sett',
            'input_title_code' => 'Sett',
            'input_title_type' => 'Sett',
            'input_title_value' => 'Sett',
        ]);
        // $this->call("OthersTableSeeder");
    }
}
