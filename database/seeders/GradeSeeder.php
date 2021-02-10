<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('grades')->insert([

            [
                'blok' => '1',
                'course_name' => 'Programme and Career Orientation',
                'test_name' => 'Assessment',
                'ec' => '2.5',
                'best_grade' => '6.5'
            ],
            [
                'blok' => '1',
                'course_name' => 'Computer Science Basics',
                'test_name' => 'Written',
                'ec' => '7.5',
                'best_grade' => '7.5'
            ],
            [
                'blok' => '1',
                'course_name' => 'Programming Basics',
                'test_name' => 'Case Study',
                'ec' => '5',
                'best_grade' => '8.0'
            ],
            [
                'blok' => '2',
                'course_name' => 'Objected Oriented Programming',
                'test_name' => 'Case Study/Project',
                'ec' => '10',
                'best_grade' => '6.2'
            ],
            [
                'blok' => '2',
                'course_name' => 'Professional Skills 1',
                'test_name' => 'Portfolio',
                'ec' => '2.5',
                'best_grade' => '6.4'
            ],
//            [
//                'blok' => '3',
//                'course_name' => 'Framework Project 1',
//                'test_name' => '',
//                'ec' => '',
//                'best_grade' => ''
//            ],
//            [
//                'blok' => '3',
//                'course_name' => 'Framework Development 1',
//                'test_name' => '',
//                'ec' => '',
//                'best_grade' => ''
//            ],
//            [
//                'blok' => '3',
//                'course_name' => 'Professional Working Environment',
//                'test_name' => '',
//                'ec' => '',
//                'best_grade' => ''
//            ],
//            [
//                'blok' => '3',
//                'course_name' => 'Professional Skills 2',
//                'test_name' => '',
//                'ec' => '',
//                'best_grade' => ''
//            ],
//            [
//                'blok' => '4',
//                'course_name' => '',
//                'test_name' => '',
//                'ec' => '',
//                'best_grade' => ''
//            ],
//            [
//                'blok' => '4',
//                'course_name' => '',
//                'test_name' => '',
//                'ec' => '',
//                'best_grade' => ''
//            ],
//            [
//                'blok' => '4',
//                'course_name' => '',
//                'test_name' => '',
//                'ec' => '',
//                'best_grade' => ''
//            ],

        ]);
    }
}
