<?php

namespace Modules\Courses\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Courses\Entities\Days;

class DaysSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Days::create([
            'name_ar' => 'السبت',
            'name_en' => 'Saturday',
            'short_name_ar' => 'س',
            'short_name_en' => 'Sat',
            'order' => 1,
            'is_attend' => true,
        ]);
        Days::create([
            'name_ar' => 'الأحد',
            'name_en' => 'Sunday',
            'short_name_ar' => 'أح',
            'short_name_en' => 'Sun',
            'order' => 2,
            'is_attend' => true,
        ]);
        Days::create([
            'name_ar' => 'الأثنين',
            'name_en' => 'Monday',
            'short_name_ar' => 'أث',
            'short_name_en' => 'Mon',
            'order' => 3,
            'is_attend' => true,
        ]);
        Days::create([
            'name_ar' => 'الثلاثاء',
            'name_en' => 'Tuesday',
            'short_name_ar' => 'ث',
            'short_name_en' => 'Tue',
            'order' => 4,
            'is_attend' => true,
        ]);
        Days::create([
            'name_ar' => 'الاربعاء',
            'name_en' => 'Wednesday',
            'short_name_ar' => 'ار',
            'short_name_en' => 'Wed',
            'order' => 5,
            'is_attend' => true,
        ]);
        Days::create([
            'name_ar' => 'الخميس',
            'name_en' => 'Thursday',
            'short_name_ar' => 'خ',
            'short_name_en' => 'Thu',
            'order' => 6,
            'is_attend' => true,
        ]);
        Days::create([
            'name_ar' => 'الجمعة',
            'name_en' => 'Friday',
            'short_name_ar' => 'جم',
            'short_name_en' => 'Fri',
            'order' => 7,
            'is_attend' => false,
        ]);
    }
}
