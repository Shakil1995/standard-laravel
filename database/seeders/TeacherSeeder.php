<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // DB::table('teachers')->insert([
        //     'teacher_name' => Str::random(10),
        //     'teacher_email' => Str::random(10).'@gmail.com',
        //     'teacher_phone' => Str::random(10),
        //     'teacher_address' => Str::random(10),
        //     'teacher_img'=>Str::random(10),
        // ]);
        $data=[
            [
                'teacher_name' => Str::random(10),
              'teacher_email' => Str::random(10).'@gmail.com',
                  'teacher_phone' => Str::random(10),
               'teacher_address' => Str::random(10),
                'teacher_img'=>Str::random(10),
            ],
            [
                'teacher_name' => Str::random(10),
              'teacher_email' => Str::random(10).'@gmail.com',
            'teacher_phone' =>Str::random(10),
            'teacher_address' => Str::random(10),
            'teacher_img'=>Str::random(10),
            ],
            [
                'teacher_name' => Str::random(10),
              'teacher_email' => Str::random(10).'@gmail.com',
                  'teacher_phone' => Str::random(10),
               'teacher_address' => Str::random(10),
                'teacher_img'=>Str::random(10),
            ]
            ];

DB::table('teachers')->insert($data);

    }
}
