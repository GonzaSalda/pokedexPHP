<?php

class LoginModel {

    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function login($username, $password) {
        $query = "SELECT * FROM admin WHERE usuario = '$username' AND password = '$password'";
        $result = $this->database->query($query);
        return ($result->num_rows > 0);
    }
}