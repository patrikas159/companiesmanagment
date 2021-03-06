<?php
namespace CompanyApp;
use PDO;
class DB {
    private static $connection='mysql:host=127.0.0.1';
    private static $user="root";
    private static $password="";
    private static $database="company";
    private static $options=[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING
    ];
    public static function connect(){
        try{
            return new PDO(
                self::$connection.';dbname='.self::$database,
                self::$user,
                self::$password,
                self::$options
            );
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}