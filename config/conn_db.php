<?php

    class DB {
        private $host;
        private $db;
        private $user;
        private $pass;
        private $conexion;
        public function __construct()
        {
            $this->host = "localhost";
            $this->db = "hive_vpn";
            $this->user = "josedev";
            $this->pass = "jose_deo";
            $this->conexion = "mysql:host=".$this->host.";dbname=".$this->db;
        }
        public function connect(){
            try{
                $pdo = new PDO($this->conexion,$this->user,$this->pass);
                return $pdo;
            }catch(PDOException $e){
                die("Error: ".$e->getMessage());
            }
        }
    }

