<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);

        $user = User::create([
            'name'          => 'Admin',
            'email'         => 'admin@gmail.com',
            'password'      => bcrypt('adminsate'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user->assignRole('Admin');

        $user2 = User::create([
            'name'          => 'อาจารย์',
            'email'         => 'teacher@gmail.com',
            'password'      => bcrypt('adminsate'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user2->assignRole('Teacher');

        $user3 = User::create([
            'name'          => 'ผู้ปกครอง',
            'email'         => 'parent@gmail.com',
            'password'      => bcrypt('adminsate'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user3->assignRole('Parent');

        $user4 = User::create([
            'name'          => 'นักเรียน',
            'email'         => 'student@gmail.com',
            'password'      => bcrypt('adminsate'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user4->assignRole('Student');


        DB::table('teachers')->insert([
            [
                'user_id'           => $user2->id,
                'gender'            => 'male',
                'phone'             => '0625952829',
                'dateofbirth'       => '1993-01-14',
                'current_address'   => '199 หมู่9 ต.รางหวาย อ.พนมทวน จ.กาญจนบุรี 71170',
                'permanent_address' => 'กาญจนบุรี อู่ทอง',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('parents')->insert([
            [
                'user_id'           => $user3->id,
                'gender'            => 'male',
                'phone'             => '0933953969',
                'current_address'   => 'กาญจนบุรี อู่ทอง',
                'permanent_address' => 'กาญจนบุรี อู่ทอง',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('grades')->insert([
            'teacher_id'        => 1,
            'class_numeric'     => 1,
            'class_name'        => 'math101',
            'class_description' => 'class one'
        ]);

        DB::table('students')->insert([
            [
                'user_id'           => $user4->id,
                'parent_id'         => 1,
                'class_id'          => 1,
                'roll_number'       => 1,
                'gender'            => 'male',
                'phone'             => '0801256654',
                'dateofbirth'       => '2007-04-11',
                'current_address'   => 'นครศรีธรรมราช',
                'permanent_address' => 'นครศรีธรรมราช',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

    }
}
