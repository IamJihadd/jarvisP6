<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;

    private static $tasks = [
        [
            'id' => 1,
            'name' => 'tugas 3 statistik',
            'description' => 'menghitung probabilitas pada data yang diberikan',
            'deadline' => '2023-07-29',
            'status' => 'selesai'
        ],
        [
            'id' => 2,
            'name' => 'tugas 4 statistik',
            'description' => 'paten legalisir',
            'deadline' => '2023-08-29',
            'status' => 'selesai'
        ],
        [
            'id' => 3,
            'name' => 'tugas 5 statistik',
            'description' => 'menghitung probabilitas pada data yang didapatkan',
            'deadline' => '2023-09-29',
            'status' => 'belum selesai'
        ],
    ];

    public static function getALL()
    {
        return self::$tasks;
    }

    public static function getByid()
    {
        return self::$tasks['id'];
    }
}
