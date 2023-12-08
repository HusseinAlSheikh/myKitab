<?php

namespace Modules\Courses\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Courses\Entities\Part;

class PartsSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Part::create([
            'id' => '20230',
            'name_ar' => '2023/2024' ,
            'name_en' => '2023/2024' ,
            'code' => '20230' ,
            'parent_part_id' => '0' ,
            'part_type_id' => '4' ,
            'start_date'=>Carbon::createFromFormat('d/m/Y','01/10/2023'),
            'end_date'=>Carbon::createFromFormat('d/m/Y','30/09/2024'),
            'semester_name_ar' => '2023/2024' ,
            'semester_name_en' => '2023/2024' ,
            'semester_order' => '1' ,
            'year_name_ar' => '2023/2024' ,
            'year_name_en' => '2023/2024' ,
        ]);
        Part::create([
            'id' => '20231',
            'name_ar' => 'فصل اول 2023/2024' ,
            'name_en' => 'Fall Semester 2023/2024' ,
            'code' => '20231' ,
            'parent_part_id' => '20230' ,
            'part_type_id' => '1' ,
            'start_date'=>Carbon::createFromFormat('d/m/Y','01/10/2023'),
            'end_date'=>Carbon::createFromFormat('d/m/Y','15/01/2024'),
            'semester_name_ar' => 'فصل اول 2023/2024' ,
            'semester_name_en' => 'Fall Semester 2023/2024' ,
            'semester_order' => '2' ,
            'year_name_ar' => '2023/2024' ,
            'year_name_en' => '2023/2024' ,
        ]);
        Part::create([
            'id' => '20232',
            'name_ar' => 'فصل ثاني 2023/2024' ,
            'name_en' => 'Spring Semester 2023/2024' ,
            'code' => '20232' ,
            'parent_part_id' => '20230' ,
            'part_type_id' => '2' ,
            'start_date'=>Carbon::createFromFormat('d/m/Y','01/02/2024'),
            'end_date'=>Carbon::createFromFormat('d/m/Y','15/06/2024'),
            'semester_name_ar' => 'فصل ثاني 2023/2024' ,
            'semester_name_en' => 'Spring Semester 2023/2024' ,
            'semester_order' => '3' ,
            'year_name_ar' => '2023/2024' ,
            'year_name_en' => '2023/2024' ,
        ]);
        Part::create([
            'id' => '20233',
            'name_ar' => 'فصل صيفي 2023/2024' ,
            'name_en' => 'Summer Semester 2023/2024' ,
            'code' => '20233' ,
            'parent_part_id' => '20230' ,
            'part_type_id' => '3' ,
            'start_date'=>Carbon::createFromFormat('d/m/Y','01/07/2024'),
            'end_date'=>Carbon::createFromFormat('d/m/Y','01/09/2024'),
            'semester_name_ar' => 'فصل صيفي 2023/2024' ,
            'semester_name_en' => 'Summer Semester 2023/2024' ,
            'semester_order' => '3' ,
            'year_name_ar' => '2023/2024' ,
            'year_name_en' => '2023/2024' ,
        ]);
        // $this->call("OthersTableSeeder");
    }
}
