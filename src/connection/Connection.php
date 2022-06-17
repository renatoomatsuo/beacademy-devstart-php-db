<?php

declare(strict_types=1);

namespace App\Connection;

ini_set('default_charset', 'utf-8');

use PDO;
abstract class Connection 
{
    public static function getConnection(): PDO
    {
        $database = 'db_store';
        $username = 'root';
        $password = '2844';

        return new PDO ('mysql:local=localhost;dbname='.$database, $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    }
}
