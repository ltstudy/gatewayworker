<?php
require "config.php";
define("REQUEST_ID", (isset($_SERVER['REQUEST_ID']) ? $_SERVER['REQUEST_ID'] : strtolower(md5(uniqid()))));
$GLOBALS['global_config_data'] = $global_config_data;