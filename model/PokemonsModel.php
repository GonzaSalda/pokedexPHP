<?php

class PokemonsModel {

    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function getPokemon() {
        return $this->database->query('SELECT * FROM pokemon');
    }


    public function search() {
                $searchTerm = $_POST['searchTerm'];
                // Sanitize the search term to prevent SQL injection
                $searchTerm = $this->database->escape($searchTerm);
                $pokemon = $this->database->query('SELECT * FROM pokemon WHERE nombre LIKE "%' . $searchTerm . '%"');
                return $pokemon;
            }
}