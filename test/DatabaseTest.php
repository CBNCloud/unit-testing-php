<?php
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    
    public static function GetConnection()
    {
        $user     = 'root';
        $password = '';
        $pdo      = new PDO('mysql:dbname=testdb;host=127.0.0.1', $user, $password);
        
        return $pdo;
    }
    
    public static function testCreateTable()
    {
        Self::getConnection()->query("CREATE TABLE belajar (hasil VARCHAR(50) NOT NULL)");
    }
    
    public static function testInsertTable()
    {
        $sql = "INSERT INTO belajar (hasil) VALUES ('John')";
        // use exec() because no results are returned
        Self::getConnection()->exec($sql);
    }
    
    public static function testDeleteTable()
    {
        Self::getConnection()->query("DROP TABLE belajar");
    }
}

?>