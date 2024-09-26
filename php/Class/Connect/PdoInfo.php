<?php
namespace Class\Connect;

use M1\Env\Parser;

class PdoInfo {
    public string $mySqlHostName;
    public string $dbName;
    public string $user;
    public string $password;
    public string $charset;

    public function __construct()
    {
        $env = new Parser(file_get_contents('../.env'));
        $arr = $env->getContent();
        $this->mySqlHostName = $arr['MYSQL_HOSTNAME'];
        $this->dbName = $arr['MYSQL_DATABASE'];
        $this->user = $arr['MYSQL_USER'];
        $this->password = $arr['MYSQL_ROOT_PASSWORD'];
        $this->charset = $arr['CHARSET'];
    }
    

    public function GetMysqlHostName(){
        return $this->mySqlHostName;
    }
    public function GetDbName(){
        return $this->dbName;
    }
    public function GetUser(){
        return $this->user;
    }
    public function GetPassword(){
        return $this->password;
    }
    public function GetCharset(){
        return $this->charset;
    }


}