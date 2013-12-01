<?php

////////////////////
//  CLASSES
////////////////////////////

/* Configuration Class */
class Config
{

}

/* Database Class */
class DbConnection  
{
    public $mysql;
        private $db_host = 'localhost';
        private $db_username = 'root';
        private $db_password = 'root';
        private $db_name = 'dynamic';

    public function dbConnect()
    {
            $mysql = new mysqli($this->db_host, $this->db_username, $this->db_password, $this->db_name)
            or die(mysql_error());
    }

    public function selectQuery($colName, $table)
    {

        $this->dbConnect();

        $query = mysql_query("SELECT * from $table");
        while($row = mysql_fetch_assoc($query))
        {
            echo "test";
        }

        $this->dbDisconnect();
        /*
        foreach($rows as $result):
            return $result;
        endforeach;
        */
    }

    public function dbDisconnect()
    {
        $this->mysql->close();
    }
}

/* Query Class */
class Queries
{




}

////////////////////
//  DEFINITIONS
////////////////////////////

$cfg = new Config();
$db  = new DbConnection();
$q   = new Queries();

?>