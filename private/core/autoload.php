<?php

require "config.php";
require "controller.php";
require "database.php";
require "model.php";
require "app.php";


spl_autoload_register(function ($class_name) {
    require MODEL . ucfirst($class_name) . ".php";
});

?>