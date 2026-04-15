<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    protected $fillable = [
        'name',
        'guard_name',
        'is_system',
    ];

    protected function casts(): array
    {
        return [
            'is_system' => 'bool',
        ];
    }
}

