<?php
    class db {
        private $dbHost = 'localhost';
        private $dbUser = 'claudioc_apiExma';
        private $dbPass = 'apiexm@123';
        private $dbName = 'apiRestExma';

        public function connectDB(){
            $mysqlConnect = "mysql:host=$this->dbHost;dbname=$this->dbName";
            $dbConnection = new PDO($mysqlConnect, $this->dbUser, $this->dbPass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }