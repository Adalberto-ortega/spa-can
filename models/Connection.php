<?php

class Connection {

    var $db = null;

    public function __construct($user = 'root', $pass = '', $database = 'db_auto', $host = 'localhost', $port = '3306')
    {
        $this->db = new mysqli($host, $user, $pass, $database);

        if($this->db->connect_errno) {
            print "Error en la conexión " . $this->db->connect_errno;
            exit();
        }

        return $this->db;
    }
}