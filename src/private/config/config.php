<?php

require_once '../library/php-activerecord/ActiveRecord.php';
//initializing connection
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:secret@mysql-server/myDatabase'
    ));
});
