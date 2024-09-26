<?php

Namespace Class\Connect;
Use PDO;
Use Class\Connect\PdoInfo;


Class SingletonConnect {

    private static $instance = null;
    


    public static function GetInstance(){
        $pdoInfo = new PdoInfo();
        $dns = "mysql:host=". $pdoInfo->GetMysqlHostName() .";dbname=" . $pdoInfo->GetDbName() . ";charset=". $pdoInfo->GetCharset();
        $user = $pdoInfo->GetUser();
        $password = $pdoInfo->GetPassword();
        if(self::$instance === null){
            self::$instance = new PDO($dns, $user, $password);
        }
        return self::$instance;
    }
    private function __clone() {
        // Prevent cloning of Singleton instance
    }
    public function __wakeup() {
        throw new \Exception("Cannot unserialize a singleton.");
}
}


