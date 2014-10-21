<?php
define('DOC_ROOT' , $_SERVER['DOCUMENT_ROOT'] . "/");
define('DS' , DIRECTORY_SEPARATOR);
define('INCLUDES' , DOC_ROOT . 'social/includes' . DS);
define('DATABASE' , DOC_ROOT . 'social/database' . DS );
define('MODELS_DIR' , DOC_ROOT . 'social/database' . DS . 'models' . DS);

require_once DATABASE . 'db_connect.php'; 
