<?php
// kaustade ja failide konstantsed nimetused
define('MODEL_DIR', 'model/');
define('VIEW_DIR', 'views/');
define('CONTROL_DIR', 'controllers/');
define('LIB_DIR', 'lib/');
define('DEFAULT_CONTROL', 'default'); // vaikimis kasutatav kontroller
// nõuame abifunktisoonide faili kasutamist
require_once LIB_DIR.'utils.php';
// nõuame vajalike failide kasutamist
require_once MODEL_DIR.'template.php';
require_once MODEL_DIR.'http.php';
require_once MODEL_DIR.'linkobject.php';
require_once MODEL_DIR.'mysql.php';
// nõuame vajalikud abikonfiguratsiooni failid
require_once 'db_conf.php';
// loome objektid, mis oleks vaja pidevalt kasutada
$http = new linkobject(); // http ja lingi objekt
// andmebaasi objekt
$db = new mysql(DB_HOST, DB_USER, DB_PASS, DB_NAME);
