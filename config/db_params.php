<?php

$BaseConnect = 3;

switch ($BaseConnect) {

// Массив с параметрами подключения к базе данных
    case 1: {
            return array(
                'host' => 'localhost',
                'dbname' => 'vitbase',
                'user' => 'root',
                'password' => '',
            );
        };
        break;
    case 2: {
            return array(
                'host' => 'localhost',
                'dbname' => 'u1663726_default',
                'user' => 'u1663726_default',
                'password' => '57xFc3UBjp0C7aQv',
            );
        };
        break;
    case 3: {
            return array(
                'host' => 'localhost',
                'dbname' => 'u1845303_default',
                'user' => 'u1845303_default',
                'password' => '4sv48CsmRjZC9GXm',
            );
        };
        break;
}
