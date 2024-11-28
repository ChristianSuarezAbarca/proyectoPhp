<?php
return [
    'database' => [
        'name' => 'proyectophp',
        'username' => 'christian',
        'password' => 'php',
        'connection' => 'mysql:host=proyecto.local',
        'options' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true
        ]
    ],
    'mailer' => [
        'smtp_server' => 'smtp.gmail.com',
        'smtp_port' => '587',
        'smtp_security' => 'tls',
        'username' => 'chrissuaabatablet@gmail.com',
        'password' => 'php',
        'email' => 'chrissuaabatablet@gmail.com',
        'name' => 'Tortu'
    ],
    'logs' => [
        'filename' => 'curso.log',
        'level' => \Monolog\Logger::WARNING
    ],
    'routes' => [
        'filename' => 'routes.php'
    ],
    'project' => [
        'namespace' => 'proyecto'
    ],
    'security' => [
        'roles' => [
            'ROLE_ADMIN' => 3,
            'ROLE_USER' => 2,
            'ROLE_ANONYMOUS' => 1
        ]
    ]
];
