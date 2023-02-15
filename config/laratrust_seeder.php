<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'user'  => 'c,r,u,d',
            'post' => 'c,r,u,d',
            'profile'  => 'c,r,u,d',
            'customer' => 'c,r,u,d',
            'farmer'   => 'c,r,u,d',
            'setting'  => 'c,r,u,d',
            'employee' =>'c,r,u,d',
        ],
        'employee' => [
            'user'   => 'c,r,u',
            'profile' => 'r,u',
            'customer' => 'c,r,u',
            'post' => 'r,u',
            'bank_statements' =>'r',
        ],
        'user' => [
            'profile' => 'c,r,u,d',
            'post' => 'r'
        ],
        // 'Account' => [
        //     'payments' => 'c,r,u',
        //     'bank_statements' =>'r',
        // ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
