<?php

namespace OpenClassrooms\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=racoonstwwromain.mysql.db;dbname=racoonstwwromain;charset=utf8', 'racoonstwwromain', 'Mdpracoonovh91');
        return $db;
    }
}
