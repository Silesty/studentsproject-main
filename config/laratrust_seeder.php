<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'chairman' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'cochirman' => [
            'profile' => 'r,u',
        ],
        'absent_commitie' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'exam_commitie' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'secretory' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'teacher' => [
            'module_1_name' => 'c,r,u,d',
        ],

    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
