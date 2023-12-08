<?php

namespace Modules\Courses\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Courses\Entities\StudyLevel;
use Modules\Courses\Entities\StudyLevelCategory;

class StudyLevelsSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $studyLevels = [
            'PRIMARY' => [
                [
                    'name_ar' => '1',
                    'name_en' => '1',
                    'code' => '1',
                    'order' => 1 ,
                    
                    
                    
                ] ,
                [
                    'name_ar' => '2',
                    'name_en' => '2',
                    'code' => '2',
                    'order' => 2 ,
                    
                    
                    
                ],
                [
                    'name_ar' => '3',
                    'name_en' => '3',
                    'code' => '3',
                    'order' => 3 ,
                    
                    
                    
                ],
                [
                    'name_ar' => '4',
                    'name_en' => '4',
                    'code' => '4',
                    'order' => 4 ,
                    
                    
                    
                ],
                [
                    'name_ar' => '5',
                    'name_en' => '5',
                    'code' => '5',
                    'order' => 5 ,
                    
                    
                    
                ],
                [
                    'name_ar' => '6',
                    'name_en' => '6',
                    'code' => '6',
                    'order' => 6 ,
                    
                    
                    
                ],
            ],
            'SECOND'  => [
                [
                    'name_ar' => '7',
                    'name_en' => '7',
                    'code' => '7',
                    'order' => 7 ,
                    
                    
                    
                ],
                [
                    'name_ar' => '8',
                    'name_en' => '8',
                    'code' => '8',
                    'order' => 8 , 
                     
                     
                    
                ],               
                [
                    'name_ar' => '9',
                    'name_en' => '9',
                    'code' => '9',
                    'order' => 9 ,
                    
                    
                    
                ],
            ] ,
            'HIGH'    => [
                [
                    'name_ar' => '10',
                    'name_en' => '10',
                    'code' => '10',
                    'order' => 10 ,
                    
                    
                    
                ],
                [
                    'name_ar' => '11',
                    'name_en' => '11',
                    'code' => '11',
                    'order' => 11 ,
                    
                    
                    
                ],
                [
                    'name_ar' => '12',
                    'name_en' => '12',
                    'code' => '12',
                    'order' => 12 ,
                    
                    
                    
                ],
            ] ,
        ];
        //---------------------------
        foreach ($studyLevels as $categoryCode => $levels){
            $studyLevelCategory = StudyLevelCategory::where(['code' => $categoryCode])->get()->first();
            foreach ($levels as $level){
                StudyLevel::create([
                    'name_ar' => $level['name_ar'],
                    'name_en' => $level['name_en'],
                    'code' => $level['code'],
                    'order' => $level['order'] ,
                    'is_active' => false ,
                    'with_summer_semester' => false ,
                    'has_apply_plan' => false ,
                    'category_id' => $studyLevelCategory->id,
                ]);
            }
        }
        //---------------------------
        // $this->call("OthersTableSeeder");
    }
}
