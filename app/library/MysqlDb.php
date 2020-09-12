<?php


class MysqlDb
{
    private static $Db;

    public static function getDb(): MysqliDb
    {
        if (!self::$Db) {
            self::init();
        }
        return self::$Db;
    }

    private static function init()
    {
        // db staying private here
        $dbConfig = Config::get("db");
        self::$Db = new MysqliDb (
            $dbConfig['hostname'],
            $dbConfig['username'],
            $dbConfig['password'],
            $dbConfig['database'],
            $dbConfig['hostport'],
            $dbConfig['charset']
        );
        if ($dbConfig['prefix']) {
            self::$Db->setPrefix($dbConfig['prefix']);
        }
    }
}