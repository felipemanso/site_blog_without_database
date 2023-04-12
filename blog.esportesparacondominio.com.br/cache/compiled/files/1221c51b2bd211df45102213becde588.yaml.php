<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/esporteslogin/public_html/blog.esportesparacondominio.com.br/user/accounts/admin.yaml',
    'modified' => 1680827839,
    'size' => 700,
    'data' => [
        'state' => 'enabled',
        'email' => 'suporte@order-boxes.com',
        'fullname' => 'Admin do Blog',
        'title' => 'admin',
        'hashed_password' => '$2y$10$sgaKskLq1mfdHt95w5oaBuppmqVMlq45yuhcs1sL8d5ppmCf55Bam',
        'language' => 'pt',
        'content_editor' => 'default',
        'twofa_enabled' => false,
        'twofa_secret' => 'LUXDNN5B4XCIQWVBK75H2CQZUYTJET4D',
        'avatar' => [
            'user/accounts/avatars/qmd1cv7nlths0pn.png' => [
                'name' => 'qmd1cv7nlths0pn.png',
                'type' => 'image/png',
                'size' => 6546,
                'path' => 'user/accounts/avatars/qmd1cv7nlths0pn.png'
            ]
        ],
        'access' => [
            'site' => [
                'login' => true
            ],
            'admin' => [
                'login' => true,
                'super' => true,
                'cache' => true,
                'configuration' => true,
                'pages' => true,
                'maintenance' => true,
                'statistics' => true,
                'plugins' => true,
                'themes' => true,
                'tools' => true,
                'users' => true,
                'flex-objects' => true
            ]
        ]
    ]
];
