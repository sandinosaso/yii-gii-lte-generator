<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
<<<<<<< HEAD
            'dsn' => 'mysql:host=localhost;dbname=demo',
            'username' => 'root',
            'password' => 'root',
            'schema' => 'public',
            'charset' => 'utf8',
            /* 'schemaMap' => [
=======
            'dsn' => 'pgsql:host=localhost;dbname=prueba',
            'username' => 'postgres',
            'password' => 'postgres',
            'schema' => 'public',
            'charset' => 'utf8',
             'schemaMap' => [
>>>>>>> 71ae2544fbf0aadcb1f2ba28b7d38922056fceac
                  'pgsql'=> [
                    'class'=>'yii\db\pgsql\Schema',
                    'defaultSchema' => 'public' //specify your schema here
                  ]
<<<<<<< HEAD
            ], */
=======
            ], 
>>>>>>> 71ae2544fbf0aadcb1f2ba28b7d38922056fceac
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
