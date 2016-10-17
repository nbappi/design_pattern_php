<?php

class Database {
     public $driver;
     public $link;

     public function setDriver($driver){
        $this->driver = $driver;
     }

     public function connect(){
     	if( $this->driver == "mysql"){
            $mysql = new ManageMysql();
			$mysql->setHost("localhost");
			$mysql->setDB("DB");
			$mysql->setUser("root");
			$mysql->setPass("password");
			$this->link = $mysql->connect();
     	}elseif( $this->driver == "sqlite"){
            $mysqlite = new ManageSqlite();
			$mysqlite->setHost("localhost");
			$mysqlite->setDB("DB");
			$mysqlite->setUser("root");
			$mysqlite->setPass("password");
			$this->link = $mysqlite->connect();
     	}
     }
}