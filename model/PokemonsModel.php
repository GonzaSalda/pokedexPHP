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
        $searchTerm = isset($_POST['searchTerm']) ? $this->database->escape($_POST['searchTerm']) : '';
                $searchTerm = $this->database->escape($searchTerm);
                $pokemon = $this->database->query('SELECT * FROM pokemon WHERE nombre LIKE "%' . $searchTerm . '%" OR tipo1 LIKE "%' . $searchTerm . '%" OR tipo2 LIKE "%' . $searchTerm . '%"');
                return $pokemon;
            }
}