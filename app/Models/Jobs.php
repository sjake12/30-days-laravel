<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Jobs {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'description' => 'We are looking for a PHP developer to join our team.',
            ],
            [
                'id' => 2,
                'title' => 'Frontend Developer',
                'description' => 'We are looking for a Frontend developer to join our team.',
            ],
            [
                'id' => 3,
                'title' => 'Backend Developer',
                'description' => 'We are looking for a Backend developer to join our team.',
            ],
        ];
    }

    public static function find($id): array
    {
       $job = Arr::first(Jobs::all(), fn ($job) => $job['id'] == $id);

       if (! $job){
           abort(404);
       }

       return $job;
    }
}
