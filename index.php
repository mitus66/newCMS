<?php
/**
 * Created by PhpStorm.
 * User: mitus66
 * Date: 18.09.2018
 * Time: 12:37
 */

require __DIR__ . '/autoload.php';

$db = new \App\Db();
$data = $db->query('SELECT * FROM news');

var_dump($data);