<?php

/**
 * Database Connectiion
 */
class Database
{
    private function connect()
    {

        if (!$con = new PDO(DBDRIVER . ":host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS)) {
            die("Connection failed: " . $con->connect_error);
        }

        return $con;
    }

    public function query($query, $data = array(), $data_type = "object")
    {
        $con = $this->connect();
        $stm = $con->prepare($query);


        if ($stm) {
            $check = $stm->execute($data);
            
            if ($check) {
                if ($data_type == "object") {
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                }
                if (is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        }

        return false;
    }
}