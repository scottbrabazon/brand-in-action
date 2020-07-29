<?php
    define('PERCH_LICENSE_KEY', 'P21310-ASE039-JLN513-UZM679-DQB024');

    define("PERCH_DB_USERNAME", 'brandaction');
    define("PERCH_DB_PASSWORD", 'greensubsideworkroom');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "brandaction");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'Europe/London');

    define('PERCH_EMAIL_FROM', 'scott.brabazon@foundrycomms.co.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Scott Brabazon');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_EMAIL_METHOD', 'smtp');
    define('PERCH_EMAIL_HOST', 'smtp.sparkpostmail.com');
    define('PERCH_EMAIL_AUTH', true);
    define('PERCH_EMAIL_SECURE', '');
    define('PERCH_EMAIL_PORT', 587);
    define('PERCH_EMAIL_USERNAME', 'SMTP_Injection');
    define('PERCH_EMAIL_PASSWORD', '34fff2bfb7a7a308bb6f604cbafb6d3e1f1473d7');
        
    define('PERCH_HTML5', true);
