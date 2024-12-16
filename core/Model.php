<?php

class Model {
    protected $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=cb', 'dev', '1234');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Database connection failed: ' . $e->getMessage());
        }
    }
}
