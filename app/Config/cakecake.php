<?php

$config['Settings'] = [
    'version' => '2.0',
    'title' => 'cakecake',
    'description' => 'command based cms',
    'logo-small' => '',
    'copyright' => 'Sam',
    'site_url' => 'https://github.com/cable8mm',
];

$config['Menus'] = [
    ['title' => '홈', 'url' => '/',
        'children' => [
            ['title' => 'Users', 'url' => '/users']
        ]
    ],
];
Configure::write('Config.language', 'kor');
