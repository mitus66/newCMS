<?php
/**
 * Created by PhpStorm.
 * User: mitus66
 * Date: 18.09.2018
 * Time: 14:05
 */

namespace App;


class Db
{

    protected $dbh;

    public function  __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];

        $this->dbh = new \PDO(
            'mysql:host='
            . $config['host']
            . ';dbname='
            . $config['dbname'],
            $config['user'],
            $config['password']
        );
    }

    public function query($sql, $data=[])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(\PDO::FETCH_CLASS);
    }
}