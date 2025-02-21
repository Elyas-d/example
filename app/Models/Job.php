<?php

namespace App\Models;
class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'director',
                'salary' => '$60,000'
            ],
            [
                'id' => 2,
                'title' => 'programer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'teacher',
                'salary' => '$40,000'
            ]
        ];
    }
}
