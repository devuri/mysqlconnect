<?php

class ConnectMysql{

	// include dbconnection info here
	private $username='myd-8734hajye6vd';
        private $password='3648376@#$#@$24aF?@!35hjatgh';
        private $host='localhost';
        private $dbname='wp-db-sitename';

	// load db connection values
	public function __construct($host='', $db='', $user='', $password=''){

            if(!empty($db)){$this->dbname = $db;}
            if(!empty($host)){$this->host = $host;}
            if(!empty($user)){$this->username = $user;}
            if(!empty($password)){$this->password = $password;}

        }

	// start the connection
        private function connectdb(){
            try{
                $connection = new PDO("mysql:dbname=$this->dbname;host=$this->host", $this->username, $this->password);
            }catch(Exception $e){
                echo 'connection error: <br>' . $e->getMessage();
            }
            return $connection;
        }

}
