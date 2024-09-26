<?php
namespace Class\Connect;

use M1\Env\Parser;

class PdoInfo {
    protected string $mySqlHostName;
    protected string $dbName;
    protected string $user;
    protected string $password;

    protected function __construct()
    {
        $env = new Parser(file_get_contents('../.env'));
        $arr = $env->getContent();
        $this->mySqlHostName = $arr['MYSQL_HOSTNAME'];
        $this->dbName = $arr['MYSQL_DATABASE'];
        $this->user = $arr['MYSQL_USER'];
        $this->password = $arr['MYSQL_ROOT_PASSWORD'];
    }

    protected function GetMysqlHostName(){
        return $this->mySqlHostName;
    }
    protected function GetDbName(){
        return $this->dbName;
    }
    protected function GetUser(){
        return $this->user;
    }
    protected function GetPassword(){
        return $this->password;
    }


}