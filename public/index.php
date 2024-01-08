
<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(VIEW_PATH . '/login.php');

$user = new User(['name' => 'Eu','email' => 'eu@com']);
print_r($user);
