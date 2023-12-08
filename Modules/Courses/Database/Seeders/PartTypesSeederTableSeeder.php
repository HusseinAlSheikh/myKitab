<?php

namespace Modules\Courses\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Courses\Entities\PartType;

class PartTypesSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        PartType::create([
            'id' => '4',
            'name_ar'=>'عام',
            'name_en'=>'Year',
            'code'=>'Y',
            'start_date'=>Carbon::createFromFormat('d/m/Y','01/10/2023'),
            'end_date'=>Carbon::createFromFormat('d/m/Y','01/09/2024'),
        ]);
        PartType::create([
            'id' => '1',
            'name_ar'=>'فصل اول',
            'name_en'=>'Fall Semester',
            'code'=>'FA',
            'start_date'=>Carbon::createFromFormat('d/m/Y','01/10/2023'),
            'end_date'=>Carbon::createFromFormat('d/m/Y','15/01/2024'),
        ]);
        PartType::create([
            'id' => '2',
            'name_ar'=>'الفصل الثاني',
            'name_en'=>'Spring Semester',
            'code'=>'SP',
            'start_date'=>Carbon::createFromFormat('d/m/Y','01/02/2024'),
            'end_date'=>Carbon::createFromFormat('d/m/Y','15/06/2024'),
        ]);
        PartType::create([
            'id' => '3',
            'name_ar'=>'الفصل الصيفي',
            'name_en'=>'Summer Semester',
            'code'=>'SU',
            'start_date'=>Carbon::createFromFormat('d/m/Y','01/07/2024'),
            'end_date'=>Carbon::createFromFormat('d/m/Y','01/09/2024'),
        ]);
        // $this->call("OthersTableSeeder");
    }
}
