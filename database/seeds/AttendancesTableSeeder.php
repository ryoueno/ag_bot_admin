<?php

use Illuminate\Database\Seeder;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DatabaseSeeder::truncateTable('attendances');

        $attendances = [
            [
                'id'         => 1,
                'lecture_id' => 1,
                'student_id' => 18114035,
                'is_acctive' => 1,
            ],            [
                'id'         => 2,
                'lecture_id' => 1,
                'student_id' => 18114034,
                'is_acctive' => 1,
            ],            [
                'id'         => 3,
                'lecture_id' => 1,
                'student_id' => 18114033,
                'is_acctive' => 0,
            ],
        ];

        foreach ($attendances as $attendance) {
            DB::table('attendances')->insert($attendance);
        }
    }
}
