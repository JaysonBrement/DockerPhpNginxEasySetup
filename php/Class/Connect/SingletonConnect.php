<?php

Namespace Class\Connect;

Class SingletonConnect extends PdoInfo {
    private static $instance = null;

    private function __construct(
        string $mySqlHostName,
        string $dbName,
        string $user,
        string $password
    )
    {
        parent::__construct($mySqlHostName,$dbName,$user,$password);
    }
    public static function getInstance(){
        if(self::$instance===null){
            $PdoInfo = new parent();
            self::$instance = new self(
                $PdoInfo->GetMysqlHostName(),
                $PdoInfo->GetDbName(),
                $PdoInfo->GetUser(),
                $PdoInfo->GetPassword()
                );
        }
        return self::$instance;
    }

    
}

