<?php

return [
    
    'create_users' => false,

    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'activities' => 'c,r,u,d',
            'messages' => 'c,r,u,d,s',
            'patrimony' => 'c,r,u,d',
            'branches' => 'c,r,u,d',
            'members' => 'r,d',
            'cult' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'shepherd' => [
            'activities' => 'c,r,u,d',
            'announcement' => 'c,r,u,d',
            'members' => 'r,d',
            'profile' => 'r,u'
        ],
        'worship_leader' => [
            'files' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'Member' => [
            'files' => 'r',
            'announcement' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'treasurer' => [
            'input' => 'c,r,u,d',
            'output' => 'c,r,u,d',
            'profile' => 'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        's'=>'send'
    ]
];
