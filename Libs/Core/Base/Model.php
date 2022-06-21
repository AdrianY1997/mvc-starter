<?php

require_once 'libs/Core/database.php';

//Modelo Base

class Model
{
    function __construct($name)
    {
        $this->db = new Database();
        $this->name = $name;
    }

    public function get(array|string $keys = null, array $data = null)
    {
        $key = "*";
        $where = "";

        if ($keys) {
            $key = "";
            if (is_array($keys)) {
                foreach ($keys as $k) {
                    $key .= $k . ", ";
                }
            } else {
                $key = $keys;
            }
        }

        if ($data) {
            $where = " WHERE ";
            if (is_array($data)) {
                foreach (array_keys($data) as $e) {
                    $where .= $e . "='" . $data[$e] . "' OR ";
                }
            }
        }

        $string =  "SELECT " . trim(rtrim($key, ", ")) . " FROM " . $this->name . rtrim($where, 'OR ');
        $query = $this->db->connect()->prepare($string);

        try {
            $query->execute();
            return $query->fetch();
        } catch (PDOException $e) {
        }
    }

    public function getAll($data = null)
    {
        $items = [];
        $string = "";

        if ($data) {
            $string = " WHERE ";
            foreach (array_keys($data) as $e) {
                $string .= $e . "='" . $data[$e] . "' AND ";
            };
        }

        $string =  "SELECT * FROM " . $this->name . rtrim($string, 'AND ');

        $query = $this->db->connect()->prepare($string);
        try {
            $query->execute();

            while ($row = $query->fetch()) {
                $item = new $this;

                foreach (array_keys($row) as $r) {
                    if (!is_int($r)) {
                        $item->{$r} = $row[$r];
                    }
                }
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return false;
        }
    }
}