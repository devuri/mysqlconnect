<?php

class mysqlConnector{

				private $username='';
        private $password='';
        private $host='';
        private $dbname='';

        public function __construct($host='', $db='', $user='', $password=''){

            if(!empty($db)){$this->dbname = $db;}
            if(!empty($host)){$this->host = $host;}
            if(!empty($user)){$this->username = $user;}
            if(!empty($password)){$this->password = $password;}

        }

        private function getConnection(){
            try{
                $connection = new PDO("mysql:dbname=$this->dbname;host=$this->host", $this->username, $this->password);
            }catch(Exception $e){
                echo 'connection error: <br>' . $e->getMessage();
            }
            return $connection;
        }

}

?>
