<?php

return [
    'driver' => env('MAIL_DRIVER'),
    'host' => env('MAIL_HOST'),
    'port' => env('MAIL_PORT'),

    'from' => [
        'address' => 'zhoyennn@Gmail.com',
        'name' => 'admin', // 经测试，.env中的中文会被忽略，所以此变量不在.env中设置
    ],
    
    'encryption' => env('MAIL_ENCRYPTION'),
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'sendmail' => '/usr/sbin/sendmail -bs',

];
