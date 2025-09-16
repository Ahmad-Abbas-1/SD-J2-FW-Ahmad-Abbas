<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return $jobs = [
            [
                'id' => 1,
                'title' => 'Captain',
                'salary' => '1 willion doubloons',
            ],
            [
                'id' => 2,
                'title' => 'bilge rat',
                'salary' => '1 dolar',
            ],
            [
                'id' => 3,
                'title' => 'Landlubber',
                'salary' => '0 riches, 0 glory, no treasure😡😡😡😡😡',
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}