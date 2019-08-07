<?php

use Illuminate\Database\Seeder;

class UserDepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_departments')->delete();
        
        \DB::table('user_departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'department_id' => 1,
                'created_at' => '2019-04-28 10:20:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'department_id' => 1,
                'created_at' => '2019-04-28 13:10:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1009950,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1104546,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1109784,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1127877,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1128149,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1150190,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1151201,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1151202,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 3000437,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 3000452,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 3000627,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 3000676,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 3000718,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 3000726,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 3000734,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 3000775,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 3001120,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 3001211,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 3001849,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 3002904,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 3007424,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 3008596,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 3011061,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 3012267,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 3012333,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 3014362,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 3015484,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 3016912,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 3023579,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 3026630,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 3026689,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 3027109,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 3032075,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 3033156,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 3033461,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 3035979,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 3036902,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 3040060,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 3041159,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 3041852,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 3043221,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 3043999,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 3044591,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 3046869,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 3047651,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 3047685,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 3048055,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 3049442,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 3051216,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 3051752,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 3051828,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => 3052271,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => 3055944,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'user_id' => 3056306,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'user_id' => 3058088,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'user_id' => 3058922,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'user_id' => 3059516,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'user_id' => 3059573,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'user_id' => 3059607,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'user_id' => 3059714,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'user_id' => 3062338,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'user_id' => 3063708,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'user_id' => 3065943,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'user_id' => 3067592,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'user_id' => 3067956,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'user_id' => 3068624,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'user_id' => 3068921,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'user_id' => 3068947,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'user_id' => 3069846,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'user_id' => 3072121,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'user_id' => 3072162,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'user_id' => 3072790,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'user_id' => 3072931,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'user_id' => 3073640,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'user_id' => 3073665,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'user_id' => 3073830,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'user_id' => 3075066,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'user_id' => 3075835,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'user_id' => 3075918,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'user_id' => 3076692,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'user_id' => 3076973,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'user_id' => 3077336,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'user_id' => 3078516,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'user_id' => 3078532,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'user_id' => 3078557,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'user_id' => 3080116,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'user_id' => 3081577,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'user_id' => 3081601,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'user_id' => 3081635,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'user_id' => 3081841,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'user_id' => 3082005,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'user_id' => 3084589,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'user_id' => 3084886,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'user_id' => 3084910,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'user_id' => 3085123,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'user_id' => 3087384,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'user_id' => 3091451,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'user_id' => 3093200,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'user_id' => 3100922,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'user_id' => 3100989,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'user_id' => 3100997,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'user_id' => 3101185,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'user_id' => 3101268,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'user_id' => 3101318,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'user_id' => 3101391,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'user_id' => 3101672,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'user_id' => 3101730,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'user_id' => 3102761,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'user_id' => 3102894,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'user_id' => 3104361,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'user_id' => 3105301,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'user_id' => 3106705,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'user_id' => 3106721,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'user_id' => 3107026,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'user_id' => 3107042,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'user_id' => 3107521,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'user_id' => 3107588,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'user_id' => 3108123,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'user_id' => 3108180,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'user_id' => 3108297,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'user_id' => 3108370,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'user_id' => 3109691,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'user_id' => 3110152,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'user_id' => 3110178,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'user_id' => 3110608,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'user_id' => 3110632,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'user_id' => 3111077,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'user_id' => 3111325,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'user_id' => 3111333,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'user_id' => 3111341,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'user_id' => 3111358,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'user_id' => 3111390,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'user_id' => 3112653,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'user_id' => 3112695,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'user_id' => 3113727,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'user_id' => 3113750,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'user_id' => 3116332,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'user_id' => 3116365,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'user_id' => 3116456,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'user_id' => 3116522,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'user_id' => 3116589,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'user_id' => 3116605,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'user_id' => 3116639,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'user_id' => 3116928,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'user_id' => 3117009,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'user_id' => 3117124,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'user_id' => 3117298,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'user_id' => 3117330,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'user_id' => 3117447,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'user_id' => 3130523,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'user_id' => 3130531,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'user_id' => 3130549,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'user_id' => 3130697,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'user_id' => 3130978,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'user_id' => 3130994,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'user_id' => 3131133,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'user_id' => 3133170,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'user_id' => 3133998,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'user_id' => 3134335,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'user_id' => 3137064,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'user_id' => 3137536,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'user_id' => 3137585,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'user_id' => 3137593,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'user_id' => 3137601,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'user_id' => 3137809,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'user_id' => 3137957,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'user_id' => 3137973,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'user_id' => 3138120,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'user_id' => 3138138,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'user_id' => 3138161,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'user_id' => 3138195,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'user_id' => 3138484,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'user_id' => 3138492,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'user_id' => 3138500,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'user_id' => 3138518,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'user_id' => 3138534,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'user_id' => 3138559,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'user_id' => 3138583,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'user_id' => 3138625,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'user_id' => 3138633,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'user_id' => 3138872,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'user_id' => 3139052,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'user_id' => 3139086,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'user_id' => 3139128,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'user_id' => 3139136,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'user_id' => 3139169,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:02',
                'updated_at' => '2019-07-10 02:27:02',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'user_id' => 3139193,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'user_id' => 3139326,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'user_id' => 3139383,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'user_id' => 3139391,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'user_id' => 3139508,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'user_id' => 3139532,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'user_id' => 3139565,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'user_id' => 3139672,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'user_id' => 3139722,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'user_id' => 3139730,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'user_id' => 3140019,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'user_id' => 3140027,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'user_id' => 3140035,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'user_id' => 3140100,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'user_id' => 3140167,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'user_id' => 3140209,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'user_id' => 3140290,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'user_id' => 3140308,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'user_id' => 3140324,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'user_id' => 3140423,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'user_id' => 3140563,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'user_id' => 3140589,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'user_id' => 3140639,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'user_id' => 3140712,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'user_id' => 3140779,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'user_id' => 3140886,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'user_id' => 3140894,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'user_id' => 3140944,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'user_id' => 3140951,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'user_id' => 3140969,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'user_id' => 3141033,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'user_id' => 3141074,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'user_id' => 3141116,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'user_id' => 3141140,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'user_id' => 3141181,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'user_id' => 3141207,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'user_id' => 3141215,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'user_id' => 3141223,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'user_id' => 3141231,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'user_id' => 3141249,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'user_id' => 3141256,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'user_id' => 3141264,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'user_id' => 3141272,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'user_id' => 3141298,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'user_id' => 3141306,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'user_id' => 3141314,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'user_id' => 3141348,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'user_id' => 3141355,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'user_id' => 3141363,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'user_id' => 3141371,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'user_id' => 3141470,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'user_id' => 3141488,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'user_id' => 3141496,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'user_id' => 3141512,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'user_id' => 3141587,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'user_id' => 3141652,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'user_id' => 3141660,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'user_id' => 3141744,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'user_id' => 3142577,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'user_id' => 3142619,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'user_id' => 3142650,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'user_id' => 3142684,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'user_id' => 3143252,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'user_id' => 3143401,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'user_id' => 3143435,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'user_id' => 3143500,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'user_id' => 3143518,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'user_id' => 3152261,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'user_id' => 3152295,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'user_id' => 3152303,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'user_id' => 3152329,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'user_id' => 3152337,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'user_id' => 3152378,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'user_id' => 3153905,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'user_id' => 3154051,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'user_id' => 3154069,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'user_id' => 3154077,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'user_id' => 3154234,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'user_id' => 3154259,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'user_id' => 3154515,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'user_id' => 3154531,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'user_id' => 3155553,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'user_id' => 3155769,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'user_id' => 3200004,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'user_id' => 3200005,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'user_id' => 3200007,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'user_id' => 3200008,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'user_id' => 3200009,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'user_id' => 3200010,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'user_id' => 3200013,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'user_id' => 3200015,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'user_id' => 3200016,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'user_id' => 3200017,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'user_id' => 3200018,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'user_id' => 3200020,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'user_id' => 3200023,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'user_id' => 3200024,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'user_id' => 3200026,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'user_id' => 3200027,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'user_id' => 3200029,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'user_id' => 3200031,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'user_id' => 3200032,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'user_id' => 3200033,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'user_id' => 3200035,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'user_id' => 3200037,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'user_id' => 3200038,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'user_id' => 3200039,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'user_id' => 3200040,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'user_id' => 3200043,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'user_id' => 3200044,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'user_id' => 3200048,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'user_id' => 3200049,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'user_id' => 3200051,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'user_id' => 3200053,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'user_id' => 3200056,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'user_id' => 3200057,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'user_id' => 3200059,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'user_id' => 3200063,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'user_id' => 3200066,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'user_id' => 3200067,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'user_id' => 3200069,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'user_id' => 3200071,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'user_id' => 3200072,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'user_id' => 3200073,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'user_id' => 3200074,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'user_id' => 3200075,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'user_id' => 3200077,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'user_id' => 3200078,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'user_id' => 3200079,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'user_id' => 3200080,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'user_id' => 3200081,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'user_id' => 3200083,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'user_id' => 3200084,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'user_id' => 3200085,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'user_id' => 3200086,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'user_id' => 3200087,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'user_id' => 3200088,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'user_id' => 3200089,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'user_id' => 3200090,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'user_id' => 3200091,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'user_id' => 3200092,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'user_id' => 3200093,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'user_id' => 3200096,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'user_id' => 3200097,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'user_id' => 3200098,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'user_id' => 3200099,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'user_id' => 3200100,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'user_id' => 3200101,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'user_id' => 3200103,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'user_id' => 3200104,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'user_id' => 3200106,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'user_id' => 3200109,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'user_id' => 3200111,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'user_id' => 3200113,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'user_id' => 3200114,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'user_id' => 3200115,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'user_id' => 3200116,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'user_id' => 3200117,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'user_id' => 3200118,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'user_id' => 3200119,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'user_id' => 3200120,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'user_id' => 3200122,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'user_id' => 3200123,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'user_id' => 3200124,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'user_id' => 3200125,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'user_id' => 3200126,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'user_id' => 3200127,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'user_id' => 3200128,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'user_id' => 3200129,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'user_id' => 3200131,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'user_id' => 3200132,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'user_id' => 3200133,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'user_id' => 3200134,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'user_id' => 3200135,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'user_id' => 3200137,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'user_id' => 3200138,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'user_id' => 3200139,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'user_id' => 3200140,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'user_id' => 3200141,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'user_id' => 3200142,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'user_id' => 3200143,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'user_id' => 3200144,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'user_id' => 3200145,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'user_id' => 3200146,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'user_id' => 3200147,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'user_id' => 3200148,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'user_id' => 3200149,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'user_id' => 3200150,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'user_id' => 3200151,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'user_id' => 3200152,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'user_id' => 3200153,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'user_id' => 3200154,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'user_id' => 3200155,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'user_id' => 3200156,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'user_id' => 3200158,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'user_id' => 3200159,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'user_id' => 3200160,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'user_id' => 3200161,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'user_id' => 3200162,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'user_id' => 3200163,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'user_id' => 3200164,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'user_id' => 3200165,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'user_id' => 3200166,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'user_id' => 3200168,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'user_id' => 3200169,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'user_id' => 3200170,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'user_id' => 3200171,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'user_id' => 3200172,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'user_id' => 3200173,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'user_id' => 3200174,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'user_id' => 3200176,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'user_id' => 3200177,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'user_id' => 3200178,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'user_id' => 3200179,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'user_id' => 3200180,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'user_id' => 3200181,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'user_id' => 3200184,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'user_id' => 3200186,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'user_id' => 3200189,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'user_id' => 3200190,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'user_id' => 3200191,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'user_id' => 3200192,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'user_id' => 3200193,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'user_id' => 3200194,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'user_id' => 3200195,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'user_id' => 3200196,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'user_id' => 3200197,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'user_id' => 3200198,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'user_id' => 3200200,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'user_id' => 3200201,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'user_id' => 3200202,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'user_id' => 3200203,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'user_id' => 3200204,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'user_id' => 3200205,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'user_id' => 3200208,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'user_id' => 3200209,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'user_id' => 3200210,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'user_id' => 3200213,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'user_id' => 3200214,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'user_id' => 3200215,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'user_id' => 3200216,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'user_id' => 3200218,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'user_id' => 3200219,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'user_id' => 3200220,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'user_id' => 3200222,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'user_id' => 3200228,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'user_id' => 3200229,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'user_id' => 3200230,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'user_id' => 3200231,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'user_id' => 3200232,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'user_id' => 3200233,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'user_id' => 3200234,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'user_id' => 3200235,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'user_id' => 3200236,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'user_id' => 3200238,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'user_id' => 3200239,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'user_id' => 3200240,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'user_id' => 3200241,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'user_id' => 3200242,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'user_id' => 3200243,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'user_id' => 3200244,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'user_id' => 3200245,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'user_id' => 3200246,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'user_id' => 3200247,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'user_id' => 3200248,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'user_id' => 3200249,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'user_id' => 3200250,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'user_id' => 3200251,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'user_id' => 3200252,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'user_id' => 3200256,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'user_id' => 3200257,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'user_id' => 3200258,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'user_id' => 3200259,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'user_id' => 3200261,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'user_id' => 3200262,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'user_id' => 3200263,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'user_id' => 3200264,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'user_id' => 3200265,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'user_id' => 3200266,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'user_id' => 3200268,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'user_id' => 3200269,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'user_id' => 3200270,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'user_id' => 3200271,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'user_id' => 3200272,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'user_id' => 3200273,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'user_id' => 3200274,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'user_id' => 3200275,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'user_id' => 3200276,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'user_id' => 3200277,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'user_id' => 3200278,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'user_id' => 3200279,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'user_id' => 3200280,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'user_id' => 3200281,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'user_id' => 3200282,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'user_id' => 3200283,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'user_id' => 3200284,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'user_id' => 3200285,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'user_id' => 3200286,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'user_id' => 3200287,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'user_id' => 3200288,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'user_id' => 3200289,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'user_id' => 3200290,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'user_id' => 3200291,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'user_id' => 3200292,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'user_id' => 3200293,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'user_id' => 3200294,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'user_id' => 3200296,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'user_id' => 3200297,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'user_id' => 3200299,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('user_departments')->insert(array (
            0 => 
            array (
                'id' => 501,
                'user_id' => 3200300,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'user_id' => 3200301,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'user_id' => 3200302,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'user_id' => 3200303,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'user_id' => 3200304,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'user_id' => 3200305,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'user_id' => 3200306,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'user_id' => 3200308,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'user_id' => 3200309,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'user_id' => 3200310,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'user_id' => 3200312,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'user_id' => 3200313,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'user_id' => 3200314,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'user_id' => 3200316,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'user_id' => 3200317,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'user_id' => 3200318,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'user_id' => 3200319,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'user_id' => 3200320,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'user_id' => 3200321,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'user_id' => 3200322,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'user_id' => 3200323,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'user_id' => 3200324,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'user_id' => 3200325,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'user_id' => 3200326,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'user_id' => 3200327,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'user_id' => 3200328,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'user_id' => 3200330,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'user_id' => 3200331,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'user_id' => 3200334,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'user_id' => 3200336,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'user_id' => 3200337,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'user_id' => 3200338,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'user_id' => 3200339,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'user_id' => 3200340,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'user_id' => 3200341,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'user_id' => 3200342,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'user_id' => 3200343,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'user_id' => 3200344,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'user_id' => 3200345,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'user_id' => 3200346,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'user_id' => 3200347,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'user_id' => 3200348,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'user_id' => 3200349,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'user_id' => 3200350,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'user_id' => 3200351,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'user_id' => 3200352,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'user_id' => 3200353,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'user_id' => 3200354,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'user_id' => 3200356,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'user_id' => 3200357,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
                'user_id' => 3200359,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'user_id' => 3200360,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:03',
                'updated_at' => '2019-07-10 02:27:03',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'user_id' => 3200362,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'user_id' => 3200363,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'user_id' => 3200364,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'user_id' => 3200365,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'user_id' => 3200367,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'user_id' => 3200368,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'user_id' => 3200369,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'user_id' => 3200370,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'user_id' => 3200371,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'user_id' => 3200372,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'user_id' => 3200373,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'user_id' => 3200374,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'user_id' => 3200375,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'user_id' => 3200376,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'user_id' => 3200378,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'user_id' => 3200379,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'user_id' => 3200380,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'user_id' => 3200381,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'user_id' => 3200382,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'user_id' => 3200383,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'user_id' => 3200384,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'user_id' => 3200385,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'user_id' => 3200386,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'user_id' => 3200387,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'user_id' => 3200389,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'user_id' => 3200390,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'user_id' => 3200391,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'user_id' => 3200392,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'user_id' => 3200393,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'user_id' => 3200394,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'user_id' => 3200395,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'user_id' => 3200396,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'user_id' => 3200399,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'user_id' => 3200400,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'user_id' => 3200401,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'user_id' => 3200402,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'user_id' => 3200403,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'user_id' => 3200404,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'user_id' => 3200405,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'user_id' => 3200406,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'user_id' => 3200407,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'user_id' => 3200409,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'user_id' => 3200410,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'user_id' => 3200411,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'user_id' => 3200412,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'user_id' => 3200413,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'user_id' => 3200415,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'user_id' => 3200419,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'user_id' => 3200420,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'user_id' => 3200421,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'user_id' => 3200422,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'user_id' => 3200423,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'user_id' => 3200424,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'user_id' => 3200425,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'user_id' => 3200426,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'user_id' => 3200427,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'user_id' => 3200428,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'user_id' => 3200429,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'user_id' => 3200430,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'user_id' => 3200431,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'user_id' => 3200432,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'user_id' => 3200433,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'user_id' => 3200434,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'user_id' => 3200435,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'user_id' => 3200436,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'user_id' => 3200437,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'user_id' => 3200440,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'user_id' => 3200441,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'user_id' => 3200442,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'user_id' => 3200444,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'user_id' => 3200445,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'user_id' => 3200446,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'user_id' => 3200448,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'user_id' => 3200450,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'user_id' => 3200451,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'user_id' => 3200452,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'user_id' => 3200454,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'user_id' => 3200456,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'user_id' => 3200457,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'user_id' => 3200458,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'user_id' => 3200459,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'user_id' => 3200460,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'user_id' => 3200461,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'user_id' => 3200462,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'user_id' => 3200463,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'user_id' => 3200464,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'user_id' => 3200465,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'user_id' => 3200467,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'user_id' => 3200468,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'user_id' => 3200469,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'user_id' => 3200470,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'user_id' => 3200471,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'user_id' => 3200472,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'user_id' => 3200474,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'user_id' => 3200475,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'user_id' => 3200476,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'user_id' => 3200477,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'user_id' => 3200478,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'user_id' => 3200479,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'user_id' => 3200480,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'user_id' => 3200481,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'user_id' => 3200482,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'user_id' => 3200483,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'user_id' => 3200484,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'user_id' => 3200485,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'user_id' => 3200486,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'user_id' => 3200487,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'user_id' => 3200488,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'user_id' => 3200489,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'user_id' => 3200490,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'user_id' => 3200491,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'user_id' => 3200493,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'user_id' => 3200494,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'user_id' => 3200495,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'user_id' => 3200496,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'user_id' => 3200497,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'user_id' => 3200498,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'user_id' => 3200499,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'user_id' => 3200500,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'user_id' => 3200501,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'user_id' => 3200502,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'user_id' => 3200503,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'user_id' => 3200504,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'user_id' => 3200505,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'user_id' => 3200506,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'user_id' => 3200507,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'user_id' => 3200508,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'user_id' => 3200509,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'user_id' => 3200510,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'user_id' => 3200511,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'user_id' => 3200512,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'user_id' => 3200513,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'user_id' => 3200514,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'user_id' => 3200515,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'user_id' => 3200516,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'user_id' => 3200517,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'user_id' => 3200518,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'user_id' => 3200519,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'user_id' => 3200520,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'user_id' => 3200521,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'user_id' => 3200522,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'user_id' => 3200523,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'user_id' => 3200524,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'user_id' => 3200525,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'user_id' => 3200526,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'user_id' => 3200527,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'user_id' => 3200528,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'user_id' => 3200529,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'user_id' => 3200530,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'user_id' => 3200532,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'user_id' => 3200533,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'user_id' => 3200534,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'user_id' => 3200535,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'user_id' => 3200536,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'user_id' => 3200537,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'user_id' => 3200538,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'user_id' => 3200539,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'user_id' => 3200540,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'user_id' => 3200542,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'user_id' => 3200543,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'user_id' => 3200544,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'user_id' => 3200545,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'user_id' => 3200546,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'user_id' => 3200547,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'user_id' => 3200548,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'user_id' => 3200549,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'user_id' => 3200550,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
                'user_id' => 3200551,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'user_id' => 3200552,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'user_id' => 3200553,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'user_id' => 3200554,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'user_id' => 3200555,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
                'user_id' => 3200556,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'user_id' => 3200557,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'user_id' => 3200558,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'user_id' => 3200560,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'user_id' => 3200561,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'user_id' => 3200562,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'user_id' => 3200563,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'user_id' => 3200564,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'user_id' => 3200566,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'user_id' => 3200568,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'user_id' => 3200569,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'user_id' => 3200570,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'user_id' => 3200571,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'user_id' => 3200572,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'user_id' => 3200573,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'user_id' => 3200578,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'user_id' => 3200579,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'user_id' => 3200580,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'user_id' => 3200581,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'user_id' => 3200582,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'user_id' => 3200583,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'user_id' => 3200584,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'user_id' => 3200586,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'user_id' => 3200587,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'user_id' => 3200588,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'user_id' => 3200589,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'user_id' => 3200590,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'user_id' => 3200591,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'user_id' => 3200592,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'user_id' => 3200593,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'user_id' => 3200594,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'user_id' => 3200595,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'user_id' => 3200596,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'user_id' => 3200597,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'user_id' => 3200598,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'user_id' => 3200599,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'user_id' => 3200600,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'user_id' => 3200601,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'user_id' => 3200602,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'user_id' => 3200603,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'user_id' => 3200604,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'user_id' => 3200605,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'user_id' => 3200606,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'user_id' => 3200607,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'user_id' => 3200608,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'user_id' => 3200609,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
                'user_id' => 3200610,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'user_id' => 3200611,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'user_id' => 3200612,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'user_id' => 3200613,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 775,
                'user_id' => 3200614,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 776,
                'user_id' => 3200615,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'user_id' => 3200616,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 778,
                'user_id' => 3200618,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 779,
                'user_id' => 3200619,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 780,
                'user_id' => 3200620,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 781,
                'user_id' => 3200621,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 782,
                'user_id' => 3200623,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'user_id' => 3200624,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 784,
                'user_id' => 3200625,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 785,
                'user_id' => 3200626,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 786,
                'user_id' => 3200627,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 787,
                'user_id' => 3200628,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 788,
                'user_id' => 3200630,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 789,
                'user_id' => 3200631,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 790,
                'user_id' => 3200632,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'user_id' => 3200633,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 792,
                'user_id' => 3200634,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 793,
                'user_id' => 3200635,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 794,
                'user_id' => 3200636,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 795,
                'user_id' => 3200637,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 796,
                'user_id' => 3200638,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 797,
                'user_id' => 3200639,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'user_id' => 3200640,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 799,
                'user_id' => 3200641,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'user_id' => 3200642,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 801,
                'user_id' => 3200643,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 802,
                'user_id' => 3200644,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 803,
                'user_id' => 3200645,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 804,
                'user_id' => 3200646,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 805,
                'user_id' => 3200647,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 806,
                'user_id' => 3200648,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 807,
                'user_id' => 3200649,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'user_id' => 3200650,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 809,
                'user_id' => 3200651,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 810,
                'user_id' => 3200652,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 811,
                'user_id' => 3200653,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 812,
                'user_id' => 3200655,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 813,
                'user_id' => 3200656,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 814,
                'user_id' => 3200657,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 815,
                'user_id' => 3200659,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 816,
                'user_id' => 3200660,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 817,
                'user_id' => 3200661,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 818,
                'user_id' => 3200662,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 819,
                'user_id' => 3200663,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 820,
                'user_id' => 3200664,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 821,
                'user_id' => 3200665,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'user_id' => 3200666,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 823,
                'user_id' => 3200667,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 824,
                'user_id' => 3200668,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'user_id' => 3200669,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 826,
                'user_id' => 3200670,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 827,
                'user_id' => 3200671,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'user_id' => 3200672,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'user_id' => 3200673,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'user_id' => 3200674,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 831,
                'user_id' => 3200675,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'user_id' => 3200676,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'user_id' => 3200677,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 834,
                'user_id' => 3200678,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 835,
                'user_id' => 3200679,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'user_id' => 3200680,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 837,
                'user_id' => 3200681,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 838,
                'user_id' => 3200683,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 839,
                'user_id' => 3200684,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 840,
                'user_id' => 3200685,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 841,
                'user_id' => 3200686,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 842,
                'user_id' => 3200687,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 843,
                'user_id' => 3200688,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 844,
                'user_id' => 3200689,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 845,
                'user_id' => 3200690,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'user_id' => 3200691,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 847,
                'user_id' => 3200692,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 848,
                'user_id' => 3200693,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 849,
                'user_id' => 3200695,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 850,
                'user_id' => 3200696,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 851,
                'user_id' => 3200697,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 852,
                'user_id' => 3200699,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 853,
                'user_id' => 3200700,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 854,
                'user_id' => 3200702,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 855,
                'user_id' => 3200705,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 856,
                'user_id' => 3200706,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 857,
                'user_id' => 3200709,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 858,
                'user_id' => 3200710,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 859,
                'user_id' => 3200711,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 860,
                'user_id' => 3200713,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 861,
                'user_id' => 3200714,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 862,
                'user_id' => 3200715,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 863,
                'user_id' => 3200716,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 864,
                'user_id' => 3200717,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 865,
                'user_id' => 3200718,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 866,
                'user_id' => 3200719,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 867,
                'user_id' => 3200720,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 868,
                'user_id' => 3200722,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 869,
                'user_id' => 3200723,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 870,
                'user_id' => 3200726,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 871,
                'user_id' => 3200727,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 872,
                'user_id' => 3200728,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 873,
                'user_id' => 3200729,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 874,
                'user_id' => 3200730,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 875,
                'user_id' => 3200732,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 876,
                'user_id' => 3200734,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 877,
                'user_id' => 3200735,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 878,
                'user_id' => 3200736,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 879,
                'user_id' => 3200740,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 880,
                'user_id' => 3200741,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 881,
                'user_id' => 3200742,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 882,
                'user_id' => 3200743,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'user_id' => 3200744,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 884,
                'user_id' => 3200745,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 885,
                'user_id' => 3200746,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 886,
                'user_id' => 3200747,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 887,
                'user_id' => 3200749,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 888,
                'user_id' => 3200750,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 889,
                'user_id' => 3200751,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 890,
                'user_id' => 3200752,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 891,
                'user_id' => 3200753,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 892,
                'user_id' => 3200754,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 893,
                'user_id' => 3200760,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 894,
                'user_id' => 3200762,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 895,
                'user_id' => 3200763,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 896,
                'user_id' => 3200764,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 897,
                'user_id' => 3200765,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 898,
                'user_id' => 3200766,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 899,
                'user_id' => 3200767,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 900,
                'user_id' => 3200768,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 901,
                'user_id' => 3200769,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 902,
                'user_id' => 3200770,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 903,
                'user_id' => 3200771,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 904,
                'user_id' => 3200773,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:04',
                'updated_at' => '2019-07-10 02:27:04',
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 905,
                'user_id' => 3200774,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 906,
                'user_id' => 3200775,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 907,
                'user_id' => 3200776,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 908,
                'user_id' => 3200778,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 909,
                'user_id' => 3200779,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 910,
                'user_id' => 3200780,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 911,
                'user_id' => 3200781,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 912,
                'user_id' => 3200782,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 913,
                'user_id' => 3200783,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 914,
                'user_id' => 3200784,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 915,
                'user_id' => 3200785,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 916,
                'user_id' => 3200786,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 917,
                'user_id' => 3200787,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'user_id' => 3200788,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 919,
                'user_id' => 3200789,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 920,
                'user_id' => 3200790,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 921,
                'user_id' => 3200792,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 922,
                'user_id' => 3200794,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 923,
                'user_id' => 3200795,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'user_id' => 3200796,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'user_id' => 3200797,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 926,
                'user_id' => 3200798,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 927,
                'user_id' => 3200799,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 928,
                'user_id' => 3200800,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 929,
                'user_id' => 3200801,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 930,
                'user_id' => 3200802,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 931,
                'user_id' => 3200803,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 932,
                'user_id' => 3200804,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 933,
                'user_id' => 3200805,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 934,
                'user_id' => 3200806,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 935,
                'user_id' => 3200807,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 936,
                'user_id' => 3200808,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 937,
                'user_id' => 3200809,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 938,
                'user_id' => 3200810,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 939,
                'user_id' => 3200811,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 940,
                'user_id' => 3200812,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 941,
                'user_id' => 3200813,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 942,
                'user_id' => 3200814,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 943,
                'user_id' => 3200815,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 944,
                'user_id' => 3200816,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 945,
                'user_id' => 3200817,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 946,
                'user_id' => 3200825,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 947,
                'user_id' => 3200826,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 948,
                'user_id' => 3200827,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 949,
                'user_id' => 3200828,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 950,
                'user_id' => 3200829,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 951,
                'user_id' => 3200830,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 952,
                'user_id' => 3200831,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 953,
                'user_id' => 3200832,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 954,
                'user_id' => 3200833,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 955,
                'user_id' => 3200834,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 956,
                'user_id' => 3200835,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 957,
                'user_id' => 3200836,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'user_id' => 3200837,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 959,
                'user_id' => 3200838,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 960,
                'user_id' => 3200839,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 961,
                'user_id' => 3200840,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 962,
                'user_id' => 3200841,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 963,
                'user_id' => 3200842,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 964,
                'user_id' => 3200843,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 965,
                'user_id' => 3200844,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 966,
                'user_id' => 3200845,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 967,
                'user_id' => 3200846,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 968,
                'user_id' => 3200847,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 969,
                'user_id' => 3200848,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 970,
                'user_id' => 3200849,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 971,
                'user_id' => 3200850,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 972,
                'user_id' => 3200851,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 973,
                'user_id' => 3200852,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 974,
                'user_id' => 3200853,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 975,
                'user_id' => 3200854,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 976,
                'user_id' => 3200855,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 977,
                'user_id' => 3200856,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 978,
                'user_id' => 3200857,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 979,
                'user_id' => 3200858,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 980,
                'user_id' => 3200859,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 981,
                'user_id' => 3200860,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 982,
                'user_id' => 3200861,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 983,
                'user_id' => 3200862,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 984,
                'user_id' => 3200863,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 985,
                'user_id' => 3200864,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 986,
                'user_id' => 3200865,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 987,
                'user_id' => 3200866,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 988,
                'user_id' => 3200867,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 989,
                'user_id' => 3200868,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 990,
                'user_id' => 3200870,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 991,
                'user_id' => 3200871,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 992,
                'user_id' => 3200872,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 993,
                'user_id' => 3200873,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 994,
                'user_id' => 3200874,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 995,
                'user_id' => 3200876,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'user_id' => 3200878,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 997,
                'user_id' => 3200879,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'user_id' => 3200880,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 999,
                'user_id' => 3200881,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1000,
                'user_id' => 3200882,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('user_departments')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'user_id' => 3200883,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1002,
                'user_id' => 3200886,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1003,
                'user_id' => 3200887,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1004,
                'user_id' => 3200889,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1005,
                'user_id' => 3200890,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1006,
                'user_id' => 3200891,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1007,
                'user_id' => 3200892,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1008,
                'user_id' => 3200893,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1009,
                'user_id' => 3200894,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010,
                'user_id' => 3200895,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'user_id' => 3200897,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1012,
                'user_id' => 3200898,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1013,
                'user_id' => 3200899,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1014,
                'user_id' => 3200900,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1015,
                'user_id' => 3200901,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1016,
                'user_id' => 3200902,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1017,
                'user_id' => 3200904,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1018,
                'user_id' => 3200905,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1019,
                'user_id' => 3200906,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1020,
                'user_id' => 3200907,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'user_id' => 3200909,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1022,
                'user_id' => 3200910,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'user_id' => 3200915,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1024,
                'user_id' => 3200916,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1025,
                'user_id' => 3200917,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1026,
                'user_id' => 3200918,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1027,
                'user_id' => 3200919,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1028,
                'user_id' => 3200920,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'user_id' => 3200921,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
                'user_id' => 3200922,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1031,
                'user_id' => 3200923,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1032,
                'user_id' => 3200924,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1033,
                'user_id' => 3200925,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1034,
                'user_id' => 3200926,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'user_id' => 3200927,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'user_id' => 3200928,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1037,
                'user_id' => 3200934,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1038,
                'user_id' => 3200935,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'user_id' => 3200936,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'user_id' => 3200937,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1041,
                'user_id' => 3200938,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1042,
                'user_id' => 3200939,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'user_id' => 3200940,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1044,
                'user_id' => 3200941,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1045,
                'user_id' => 3200942,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1046,
                'user_id' => 3200943,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1047,
                'user_id' => 3200944,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1048,
                'user_id' => 3200945,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1049,
                'user_id' => 3200947,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1050,
                'user_id' => 3200948,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1051,
                'user_id' => 3200951,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1052,
                'user_id' => 3200952,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1053,
                'user_id' => 3200953,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1054,
                'user_id' => 3200954,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1055,
                'user_id' => 3200956,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'user_id' => 3200957,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1057,
                'user_id' => 3200958,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1058,
                'user_id' => 3200959,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1059,
                'user_id' => 3200960,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1060,
                'user_id' => 3200961,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1061,
                'user_id' => 3200962,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1062,
                'user_id' => 3200963,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1063,
                'user_id' => 3200964,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1064,
                'user_id' => 3200965,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1065,
                'user_id' => 3200966,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1066,
                'user_id' => 3200967,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1067,
                'user_id' => 3200968,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1068,
                'user_id' => 3200969,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1069,
                'user_id' => 3200970,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1070,
                'user_id' => 3200972,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1071,
                'user_id' => 3200974,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1072,
                'user_id' => 3200975,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1073,
                'user_id' => 3200976,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1074,
                'user_id' => 3200977,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1075,
                'user_id' => 3200978,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1076,
                'user_id' => 3200979,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1077,
                'user_id' => 3200980,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1078,
                'user_id' => 3200981,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1079,
                'user_id' => 3200982,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1080,
                'user_id' => 3200983,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1081,
                'user_id' => 3200984,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1082,
                'user_id' => 3200985,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1083,
                'user_id' => 3200987,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1084,
                'user_id' => 3200988,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1085,
                'user_id' => 3200989,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1086,
                'user_id' => 3200990,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1087,
                'user_id' => 3200992,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1088,
                'user_id' => 3200995,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1089,
                'user_id' => 3200998,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1090,
                'user_id' => 3200999,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1091,
                'user_id' => 3201000,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'user_id' => 3201001,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1093,
                'user_id' => 3201003,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1094,
                'user_id' => 3201004,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1095,
                'user_id' => 3201005,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1096,
                'user_id' => 3201006,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1097,
                'user_id' => 3201008,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1098,
                'user_id' => 3201010,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1099,
                'user_id' => 3201011,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1100,
                'user_id' => 3201012,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1101,
                'user_id' => 3201013,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1102,
                'user_id' => 3201014,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1103,
                'user_id' => 3201015,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1104,
                'user_id' => 3201017,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1105,
                'user_id' => 3201018,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1106,
                'user_id' => 3201019,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1107,
                'user_id' => 3201020,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1108,
                'user_id' => 3201022,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1109,
                'user_id' => 3201023,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1110,
                'user_id' => 3201026,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1111,
                'user_id' => 3201027,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1112,
                'user_id' => 3201030,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1113,
                'user_id' => 3201031,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1114,
                'user_id' => 3201032,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1115,
                'user_id' => 3201033,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1116,
                'user_id' => 3201034,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1117,
                'user_id' => 3201035,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1118,
                'user_id' => 3201036,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1119,
                'user_id' => 3201037,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1120,
                'user_id' => 3201038,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1121,
                'user_id' => 3201040,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1122,
                'user_id' => 3201041,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1123,
                'user_id' => 3201042,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1124,
                'user_id' => 3201043,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1125,
                'user_id' => 3201044,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1126,
                'user_id' => 3201045,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1127,
                'user_id' => 3201046,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1128,
                'user_id' => 3201047,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1129,
                'user_id' => 3201051,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1130,
                'user_id' => 3201053,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1131,
                'user_id' => 3201054,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1132,
                'user_id' => 3201056,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1133,
                'user_id' => 3201058,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1134,
                'user_id' => 3201059,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1135,
                'user_id' => 3201060,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1136,
                'user_id' => 3201061,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1137,
                'user_id' => 3201062,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1138,
                'user_id' => 3201063,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1139,
                'user_id' => 3201065,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:05',
                'updated_at' => '2019-07-10 02:27:05',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1140,
                'user_id' => 3201066,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1141,
                'user_id' => 3201068,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1142,
                'user_id' => 3201070,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1143,
                'user_id' => 3201072,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1144,
                'user_id' => 3201074,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1145,
                'user_id' => 3201075,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1146,
                'user_id' => 3201076,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1147,
                'user_id' => 3201077,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1148,
                'user_id' => 3201078,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1149,
                'user_id' => 3201079,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1150,
                'user_id' => 3201081,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1151,
                'user_id' => 3201082,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1152,
                'user_id' => 3201084,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1153,
                'user_id' => 3201085,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1154,
                'user_id' => 3201086,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1155,
                'user_id' => 3201087,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1156,
                'user_id' => 3201088,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1157,
                'user_id' => 3201091,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1158,
                'user_id' => 3201092,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1159,
                'user_id' => 3201093,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1160,
                'user_id' => 3201096,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1161,
                'user_id' => 3201098,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1162,
                'user_id' => 3201100,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1163,
                'user_id' => 3201101,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1164,
                'user_id' => 3201102,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1165,
                'user_id' => 3201103,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1166,
                'user_id' => 3201104,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1167,
                'user_id' => 3201105,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1168,
                'user_id' => 3201106,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1169,
                'user_id' => 3201107,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1170,
                'user_id' => 3201108,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1171,
                'user_id' => 3201110,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1172,
                'user_id' => 3201114,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1173,
                'user_id' => 3201116,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1174,
                'user_id' => 3201117,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1175,
                'user_id' => 3201118,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1176,
                'user_id' => 3201119,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1177,
                'user_id' => 3201122,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1178,
                'user_id' => 3201123,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1179,
                'user_id' => 3201126,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1180,
                'user_id' => 3201127,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1181,
                'user_id' => 3201128,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1182,
                'user_id' => 3201129,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1183,
                'user_id' => 3201130,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1184,
                'user_id' => 3201131,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1185,
                'user_id' => 3201133,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1186,
                'user_id' => 3201134,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1187,
                'user_id' => 3201136,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1188,
                'user_id' => 3201137,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1189,
                'user_id' => 3201138,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1190,
                'user_id' => 3201139,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1191,
                'user_id' => 3201141,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1192,
                'user_id' => 3201144,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1193,
                'user_id' => 3201146,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1194,
                'user_id' => 3201147,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1195,
                'user_id' => 3201149,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1196,
                'user_id' => 3201150,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1197,
                'user_id' => 3201152,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1198,
                'user_id' => 3201153,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1199,
                'user_id' => 3201154,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1200,
                'user_id' => 3201155,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1201,
                'user_id' => 3201156,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1202,
                'user_id' => 3201157,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1203,
                'user_id' => 3201158,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1204,
                'user_id' => 3201159,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1205,
                'user_id' => 3201160,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1206,
                'user_id' => 3201161,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1207,
                'user_id' => 3201162,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1208,
                'user_id' => 3201163,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1209,
                'user_id' => 3201164,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1210,
                'user_id' => 3201165,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1211,
                'user_id' => 3201167,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1212,
                'user_id' => 3201168,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1213,
                'user_id' => 3201170,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1214,
                'user_id' => 3201171,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1215,
                'user_id' => 3201172,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1216,
                'user_id' => 3201174,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1217,
                'user_id' => 3201175,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1218,
                'user_id' => 3201176,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1219,
                'user_id' => 3201178,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1220,
                'user_id' => 3201179,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1221,
                'user_id' => 3201181,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1222,
                'user_id' => 3201182,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1223,
                'user_id' => 3201183,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1224,
                'user_id' => 3201184,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1225,
                'user_id' => 3201186,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1226,
                'user_id' => 3201187,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1227,
                'user_id' => 3201188,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1228,
                'user_id' => 3201189,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1229,
                'user_id' => 3201190,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1230,
                'user_id' => 3201191,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1231,
                'user_id' => 3201192,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1232,
                'user_id' => 3201193,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1233,
                'user_id' => 3201194,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1234,
                'user_id' => 3201195,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1235,
                'user_id' => 3201196,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1236,
                'user_id' => 3201197,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1237,
                'user_id' => 3201198,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1238,
                'user_id' => 3201200,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1239,
                'user_id' => 3201201,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1240,
                'user_id' => 3201202,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1241,
                'user_id' => 3201203,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1242,
                'user_id' => 3201205,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1243,
                'user_id' => 3201206,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1244,
                'user_id' => 3201207,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1245,
                'user_id' => 3201208,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1246,
                'user_id' => 3201209,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1247,
                'user_id' => 3201210,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1248,
                'user_id' => 3201211,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1249,
                'user_id' => 3201212,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1250,
                'user_id' => 3201215,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1251,
                'user_id' => 3201216,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1252,
                'user_id' => 3201217,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1253,
                'user_id' => 3201218,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1254,
                'user_id' => 3201219,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1255,
                'user_id' => 3201220,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1256,
                'user_id' => 3201221,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1257,
                'user_id' => 3201222,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1258,
                'user_id' => 3201223,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1259,
                'user_id' => 3201224,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1260,
                'user_id' => 3201225,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1261,
                'user_id' => 3201226,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1262,
                'user_id' => 3201227,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1263,
                'user_id' => 3201228,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1264,
                'user_id' => 3201230,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1265,
                'user_id' => 3201231,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1266,
                'user_id' => 3201232,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1267,
                'user_id' => 3201233,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1268,
                'user_id' => 3201234,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1269,
                'user_id' => 3201235,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1270,
                'user_id' => 3201236,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1271,
                'user_id' => 3201237,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1272,
                'user_id' => 3201239,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1273,
                'user_id' => 3201240,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1274,
                'user_id' => 3201241,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1275,
                'user_id' => 3201242,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1276,
                'user_id' => 3201243,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1277,
                'user_id' => 3201244,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1278,
                'user_id' => 3201245,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1279,
                'user_id' => 3201246,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1280,
                'user_id' => 3201247,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1281,
                'user_id' => 3201248,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1282,
                'user_id' => 3201249,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1283,
                'user_id' => 3201250,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1284,
                'user_id' => 3201251,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1285,
                'user_id' => 3201252,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1286,
                'user_id' => 3201253,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1287,
                'user_id' => 3201254,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1288,
                'user_id' => 3201255,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1289,
                'user_id' => 3201256,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1290,
                'user_id' => 3201257,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1291,
                'user_id' => 3201258,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1292,
                'user_id' => 3201260,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1293,
                'user_id' => 3201261,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1294,
                'user_id' => 3201262,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1295,
                'user_id' => 3201263,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1296,
                'user_id' => 3201265,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1297,
                'user_id' => 3201266,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1298,
                'user_id' => 3201267,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1299,
                'user_id' => 3201268,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1300,
                'user_id' => 3201269,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1301,
                'user_id' => 3201271,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1302,
                'user_id' => 3201272,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1303,
                'user_id' => 3201273,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1304,
                'user_id' => 3201275,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1305,
                'user_id' => 3201276,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1306,
                'user_id' => 3201277,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1307,
                'user_id' => 3201278,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1308,
                'user_id' => 3201279,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1309,
                'user_id' => 3201280,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1310,
                'user_id' => 3201281,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1311,
                'user_id' => 3201282,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1312,
                'user_id' => 3201283,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1313,
                'user_id' => 3201284,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1314,
                'user_id' => 3201285,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1315,
                'user_id' => 3201286,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1316,
                'user_id' => 3201287,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1317,
                'user_id' => 3201288,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1318,
                'user_id' => 3201291,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1319,
                'user_id' => 3201292,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1320,
                'user_id' => 3201293,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1321,
                'user_id' => 3201294,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1322,
                'user_id' => 3201295,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1323,
                'user_id' => 3201296,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1324,
                'user_id' => 3201297,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1325,
                'user_id' => 3201298,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1326,
                'user_id' => 3201299,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1327,
                'user_id' => 3201300,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1328,
                'user_id' => 3201301,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1329,
                'user_id' => 3201302,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1330,
                'user_id' => 3201303,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1331,
                'user_id' => 3201305,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1332,
                'user_id' => 3201306,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1333,
                'user_id' => 3201308,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1334,
                'user_id' => 3201309,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1335,
                'user_id' => 3201310,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1336,
                'user_id' => 3201311,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1337,
                'user_id' => 3201313,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1338,
                'user_id' => 3201314,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1339,
                'user_id' => 3201315,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1340,
                'user_id' => 3201316,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1341,
                'user_id' => 3201317,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1342,
                'user_id' => 3201318,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1343,
                'user_id' => 3201319,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1344,
                'user_id' => 3201320,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1345,
                'user_id' => 3201321,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1346,
                'user_id' => 3201322,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1347,
                'user_id' => 3201324,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1348,
                'user_id' => 3201325,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1349,
                'user_id' => 3201326,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1350,
                'user_id' => 3201327,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1351,
                'user_id' => 3201328,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1352,
                'user_id' => 3201330,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1353,
                'user_id' => 3201331,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1354,
                'user_id' => 3201332,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1355,
                'user_id' => 3201333,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1356,
                'user_id' => 3201334,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1357,
                'user_id' => 3201335,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1358,
                'user_id' => 3201337,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1359,
                'user_id' => 3201338,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1360,
                'user_id' => 3201339,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1361,
                'user_id' => 3201340,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1362,
                'user_id' => 3201341,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1363,
                'user_id' => 3201342,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1364,
                'user_id' => 3201343,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1365,
                'user_id' => 3201344,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1366,
                'user_id' => 3201345,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1367,
                'user_id' => 3201346,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1368,
                'user_id' => 3201347,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1369,
                'user_id' => 3201348,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1370,
                'user_id' => 3201349,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1371,
                'user_id' => 3201350,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1372,
                'user_id' => 3201351,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1373,
                'user_id' => 3201352,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1374,
                'user_id' => 3201353,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1375,
                'user_id' => 3201354,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1376,
                'user_id' => 3201355,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1377,
                'user_id' => 3201356,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1378,
                'user_id' => 3201357,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1379,
                'user_id' => 3201358,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1380,
                'user_id' => 3201359,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1381,
                'user_id' => 3201360,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1382,
                'user_id' => 3201361,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1383,
                'user_id' => 3201362,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1384,
                'user_id' => 3201363,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1385,
                'user_id' => 3201365,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1386,
                'user_id' => 3201366,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1387,
                'user_id' => 3201367,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1388,
                'user_id' => 3201369,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1389,
                'user_id' => 3201371,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1390,
                'user_id' => 3201372,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1391,
                'user_id' => 3201373,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1392,
                'user_id' => 3201374,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1393,
                'user_id' => 3201376,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1394,
                'user_id' => 3201377,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1395,
                'user_id' => 3201379,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1396,
                'user_id' => 3201380,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1397,
                'user_id' => 3201381,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1398,
                'user_id' => 3201382,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1399,
                'user_id' => 3201383,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1400,
                'user_id' => 3201384,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1401,
                'user_id' => 3201385,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1402,
                'user_id' => 3201386,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1403,
                'user_id' => 3201388,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1404,
                'user_id' => 3201389,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1405,
                'user_id' => 3201390,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1406,
                'user_id' => 3201391,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1407,
                'user_id' => 3201392,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1408,
                'user_id' => 3201393,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1409,
                'user_id' => 3201394,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1410,
                'user_id' => 3201395,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1411,
                'user_id' => 3201396,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1412,
                'user_id' => 3201398,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1413,
                'user_id' => 3201399,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1414,
                'user_id' => 3201400,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1415,
                'user_id' => 3201401,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1416,
                'user_id' => 3201402,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1417,
                'user_id' => 3201403,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:06',
                'updated_at' => '2019-07-10 02:27:06',
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1418,
                'user_id' => 3201404,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1419,
                'user_id' => 3201405,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1420,
                'user_id' => 3201406,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1421,
                'user_id' => 3201407,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1422,
                'user_id' => 3201408,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1423,
                'user_id' => 3201409,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1424,
                'user_id' => 3201410,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1425,
                'user_id' => 3201411,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1426,
                'user_id' => 3201412,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1427,
                'user_id' => 3201413,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1428,
                'user_id' => 3201414,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1429,
                'user_id' => 3201416,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1430,
                'user_id' => 3201417,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1431,
                'user_id' => 3201418,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1432,
                'user_id' => 3201419,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1433,
                'user_id' => 3201420,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1434,
                'user_id' => 3201421,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1435,
                'user_id' => 3201422,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1436,
                'user_id' => 3201423,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1437,
                'user_id' => 3201424,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1438,
                'user_id' => 3201425,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1439,
                'user_id' => 3201426,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1440,
                'user_id' => 3201427,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1441,
                'user_id' => 3201428,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1442,
                'user_id' => 3201429,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1443,
                'user_id' => 3201430,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1444,
                'user_id' => 3201431,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1445,
                'user_id' => 3201432,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1446,
                'user_id' => 3201433,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1447,
                'user_id' => 3201434,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1448,
                'user_id' => 3201435,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1449,
                'user_id' => 3201436,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1450,
                'user_id' => 3201437,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1451,
                'user_id' => 3201438,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1452,
                'user_id' => 3201439,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1453,
                'user_id' => 3201440,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1454,
                'user_id' => 3201441,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1455,
                'user_id' => 3201442,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1456,
                'user_id' => 3201443,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1457,
                'user_id' => 3201444,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1458,
                'user_id' => 3201445,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1459,
                'user_id' => 3201447,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1460,
                'user_id' => 3201450,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1461,
                'user_id' => 3201451,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1462,
                'user_id' => 3201452,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1463,
                'user_id' => 3201454,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1464,
                'user_id' => 3201455,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1465,
                'user_id' => 3201456,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1466,
                'user_id' => 3201457,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1467,
                'user_id' => 3201459,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1468,
                'user_id' => 3201460,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1469,
                'user_id' => 3201461,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1470,
                'user_id' => 3201462,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1471,
                'user_id' => 3201463,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1472,
                'user_id' => 3201464,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1473,
                'user_id' => 3201465,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1474,
                'user_id' => 3201466,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1475,
                'user_id' => 3201468,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1476,
                'user_id' => 3201469,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1477,
                'user_id' => 3201470,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1478,
                'user_id' => 3201471,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1479,
                'user_id' => 3201472,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1480,
                'user_id' => 3201473,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1481,
                'user_id' => 3201474,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1482,
                'user_id' => 3201475,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1483,
                'user_id' => 3201477,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1484,
                'user_id' => 3201478,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1485,
                'user_id' => 3201479,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1486,
                'user_id' => 3201480,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1487,
                'user_id' => 3201481,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1488,
                'user_id' => 3201482,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1489,
                'user_id' => 3201484,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1490,
                'user_id' => 3201486,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1491,
                'user_id' => 3201487,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1492,
                'user_id' => 3201488,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1493,
                'user_id' => 3201489,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1494,
                'user_id' => 3201490,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1495,
                'user_id' => 3201491,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1496,
                'user_id' => 3201492,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1497,
                'user_id' => 3201493,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1498,
                'user_id' => 3201494,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1499,
                'user_id' => 3201495,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1500,
                'user_id' => 3201496,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('user_departments')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'user_id' => 3201497,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1502,
                'user_id' => 3201498,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1503,
                'user_id' => 3201499,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1504,
                'user_id' => 3201500,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1505,
                'user_id' => 3201501,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1506,
                'user_id' => 3201502,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1507,
                'user_id' => 3201503,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1508,
                'user_id' => 3201504,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1509,
                'user_id' => 3201505,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1510,
                'user_id' => 3201506,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1511,
                'user_id' => 3201507,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1512,
                'user_id' => 3201508,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1513,
                'user_id' => 3201510,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1514,
                'user_id' => 3201511,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1515,
                'user_id' => 3201512,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1516,
                'user_id' => 3201513,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1517,
                'user_id' => 3201514,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1518,
                'user_id' => 3201515,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1519,
                'user_id' => 3201517,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1520,
                'user_id' => 3201518,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1521,
                'user_id' => 3201519,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1522,
                'user_id' => 3201520,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1523,
                'user_id' => 3201521,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1524,
                'user_id' => 3201522,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1525,
                'user_id' => 3201523,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1526,
                'user_id' => 3201524,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1527,
                'user_id' => 3201525,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1528,
                'user_id' => 3201526,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1529,
                'user_id' => 3201527,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1530,
                'user_id' => 3201528,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1531,
                'user_id' => 3201529,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1532,
                'user_id' => 3201530,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1533,
                'user_id' => 3201531,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1534,
                'user_id' => 3201533,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1535,
                'user_id' => 3201534,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1536,
                'user_id' => 3201535,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1537,
                'user_id' => 3201537,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1538,
                'user_id' => 3201538,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1539,
                'user_id' => 3201539,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1540,
                'user_id' => 3201541,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1541,
                'user_id' => 3201542,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1542,
                'user_id' => 3201543,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1543,
                'user_id' => 3201544,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1544,
                'user_id' => 3201545,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1545,
                'user_id' => 3201546,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1546,
                'user_id' => 3201547,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1547,
                'user_id' => 3201548,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1548,
                'user_id' => 3201549,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1549,
                'user_id' => 3201550,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1550,
                'user_id' => 3201551,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1551,
                'user_id' => 3201552,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1552,
                'user_id' => 3201554,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1553,
                'user_id' => 3201555,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1554,
                'user_id' => 3201556,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1555,
                'user_id' => 3201557,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1556,
                'user_id' => 3201558,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1557,
                'user_id' => 3201559,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1558,
                'user_id' => 3201560,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1559,
                'user_id' => 3201561,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1560,
                'user_id' => 3201562,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1561,
                'user_id' => 3201563,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1562,
                'user_id' => 3201564,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1563,
                'user_id' => 3201565,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1564,
                'user_id' => 3201566,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1565,
                'user_id' => 3201567,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1566,
                'user_id' => 3201568,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1567,
                'user_id' => 3201569,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1568,
                'user_id' => 3201570,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1569,
                'user_id' => 3201571,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1570,
                'user_id' => 3201572,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1571,
                'user_id' => 3201573,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1572,
                'user_id' => 3201575,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1573,
                'user_id' => 3201576,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1574,
                'user_id' => 3201577,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1575,
                'user_id' => 3201578,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1576,
                'user_id' => 3201579,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1577,
                'user_id' => 3201580,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1578,
                'user_id' => 3201581,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1579,
                'user_id' => 3201582,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1580,
                'user_id' => 3201583,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1581,
                'user_id' => 3201584,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1582,
                'user_id' => 3201585,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1583,
                'user_id' => 3201586,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1584,
                'user_id' => 3201587,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1585,
                'user_id' => 3201588,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1586,
                'user_id' => 3201589,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1587,
                'user_id' => 3201590,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1588,
                'user_id' => 3201591,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1589,
                'user_id' => 3201592,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1590,
                'user_id' => 3201593,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1591,
                'user_id' => 3201594,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1592,
                'user_id' => 3201595,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1593,
                'user_id' => 3201596,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1594,
                'user_id' => 3201597,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1595,
                'user_id' => 3201598,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1596,
                'user_id' => 3201599,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1597,
                'user_id' => 3201600,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1598,
                'user_id' => 3201603,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1599,
                'user_id' => 3201604,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1600,
                'user_id' => 3201606,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1601,
                'user_id' => 3201607,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1602,
                'user_id' => 3201610,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1603,
                'user_id' => 3201611,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1604,
                'user_id' => 3201612,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1605,
                'user_id' => 3201613,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1606,
                'user_id' => 3201614,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1607,
                'user_id' => 3201615,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1608,
                'user_id' => 3201616,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1609,
                'user_id' => 3201617,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1610,
                'user_id' => 3201618,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1611,
                'user_id' => 3201619,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1612,
                'user_id' => 3201620,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1613,
                'user_id' => 3201621,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1614,
                'user_id' => 3201623,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1615,
                'user_id' => 3201624,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1616,
                'user_id' => 3201625,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1617,
                'user_id' => 3201626,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1618,
                'user_id' => 3201627,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1619,
                'user_id' => 3201630,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1620,
                'user_id' => 3201631,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1621,
                'user_id' => 3201632,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1622,
                'user_id' => 3201634,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1623,
                'user_id' => 3201635,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1624,
                'user_id' => 3201636,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1625,
                'user_id' => 3201637,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1626,
                'user_id' => 3201638,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1627,
                'user_id' => 3201639,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1628,
                'user_id' => 3201640,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1629,
                'user_id' => 3201642,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1630,
                'user_id' => 3201643,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1631,
                'user_id' => 3201644,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1632,
                'user_id' => 3201645,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1633,
                'user_id' => 3201646,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1634,
                'user_id' => 3201647,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1635,
                'user_id' => 3201648,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1636,
                'user_id' => 3201649,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1637,
                'user_id' => 3201650,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1638,
                'user_id' => 3201651,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1639,
                'user_id' => 3201652,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1640,
                'user_id' => 3201653,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1641,
                'user_id' => 3201654,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1642,
                'user_id' => 3201655,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1643,
                'user_id' => 3201656,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1644,
                'user_id' => 3201657,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1645,
                'user_id' => 3201658,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1646,
                'user_id' => 3201659,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1647,
                'user_id' => 3201663,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1648,
                'user_id' => 3201664,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1649,
                'user_id' => 3201665,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1650,
                'user_id' => 3201671,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1651,
                'user_id' => 3201672,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1652,
                'user_id' => 3201673,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1653,
                'user_id' => 3201675,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1654,
                'user_id' => 3201676,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1655,
                'user_id' => 3201677,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1656,
                'user_id' => 3201678,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1657,
                'user_id' => 3201679,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1658,
                'user_id' => 3201680,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1659,
                'user_id' => 3201682,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1660,
                'user_id' => 3201683,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1661,
                'user_id' => 3201684,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1662,
                'user_id' => 3201685,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1663,
                'user_id' => 3201686,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1664,
                'user_id' => 3201687,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1665,
                'user_id' => 3201688,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1666,
                'user_id' => 3201689,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1667,
                'user_id' => 3201690,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1668,
                'user_id' => 3201691,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1669,
                'user_id' => 3201692,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1670,
                'user_id' => 3201693,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1671,
                'user_id' => 3201694,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1672,
                'user_id' => 3201695,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1673,
                'user_id' => 3201696,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1674,
                'user_id' => 3201697,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1675,
                'user_id' => 3201698,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1676,
                'user_id' => 3201700,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1677,
                'user_id' => 3201701,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1678,
                'user_id' => 3201702,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1679,
                'user_id' => 3201703,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1680,
                'user_id' => 3201704,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1681,
                'user_id' => 3201705,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1682,
                'user_id' => 3201706,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1683,
                'user_id' => 3201707,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1684,
                'user_id' => 3201708,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1685,
                'user_id' => 3201709,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1686,
                'user_id' => 3201710,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1687,
                'user_id' => 3201711,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1688,
                'user_id' => 3201712,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1689,
                'user_id' => 3201713,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1690,
                'user_id' => 3201714,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1691,
                'user_id' => 3201715,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1692,
                'user_id' => 3201716,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1693,
                'user_id' => 3201717,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1694,
                'user_id' => 3201718,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1695,
                'user_id' => 3201719,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1696,
                'user_id' => 3201720,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1697,
                'user_id' => 3201721,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1698,
                'user_id' => 3201722,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1699,
                'user_id' => 3201723,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1700,
                'user_id' => 3201724,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1701,
                'user_id' => 3201725,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1702,
                'user_id' => 3201726,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1703,
                'user_id' => 3201727,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1704,
                'user_id' => 3201728,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1705,
                'user_id' => 3201729,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1706,
                'user_id' => 3201730,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1707,
                'user_id' => 3201731,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1708,
                'user_id' => 3201732,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1709,
                'user_id' => 3201733,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1710,
                'user_id' => 3201734,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1711,
                'user_id' => 3201735,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1712,
                'user_id' => 3201736,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1713,
                'user_id' => 3201737,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1714,
                'user_id' => 3201738,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1715,
                'user_id' => 3201739,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:07',
                'updated_at' => '2019-07-10 02:27:07',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1716,
                'user_id' => 3201740,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1717,
                'user_id' => 3201741,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1718,
                'user_id' => 3201742,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1719,
                'user_id' => 3201743,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1720,
                'user_id' => 3201744,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1721,
                'user_id' => 3201745,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1722,
                'user_id' => 3201746,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1723,
                'user_id' => 3201747,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1724,
                'user_id' => 3201748,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1725,
                'user_id' => 3201749,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1726,
                'user_id' => 3201750,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1727,
                'user_id' => 3201751,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1728,
                'user_id' => 3201752,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1729,
                'user_id' => 3201753,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1730,
                'user_id' => 3201754,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1731,
                'user_id' => 3201755,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1732,
                'user_id' => 3201756,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1733,
                'user_id' => 3201757,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1734,
                'user_id' => 3201758,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1735,
                'user_id' => 3201759,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1736,
                'user_id' => 3201760,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1737,
                'user_id' => 3201761,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1738,
                'user_id' => 3201762,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1739,
                'user_id' => 3201763,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1740,
                'user_id' => 3201764,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1741,
                'user_id' => 3201765,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1742,
                'user_id' => 3201766,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1743,
                'user_id' => 3201767,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1744,
                'user_id' => 3201768,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1745,
                'user_id' => 3201769,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1746,
                'user_id' => 3201770,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1747,
                'user_id' => 3201771,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1748,
                'user_id' => 3201772,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1749,
                'user_id' => 3201773,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1750,
                'user_id' => 3201774,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1751,
                'user_id' => 3201775,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1752,
                'user_id' => 3201776,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1753,
                'user_id' => 3201777,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1754,
                'user_id' => 3201778,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1755,
                'user_id' => 3201779,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1756,
                'user_id' => 3201780,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1757,
                'user_id' => 3201781,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1758,
                'user_id' => 3201782,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1759,
                'user_id' => 3201783,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1760,
                'user_id' => 3201784,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1761,
                'user_id' => 3201786,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1762,
                'user_id' => 3201787,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1763,
                'user_id' => 3201788,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1764,
                'user_id' => 3201790,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1765,
                'user_id' => 3201791,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1766,
                'user_id' => 3201792,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1767,
                'user_id' => 3201793,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1768,
                'user_id' => 3201794,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1769,
                'user_id' => 3201795,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1770,
                'user_id' => 3201797,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1771,
                'user_id' => 3201798,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1772,
                'user_id' => 3201799,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1773,
                'user_id' => 3201800,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1774,
                'user_id' => 3201801,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1775,
                'user_id' => 3201802,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1776,
                'user_id' => 3201803,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1777,
                'user_id' => 3201805,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1778,
                'user_id' => 3201806,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1779,
                'user_id' => 3201807,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1780,
                'user_id' => 3201808,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1781,
                'user_id' => 3201809,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1782,
                'user_id' => 3201810,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1783,
                'user_id' => 3201811,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1784,
                'user_id' => 3201812,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1785,
                'user_id' => 3201813,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1786,
                'user_id' => 3201814,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1787,
                'user_id' => 3201816,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1788,
                'user_id' => 3201817,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1789,
                'user_id' => 3201818,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1790,
                'user_id' => 3201819,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1791,
                'user_id' => 3201821,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1792,
                'user_id' => 3201822,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1793,
                'user_id' => 3201823,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1794,
                'user_id' => 3201824,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1795,
                'user_id' => 3201825,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1796,
                'user_id' => 3201826,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1797,
                'user_id' => 3201827,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1798,
                'user_id' => 3201828,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1799,
                'user_id' => 3201829,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1800,
                'user_id' => 3201830,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1801,
                'user_id' => 3201831,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1802,
                'user_id' => 3201832,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1803,
                'user_id' => 3201834,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1804,
                'user_id' => 3201835,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1805,
                'user_id' => 3201836,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1806,
                'user_id' => 3201837,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1807,
                'user_id' => 3201838,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1808,
                'user_id' => 3201839,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1809,
                'user_id' => 3201840,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1810,
                'user_id' => 3201842,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1811,
                'user_id' => 3201843,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1812,
                'user_id' => 3201844,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1813,
                'user_id' => 3201845,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1814,
                'user_id' => 3201846,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1815,
                'user_id' => 3201847,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1816,
                'user_id' => 3201849,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1817,
                'user_id' => 3201850,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1818,
                'user_id' => 3201851,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1819,
                'user_id' => 3201852,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1820,
                'user_id' => 3201853,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1821,
                'user_id' => 3201854,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1822,
                'user_id' => 3201855,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1823,
                'user_id' => 3201856,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1824,
                'user_id' => 3201858,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1825,
                'user_id' => 3201859,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1826,
                'user_id' => 6000704,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1827,
                'user_id' => 6000785,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1828,
                'user_id' => 13201164,
                'department_id' => 1,
                'created_at' => '2019-07-10 02:27:08',
                'updated_at' => '2019-07-10 02:27:08',
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1829,
                'user_id' => 3016672,
                'department_id' => 1,
                'created_at' => '2019-07-01 14:15:00',
                'updated_at' => '2019-07-01 14:15:00',
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1830,
                'user_id' => 13201165,
                'department_id' => 1,
                'created_at' => '2019-07-12 08:28:29',
                'updated_at' => '2019-07-12 08:28:29',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}