<?php

    class Sql extends PDO {

        private $conn;

        public function __construct(){

            $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
        }


        //parametros onde vai ter o parametro base e um arrays com outros parametros, que vai circula até acaba os parametros
        //paramenters,key,statment,
        private function setParams($statment, $parameters = array()){

            foreach ($parameters as $key => $value){

                $this->setParam($key, $value);
            }
            
        }

        //Parametro onde vai ter um parametro base, e vai ter onde vai escrever os dados do parametro
        //statment,key,value
        private function setParam($statment, $key, $value){

            $statment->bindParam($key, $value);
        }


        //onde vai ter a query bruta, e um arrays de parametro: 
        //rawquery,params,stmt.
        public function query($rawQuery, $params = array()){

            $stmt = $this->conn->prepare($rawQuery);

            $this->setParams($stmt, $params);

            $stmt->execute();

            return $stmt;

        }

        
        public function select ($rawQuery,$params = array()):array 
        {

            $stmt= $this->query($rawQuery, $params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }


?>