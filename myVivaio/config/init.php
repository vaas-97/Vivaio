<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once './classi/Database.php';

$GLOBALS['db'] = Database::GetIstanza('localhost', 'root', '');
$GLOBALS['db']->chiedi('USE vivaio');

require_once './classi/Vivaio.php';
