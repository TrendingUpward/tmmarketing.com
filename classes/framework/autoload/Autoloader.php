<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////

//namespace Classes\framework\autoload;

class Autoloader{
    protected $basePath = '';
    protected $classes = array(
        //PW
        'PwCrypt'                       => '/framework/security/PwCrypt.php',
        'IPassword'                     => '/framework/security/IPassword.php',
        'AzDGCrypt'                     => '/lib/azdgcrypt/AzDGCrypt.php',

        //Logger
        'RollingGzipLogger'             => '/framework/logger/php-logger/RollingGzipLogger.php',
        'PSR3_Log_AbstractLogger'       => '/framework/logger/php-logger/php-fig/AbstractLogger.php',
        'PSR3_Log_InvalidArgumentException' => '/framework/logger/php-logger/php-fig/InvalidArgumentException.php',
        'PSR3_Log_LoggerAwareInterface' => '/framework/logger/php-logger/php-fig/LoggerAwareInterface.php',
        'PSR3_Log_LoggerAwareTrait'     => '/framework/logger/php-logger/php-fig/LoggerAwareTrait.php',
        'PSR3_Log_LoggerInterface'      => '/framework/logger/php-logger/php-fig/LoggerInterface.php',
        'PSR3_Log_LoggerTrait'          => '/framework/logger/php-logger/php-fig/LoggerTrait.php',
        'PSR3_Log_LogLevel'             => '/framework/logger/php-logger/php-fig/LogLevel.php',
        'PSR3_Log_NullLogger'           => '/framework/logger/php-logger/php-fig/NullLogger.php',
        'Logger'                        => '/framework/logger/Logger.php',

        //Session
        'Session'                       => '/domain/security/Session.php',

        //contact
        'ContactDAO'                    => '/domain/contact/ContactDAO.php'

    );
    public function __construct($basePath) {
        $this->setBasePath($basePath);
    }
    public function setBasePath($basePath) {
        $this->basePath = $basePath;
    }
    public function getBasePath() {
        return $this->basePath;
    }
    public function autoload($className) {

        if( isset($this->classes[$className])){
                echo $this->getBasePath() . $this->classes[$className];
            //if(!@include($this->getBasePath() . $this->classes[$className])) throw new Exception("Failed to include 'file'");
                require_once ($this->getBasePath() . $this->classes[$className]);

        }

    }
}