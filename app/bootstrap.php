<?php 
    require_once('config/config.php');

    // Load libraries
    // require_once('lib/Controller.php');
    // require_once('lib/Core.php');
    // require_once('lib/Database.php');
    
    // Autoload Core libraries
    spl_autoload_register(function($className) {
        require_once('lib/' . $className . '.php');
    });
